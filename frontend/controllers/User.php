<?php

class User extends Controller {
	
	var $errorMsg;
	
	function __construct() {
		
		parent::__construct();
		$this->PermissionsModel = new PermissionsModel;
		$this->objAuthentication = Authentication::getInstance();
		
	}
	
	function setLayout() {
		
		$this->layout = 'user.tpl';
		
	}
	
	function actionRegister($params='') {
		
		$objInstagram = new InstagramModel();
		$objInstagram->authorize('http://'.URL.'/user/complete');
		die();
		
	}
	
	function actionComplete($params = '') {
		
		$objInstagram = new InstagramModel();
		
		if(!empty($params['code'])) {
			$response = $objInstagram->requestToken($params['code'], 'http://'.URL.'/user/complete');
		}

		if($response->access_token) {
			
			$objFriendlyurl = new FriendlyurlModel();
			$objUser = new UserModel($response->user->username);
			$userInfo = $objUser->getInfo();
			
			$saveData = array();
			$saveData['access_token'] = $response->access_token;
			$saveData['username'] = $response->user->username;
			$saveData['user_id'] = $response->user->id;
			$saveData['type'] = 'user';
			$saveData['user_query'] = json_encode($objInstagram->getUserInfo($response->user->id, $response->access_token));
			$saveData['id'] = $userInfo['id'];
			
			$internal_id = $objUser->saveUser($saveData);
			
			// If new user, send the Pusher message
			if($internal_id != $saveData['id']) {
			//if(1==1) { // always send the message, for testing!
				
				$instagramUserInfo = $objInstagram->getUserInfo($response->user->id, $response->access_token);
				
				$objPusher = $this->connectPusher();
				
				// channel to send message on
				$channel = 'private-userEvents';
				
				// build the message
				$message = array('user_id'=>$internal_id, 'username'=>$instagramUserInfo->data->username, 'picture'=>$instagramUserInfo->data->profile_picture);
				
				// fire off the message
				$sent = $objPusher->trigger($channel, 'newUser', $message);
				
			}
			
			$objFriendlyurl->saveUrl('/'.$response->user->username, 'User', 'Profile', array('username'=>$response->user->username));
			
			setcookie('username', $response->user->username, time()+60*60*24*365*10);
			
			if(!empty($_COOKIE['lastaction'])) {
				
				$lastaction = $_COOKIE['lastaction'];
				unset($_COOKIE['lastaction']);
				setcookie('lastaction', null, -1);
				header('Location: http://'.URL.'/'.$lastaction);
				
			} else {
				
				header('Location: http://'.URL.'/'.$response->user->username);
				
			}
			
			die();
			
		} else if($response->code == 400) {
			
			$objDispatcher = new Dispatcher();
			$objDispatcher->setController('user');
			$objDispatcher->setAction('register');
			$objDispatcher->dispatch();
			
		} 
		
		
	}
	
	// pusher auth action
	function actionPusherAuth($params='') {
		
		$objPusher = $this->connectPusher();
		
		$channelName = !empty($params['channel_name'])?$params['channel_name']:false;
		$socketId = !empty($params['socket_id'])?$params['socket_id']:false;
		
		if(substr($channelName,0,7) == 'private') {
			
			// Auth for private channel
			echo $objPusher->socket_auth($channelName,$socketId);
			
		} else if(substr($channelName,0,8) == 'presence') {
			
			// Auth for presence channel
			echo $objPusher->presence_auth($channelName,$socketId, $_COOKIE['username'] ,null);
			
		}
		
		exit(0);
		
	}
	
	function actionProfile($params='') {
		
		$userModel = new UserModel($params['username']);
		$userInfo = $userModel->getInfo();
		
		$objLayout = new LayoutModel();
		$objTemplate = new TemplatesModel();
		$objInstagram = new InstagramModel();
		$objSettings = Settings::getInstance();
		
		$media = $objInstagram->getMedia($userInfo['user_id'], $userInfo['access_token'], array('count'=>20));

		//cache latest media query
		//if we hit the query limit we will use the cached version
		if($media->meta->code == 200) {
			$saveData = array();
			$saveData['media_query'] = json_encode($media);
			$saveData['id'] = $userInfo['id'];
			$saveData['type'] = 'user';
			$saveData['user_query'] = json_encode($objInstagram->getUserInfo($userInfo['user_id'], $userInfo['access_token']));
			$saveData['views'] = $userInfo['views'] + 1;

			$userModel->saveUser($saveData);

			$userInfo['user_query'] = $saveData['user_query'];
		} else {
			if(isset($_COOKIE['username']) && $_COOKIE['username'] == $params['username']) {
				header('Location: http://'.URL.'/user/register');
			}
			$media = json_decode($userInfo['media_query']);
		}
		
		if(isset($media->pagination->next_url)) {
			$this->view->assign('more', true);
		}
		
		$layoutInfo = $objLayout->loadLayout(3);
		$template = $objTemplate->loadTemplateFromKeyname('user-profile');
		
		$this->view->assign_by_ref('profile', json_decode($userInfo['user_query']));
		$this->view->assign_by_ref('media', $media);
		$this->view->assign('userInfo',$userInfo);
		$this->view->assign('pageTitle', $userInfo['username']);
		$this->view->assign('content',$this->view->fetch('fromstring:'.$template['content']));
		$this->view->assign('sidebar_left',$this->view->fetch('fromstring:'.$template['left_sidebar']));
		$this->view->assign('sidebar_right',$this->view->fetch('fromstring:'.$template['right_sidebar']));
		$this->view->assign('layout',$this->view->fetch('fromstring:'.$layoutInfo['code']));
		$this->finish();
		
	}

	function actionHasprofile($params = '') {

		$objUser = new UserModel();
		$exists = $objUser->usernameUsed($params['username']);

		if(!empty($exists)) {
			$return = array('hasprofile'=>true, 'username'=>$params['username']);
		} else {
			$return = array('hasprofile'=>false);
		}

		echo json_encode($return);
		die();

	}

	function actionComment($params = '') {
		
		$username = (isset($_COOKIE['username'])) ? $_COOKIE['username'] : '';
		
		if(!empty($params['viewing'])) {
			setcookie('lastaction', $params['viewing']);
		}

		if(!empty($username)) {

			$objUser = new UserModel($username);
			$userInfo = $objUser->getInfo();

			$objInstagram = new InstagramModel();
			$comment = $objInstagram->postComment($params['media_id'], $params['comment'], $userInfo['access_token']);
			
			if($comment->meta->code != 200) {
				echo json_encode(array('nocookie'=>'true'));
				die();
			}

			echo json_encode(array('comment'=>'true', 'username'=>$username, 'profile_picture'=>json_decode($userInfo['user_query'])->data->profile_picture));

		} else {
			echo json_encode(array('nocookie'=>'true'));
		}

		die();

	}

	function actionLike($params = '') {

		$username = (isset($_COOKIE['username'])) ? $_COOKIE['username'] : '';

		if(!empty($params['viewing'])) {
			setcookie('lastaction', $params['viewing']);
		}

		if(!empty($username)) {

			$objUser = new UserModel($username);
			$userInfo = $objUser->getInfo();

			$objInstagram = new InstagramModel();
			$like = $objInstagram->like($params['media_id'], $userInfo['access_token']);
			
			if($like->meta->code != 200) {
				echo json_encode(array('nocookie'=>'true'));
				die();
			}

			echo json_encode(array('like'=>'true'));

		} else {
			echo json_encode(array('nocookie'=>'true'));
		}

		die();

	}

	function actionLoadimages($params = '') {

		$objUser = new UserModel($params['username']);
		$userInfo = $objUser->getInfo();
		$objInstagram = new InstagramModel();
		
		$media = json_decode($userInfo['media_query']);
		if(!empty($params['max_id'])) {
			$max_id = $params['max_id'];
		} else if (isset($media->pagination->next_max_id)) {
			$max_id = $media->pagination->next_max_id;
		} else {
			$max_id = '';
		}
		
		$more = $objInstagram->getMedia($userInfo['user_id'], $userInfo['access_token'], array('count'=>20, 'max_id'=>$max_id));
		
		$results = array();
		$results['html'] = '';
		foreach($more->data as $media) {

			$caption = '';
			if(isset($media->caption->text)) {
				$caption = $media->caption->text;
			}
			$results['html'] .= '<li><div class="img"><a href="'.$media->images->standard_resolution->url.'"><img src="'.$media->images->low_resolution->url.'" title="'.$caption.'"/></a></div>';
			$results['html'] .= '<div class="data">';
			$results['html'] .= '<a class="likes"> <span>'.$media->likes->count.'</span> <b class="icon">6</b></a>';
			$results['html'] .= '<a href="'.$media->images->standard_resolution->url.'" class="comments"><span>'.$media->comments->count.'</span> <b class="icon">:</b></a>';
			$results['html'] .= '</div>';
			$results['html'] .= '<div class="ninja">';
			$results['html'] .= '<ul id="tags">';
			foreach($media->tags as $tag) {
				$results['html'] .= '<li>'.$tag.'</li>';
			}
			$results['html'] .= '</ul>';
			$results['html'] .= '<ul id="photo-comments">';
			foreach($media->comments->data as $comment) {
				$results['html'] .= '<li><a href="javascript:hasProfile(\''.$comment->from->username.'\');" class="commenter"><img src="'.$comment->from->profile_picture.'" title="'.$comment->from->username.'" class="commenter-photo"/></a> <div><a href="javascript:hasProfile(\''.$comment->from->username.'\');" class="commenter">'.$comment->from->username.'</a> '.$comment->text.'</div></li>';
			}
			$results['html'] .= '</ul>';
			$results['html'] .= '</div>';
			$results['html'] .= '</li>';

		}

		if(isset($more->pagination->next_max_id)) {
			$results['max_id'] = $more->pagination->next_max_id;
		}

		echo json_encode($results);
		die();

	}
	
}

?>
