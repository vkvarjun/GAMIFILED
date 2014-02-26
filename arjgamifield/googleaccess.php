<?php

    require_once 'google-api-php-client/src/Google_Client.php';
    require_once 'google-api-php-client/src/contrib/Google_PlusService.php';
    session_name('test');
    session_start();
    $client = new google_Client();
    $client->setApplicationName("test");    
    $client->setClientId('911903894752-03pcks44mui4nus3o4cbhofbg0lqhm7h.apps.googleusercontent.com');
    $client->setClientSecret('pyGesfZpL7QDMpn3tF9vRqoX');
    $client->setRedirectUri('http://localhost/gamifield/after_login.php');    
    $client->setDeveloperKey('AIzaSyCg8pBHZOUcqC-15I_Pfh4tc1PF_g4TLog');    
    $client->setScopes(array('https://www.googleapis.com/auth/plus.me'));
    
    $plus = new google_PlusService($client);
    
    if(isset($_REQUEST['logout']))
    {
        unset($_SESSION['access_token']);
    }
    
    if(isset($_GET['code']))
    {
      if (strval($_SESSION['state']) !== strval($_GET['state'])) {
        die("The session state did not match.");
      }
        $client->authenticate();
        $_SESSION['access_token'] = $client->getAccessToken();
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
    }
    
    if(isset($_SESSION['access_token']))
    {
        $client->setAccessToken($_SESSION['access_token']);
    }
    
    if ($client->getAccessToken()) 
    {
      $me = $plus->people->get('me');
     
      $optParams = array('maxResults' => 100);
      $activities = $plus->activities->listActivities('me', 'public', $optParams);
     
      $_SESSION['access_token'] = $client->getAccessToken();
    } 
    else 
    {
      $authUrl = $client->createAuthUrl();
    }
?>