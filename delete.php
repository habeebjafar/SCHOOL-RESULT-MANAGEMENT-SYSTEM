<?php
include('connect.php');
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header('location:admin.php');
	}
if(isset($_GET["id"]) && isset($_GET["id2"])){
$retrievepin=$_GET["id"];
$retrievepin2=$_GET["id2"];
if($retrievepin2=="2017/2018"){
$result=$con->query("delete from student_bio where REG='$retrievepin'");	
}
else if($retrievepin2=="2018/2019"){
$result=$con->query("delete from student_bio_18 where REG='$retrievepin'");	
}

if($result!=false){
	header("location:admin_view.php");
 }
else{
	echo "error deleting data";
	}
}
else{
	echo "not set";
	}
?>