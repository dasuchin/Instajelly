<?php
/**
 * Page controller
 */
class Page extends Controller {
	
	var $view;
	
	function __construct() {
		
		parent::__construct();
		
	}
	
	function setLayout() {
		
		$this->layout = 'cms.tpl';
		
	}
	
	function action404($params='') {
		
		echo '404 :(';
		exit(0);
		
	}
	
	function actionIndex($params='') {
		
		$objPage = new PagesModel;
		$objLayout = new LayoutModel;
		
		$page_id = !empty($params['page_id'])?intval($params['page_id']):0;
		$previewPage = !empty($params['preview'])?true:false;
		
		if(empty($params['page_id'])) {
			
			$page_id = $objPage->getPageId('home');
			
		}
		
		$pageInfo = $objPage->loadPage($page_id);
		
		if(!empty($pageInfo) && $pageInfo['status'] == 'published' && $pageInfo['type'] == 'page' || $previewPage == true) {
			
			// load additional page info
			$sideBars = $objPage->getPageSidebars($page_id);
			$layoutInfo = $objLayout->loadLayout($pageInfo['layout_id']);
			
			// used to set active state in menu
			$this->view->current_page = $pageInfo['keyName'];
			
			//assign template vars
			$this->view->assign('pageTitle',$pageInfo['title']);
			
			if(!empty($sideBars)) {
				
				$this->view->assign('sidebar_left',$this->view->fetch('fromstring:'.$sideBars['left']['content']));
				$this->view->assign('sidebar_right',$this->view->fetch('fromstring:'.$sideBars['right']['content']));
				
			}

			if($page_id == 9) {
				
				$objUser = new UserModel();
				$recentUsers = $objUser->getRecentUsers('user', 251);
				$numUsers = $objUser->getNumUsers('user');
				
				$recent = array();
				$i = 0;
				foreach($recentUsers as $user) {

					$recent[$i]['username'] = $user['username'];
					if($user['user_query'] != 'null') {
						$recent[$i]['image'] = json_decode($user['user_query'])->data->profile_picture;
					}

					$i++;

				}

				$this->view->assign('recentUsers', $recent);
				$this->view->assign('numUsers', $numUsers);

			}
			
			$this->view->assign('content',$this->view->fetch('fromstring:'.$pageInfo['content']));
			
			$this->view->assign('layout',$this->view->fetch('fromstring:'.$layoutInfo['code']));
			
		} else {
			
			// page not found
			$this->view->assign('layout','404 - '.print_r($params,true));
			
		}
		
		$this->finish();
		
	}
	
}

?>
