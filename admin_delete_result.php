<?php 
if(isset($_GET["id"])&& isset($_GET["term"])){
include('connect.php');
$getid=$_GET["id"];
$getterm=$_GET["term"];
//echo $getid . $getterm;
if($getterm=="first"){
$result=$con->query("delete from result_pri where TERM='$getterm' && ID='$getid'");
}
else if($getterm=="second"){
$result=$con->query("delete from result_pri_second where TERM='$getterm'&& ID='$getid'");
}
else if($getterm=="third"){
$result=$con->query("delete from result_pri_third where TERM='$getterm'&& ID='$getid'");
}
if($result!=false){
header("Location:admin_view_result_pri.php");
}
else{
die("error");
	}
}

