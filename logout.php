<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	unset($_SESSION['logged']);
	unset($_SESSION['user_phone']);
	header("location:index.php");
?>