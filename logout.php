<?php
session_start();
if(isset($_SESSION["user"]) && isset($_SESSION["pass"])){
	
	session_unset();
	session_destroy();
	header("location:admin.php");
	}


?>