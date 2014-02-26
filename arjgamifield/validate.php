<?php 
	include "functions.php";
    $gid = $_POST['username'];
	$pwd = $_POST['password'];   
    if(isset($gid)&&isset($pwd))
    {
    	$query = "SELECT * FROM users WHERE gamifieldid = '$gid' and password = '$pwd'";
    	$result = executedQuery($query);
    	if($row = mysqli_fetch_array($result))
    	{
    		echo "Login success";
    	}
    	else echo "Credentials invalid";
    }
    else
    {
        echo "Not Set";
    }

?>