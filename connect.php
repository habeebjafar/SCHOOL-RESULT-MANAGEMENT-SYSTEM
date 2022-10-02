<?php

$con=new mysqli("localhost","myschyvd_srms_user2","srms_password","myschyvd_srms");
if($con->connect_error){
	
	die("connection failed:".$con->connect_error);
	}
	//else{echo"connect successfully";}
?>

