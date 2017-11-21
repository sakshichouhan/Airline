<?php

	include 'connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}
	$phone=$_POST['c2'];
	$pass=$_POST['c3'];
	

	$query="select * from user where Phone_Number=$phone";
	$select_query=mysqli_query($connection,$query);


	if(!$select_query)
	{
		die("query failed".mysqli_error($connection));
	}


	while($row=mysqli_fetch_assoc($select_query))
	{
		$db_pass=$row['Password'];
	}

	if ($pass==$db_pass) 
	{
		$_SESSION['logged']=true;
		$_SESSION['user_phone']=$phone;
		header("Location:flightav.php");	
	}
	else
	{
		$_SESSION['logged']=false;
		header("Location: home.html");		
	}
?>