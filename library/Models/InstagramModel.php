<?php

class InstagramModel extends Model {
	
	private $client_id = '37f20fed79f34c3893353fc7c6d49e43';
	private $client_secret = '32e01fb7245742b7a6ac21a4f7a721b5';
	//private $client_id = '93c438ea8c854df4903d47dcc39c7ab2';
	//private $client_secret = '044d183939a24e6ab13c0fc102e99a9a';
	private $base_api_url = 'https://api.instagram.com/v1/';
	
	function __construct() {
		
		parent::__construct();
		
	}
	
	function authorize($returnUrl) {
		
		header('Location: https://api.instagram.com/oauth/authorize/?client_id='.$this->client_id.'&redirect_uri='.$returnUrl.'&response_type=code&scope=likes+comments+relationships');
		
	}
	
	function requestToken($code, $returnUrl) {
		
		$tokenUrl = 'https://api.instagram.com/oauth/access_token';
		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $tokenUrl); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'client_id='.$this->client_id.'&client_secret='.$this->client_secret.'&grant_type=authorization_code&code='.$code.'&redirect_uri='.$returnUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);

		return json_decode($output);
		
	}
	
	function getMedia($user_id, $access_token, $params = array()) {
		
		return $this->sendRequest('/users/'.$user_id.'/media/recent/?access_token='.$access_token.'&'.http_build_query($params));
		
	}
	
	function getUserInfo($user_id, $access_token) {
		
		return $this->sendRequest('/users/'.$user_id.'/?access_token='.$access_token);
		
	}

	function postComment($media_id, $comment, $access_token) {

		return $this->sendRequest('/media/'.$media_id.'/comments/?access_token='.$access_token, array('text'=>$comment));

	}

	function like($media_id, $access_token) {

		return $this->sendRequest('/media/'.$media_id.'/likes/?access_token='.$access_token, array('like'=>'like'));

	}
	
	private function sendRequest($url, $post = array()) {
		
		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $this->base_api_url.$url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        if(!empty($post)) {
        	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        }
        $output = curl_exec($ch); 
        curl_close($ch);

		$results = json_decode($output);

		/*if($results->meta->code == '400') {
			header('Location: http://'.URL.'/user/register');
		} else {
			return $results;
		}*/
		return $results;
		
	}
	
}
