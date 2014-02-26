<?php
   
    $app_id		= "1423264751250906";
    $app_secret	= "9c9895fd843dacbc975d217a9e12d81d";
    $site_url	= "http://localhost/gamifield/index.php";

    try{
	include_once "src/facebook.php";
    }catch(Exception $e){
    	error_log($e);
    }
    
    $facebook = new Facebook(array(
	'appId'		=> $app_id,
	'secret'	=> $app_secret,
	));
 
       
    $user = $facebook->getUser();
    
    if($user){
    //==================== Single query method ======================================
	try{
		// Proceed knowing you have a logged in user who's authenticated.
		$user_profile = $facebook->api('/me');
	}catch(FacebookApiException $e){
		error_log($e);
		$user = NULL;
	}
   
    //==================== Single query method ends =================================
    }
    
    $loginUrl = $facebook->getLoginUrl(array(
		'scope'		=> 'user_about_me', // Permissions to request from the user
		'redirect_uri'	=> 'http://localhost/gamifield/after_login.php', // URL to redirect the user to once the login/authorization process is complete.
		));
        
    $logoutUrl = $facebook->getLogoutUrl(array(
		'next'	=> 'http://localhost/gamifield/index.php','access_token'=>$facebook->getAccessToken() // URL to which to redirect the user after logging out
		));
        
    if($user){
	// Get logout URL
	$logoutUrl = $facebook->getLogoutUrl(array(
		'next'	=> 'http://localhost/gamifield/index.php','$access_token'=>$facebook->getAccessToken() // URL to which to redirect the user after logging out
		));
    
    }else{
	// Get login URL
	$loginUrl = $facebook->getLoginUrl(array(
		'scope'	=> 'read_stream, publish_stream, user_birthday, user_location, user_work_history, user_hometown, user_photos',
        'redirect_uri'	=> 'http://localhost/gamifield/after_login.php',
		));
    }
    
    try{
	$user_info	= $facebook->api('/' . $user);
	$friends_list	= $facebook->api('/' . $user . '/friends');
    }catch(FacebookApiException $e){
	error_log($e);
}
?>