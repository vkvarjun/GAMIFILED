<?php
	include "dbinfo.php";// we have dbinfo file where we store all host,username,pwd,dbname
	function connectDB()
	{
		$con = mysqli_connect($GLOBALS['host'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['database']);
	    if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
        else return $con;
 	}
	function executeQuery($query)
	{
		$con = connectDB();

		mysqli_query($con, $query);	
		mysqli_close($con);
	 }

	 function executedQuery($query)
	 {
		$con = connectDB();

		$result = mysqli_query($con, $query);	
		return $result;
        mysqli_close($con);
	 }	
?>