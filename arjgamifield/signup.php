<?php
	include "functions.php";
	if(isset($_POST['submit_register'])){
		//echo "Form data ready to post!";
		$gid = $_POST['user_id'];
		$email = $_POST['email'];
		$pwd = $_POST['password_register'];
		//echo $gid.$email.$pwd;
		$query = "INSERT INTO users values('NULL','$gid','$email','$pwd')";
		executeQuery($query);
		echo "Success";
	}
?>