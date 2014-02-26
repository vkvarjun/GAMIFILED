<?php
    require 'src/facebook.php';
    include "fbaccess.php";
    if(isset($user_info['first_name']))
    {
        $facebook->destroySession();
    }
    header("Location:".$logoutUrl);
?>
