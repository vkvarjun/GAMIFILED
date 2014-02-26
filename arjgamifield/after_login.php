<?php
    include "fbaccess.php";
    
?>

<html>
    <head>
        <title>$*GAMIFIE(L)D*$</title>
        <link rel="stylesheet" href="css/homepage.css"/>
        <script src="javascript/jquery-2.0.3.js"></script>
        <script src="javascript/jquery-migrate-1.2.1.js"></script>
    </head>
    <body>
        <div id="header"><label id="title"><a href="index.php" id="gami">GAMIFIE(L)D</a></label></div>
        <p style="margin-left:1150px;text-decoration:none;font-size:20px;color:red"><a href="logout.php">Logout</a></p>
    
<?php 
    
    echo "<h1>Welcome</h1>";
    if(isset($user_info['first_name']))
    {
        echo @$user_info['first_name']." From Facebook";
    }
    echo @$email;
    
?>    
    