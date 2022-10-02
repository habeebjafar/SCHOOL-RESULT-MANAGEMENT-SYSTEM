<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header('location:admin.php');
	}
?> 
<?php 
include('connect.php');
$overall_percent= " ";
$outoff=" "; 
$errormsge1=" ";
if(isset($_GET["id"])&& isset($_GET["term"])){
$getid=$_GET["id"];
$getterm=$_GET["term"];
	//echo $getid . $getterm;
if($getterm=="first"){
$select=$con->query("select *from result_pri where TERM='$getterm' && ID='$getid'");
	}
else if($getterm=="second"){
$select=$con->query("select *from result_pri_second where TERM='$getterm' && ID='$getid'");
	}
else if($getterm=="third"){
$select=$con->query("select *from result_pri_third where TERM='$getterm'&& ID='$getid'");
	}
if($select!=false){
$result=$select->fetch_assoc();
extract($result);
	}
else{
die("ACCES DENIED");
	}
}
else{
	die("ACCESS DENIED");
	} 
if(isset($_POST["update"])){
$class= $_POST["class"];
$term= $_POST["term"];
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$sex= $_POST["sex"];
$sessions= $_POST["sessions"];
$position=$_POST["position"];
$no_class=$_POST["no_class"];
$no_subjects=$_POST["no_subjects"];
$sch_open= $_POST["sch_open"];
$sch_abs= $_POST["sch_abs"];
$teacher_rpt= $_POST["teacher_rpt"];
$hm_remark= $_POST["hm_remark"];
$sch_resume= $_POST["sch_resume"];
$info= $_POST["info"];

$crs_1= $_POST["crs_1"];
$crs_2= $_POST["crs_2"];
$crs_3= $_POST["crs_3"];
$crs_e= $_POST["crs_e"];


$math_1= $_POST["math_1"];
$math_2= $_POST["math_2"];
$math_3= $_POST["math_3"];
$math_e= $_POST["math_e"];

$bsc_1= $_POST["bsc_1"];
$bsc_2= $_POST["bsc_2"];
$bsc_3= $_POST["bsc_3"];
$bsc_e= $_POST["bsc_e"];

$eng_1= $_POST["eng_1"];
$eng_2= $_POST["eng_2"];
$eng_3= $_POST["eng_3"];
$eng_e= $_POST["eng_e"];

$wr_1= $_POST["wr_1"];
$wr_2= $_POST["wr_2"];
$wr_3= $_POST["wr_3"];
$wr_e= $_POST["wr_e"];

$hab_1= $_POST["hab_1"];
$hab_2= $_POST["hab_2"];
$hab_3= $_POST["hab_3"];
$hab_e= $_POST["hab_e"];

$sos_1= $_POST["sos_1"];
$sos_2= $_POST["sos_2"];
$sos_3= $_POST["sos_3"];
$sos_e= $_POST["sos_e"];

$phe_1= $_POST["phe_1"];
$phe_2= $_POST["phe_2"];
$phe_3= $_POST["phe_3"];
$phe_e= $_POST["phe_e"];

$comp_1= $_POST["comp_1"];
$comp_2= $_POST["comp_2"];
$comp_3= $_POST["comp_3"];
$comp_e= $_POST["comp_e"];

$he_1= $_POST["he_1"];
$he_2= $_POST["he_2"];
$he_3= $_POST["he_3"];
$he_e= $_POST["he_e"];

$fa_1= $_POST["fa_1"];
$fa_2= $_POST["fa_2"];
$fa_3= $_POST["fa_3"];
$fa_e= $_POST["fa_e"];

$agr_1= $_POST["agr_1"];
$agr_2= $_POST["agr_2"];
$agr_3= $_POST["agr_3"];
$agr_e= $_POST["agr_e"];

$vr_1= $_POST["vr_1"];
$vr_2= $_POST["vr_2"];
$vr_3= $_POST["vr_3"];
$vr_e= $_POST["vr_e"];

$qr_1= $_POST["qr_1"];
$qr_2= $_POST["qr_2"];
$qr_3= $_POST["qr_3"];
$qr_e= $_POST["qr_e"];

$fo_1= $_POST["fo_1"];
$fo_2= $_POST["fo_2"];
$fo_3= $_POST["fo_3"];
$fo_e= $_POST["fo_e"];

$fr_1= $_POST["fr_1"];
$fr_2= $_POST["fr_2"];
$fr_3= $_POST["fr_3"];
$fr_e= $_POST["fr_e"];

function calculate($num1,$num2,$num3,$num4){
if($num1==!"" || $num2!="" || $num3!="" || $num4!=""){
	$sum=$num1+$num2+$num3+$num4;
	if($sum>=70){
		$grade="A";
		$remark="EXCELLENT";
		}
	else if($sum>=60){
		$grade="B";
		$remark="VERY GOOD";
		}
	else if($sum>=50){
		$grade="C";
		$remark="GOOD";
		}
	else if($sum>=40){
		$grade="D";
		$remark="FAIR";
		}
	else if($sum<=39){
		$grade="F";
		$remark="FAIL";
		}
	return array($sum,$grade,$remark);
	}
}
$crs=calculate($crs_1,$crs_2,$crs_3,$crs_e);
$crs_t=$crs[0];
$crs_g=$crs[1];
$crs_rmk=$crs[2];

$math=calculate($math_1,$math_2,$math_3,$math_e);
$math_t=$math[0];
$math_g= $math[1];
$math_rmk=$math[2];

$bsc=calculate($bsc_1,$bsc_2,$bsc_3,$bsc_e);
$bsc_t=$bsc[0];
$bsc_g=$bsc[1];
$bsc_rmk=$bsc[2];

$eng=calculate($eng_1,$eng_2,$eng_3,$eng_e);
$eng_t=$eng[0];
$eng_g=$eng[1];
$eng_rmk=$eng[2];

$wr=calculate($wr_1,$wr_2,$wr_3,$wr_e);
$wr_t=$wr[0];
$wr_g=$wr[1];
$wr_rmk=$wr[2];

$hab=calculate($hab_1,$hab_2,$hab_3,$hab_e);
$hab_t=$hab[0];
$hab_g=$hab[1];
$hab_rmk=$hab[2];

$sos=calculate($sos_1,$sos_2,$sos_3,$sos_e);
$sos_t=$sos[0];
$sos_g=$sos[1];
$sos_rmk=$sos[2];

$phe=calculate($phe_1,$phe_2,$phe_3,$phe_e);
$phe_t=$phe[0];
$phe_g=$phe[1];
$phe_rmk=$phe[2];

$comp=calculate($comp_1,$comp_2,$comp_3,$comp_e);
$comp_t=$comp[0];
$comp_g=$comp[1];
$comp_rmk=$comp[2];

$he=calculate($he_1,$he_2,$he_3,$he_e);
$he_t=$he[0];
$he_g=$he[1];
$he_rmk=$he[2];

$fa=calculate($fa_1,$fa_2,$fa_3,$fa_e);
$fa_t=$fa[0];
$fa_g=$fa[1];
$fa_rmk=$fa[2];

$agr=calculate($agr_1,$agr_2,$agr_3,$agr_e);
$agr_t=$agr[0];
$agr_g=$agr[1];
$agr_rmk=$agr[2];

$fo=calculate($fo_1,$fo_2,$fo_3,$fo_e);
$fo_t=$fo[0];
$fo_g=$fo[1];
$fo_rmk=$fo[2];

$vr=calculate($vr_1,$vr_2,$vr_3,$vr_e);
$vr_t=$vr[0];
$vr_g=$vr[1];
$vr_rmk=$vr[2];

$qr=calculate($qr_1,$qr_2,$qr_3,$qr_e);
$qr_t=$qr[0];
$qr_g=$qr[1];
$qr_rmk=$qr[2];

$fr=calculate($fr_1,$fr_2,$fr_3,$fr_e);
$fr_t=$fr[0];
$fr_g=$fr[1];
$fr_rmk=$fr[2];

$total_score=$agr_t+$bsc_t+$comp_t+$crs_t+$eng_t+$fa_t+$hab_t+$he_t+$math_t+$phe_t+$qr_t+$wr_t+$vr_t+$sos_t+$fr_t+$fo_t;
if($no_subjects>0){
$overall_percent=$total_score/$no_subjects;
$outoff=$no_subjects*100;
}

if($getterm=="first" && $term!="select" && $term!="second" && $term!="third"){	
$insert=$con->query("update result_pri set FNAME='$fname',LNAME='$lname',CLASS='$class',SEX='$sex',TERM='$term',SESSION='$sessions',
POSITION='$position',TOTAL_SCORE='$total_score',OVERALL_PERCENT='$overall_percent',OUT_OFF='$outoff',
NO_CLASS='$no_class',NO_SUBJECTS='$no_subjects',SCH_OPEN='$sch_open',SCH_ABS='$sch_abs',TEACHER_RPT='$teacher_rpt',HM_REMARK='$hm_remark',
SCH_RESUME='$sch_resume',INFO='$info',CRS_1='$crs_1',CRS_2='$crs_2',CRS_3='$crs_3',CRS_E='$crs_e',CRS_T='$crs_t',CRS_G='$crs_g',CRS_RMK='$crs_rmk',
MATH_1='$math_1',MATH_2='$math_2',MATH_3='$math_3',MATH_E='$math_e',MATHS_T='$math_t',MATH_G='$math_g',MATH_RMK='$math_rmk',BSC_1='$bsc_1',
BSC_2='$bsc_2',BSC_3='$bsc_3',BSC_E='$bsc_e',BSC_T='$bsc_t',BSC_G='$bsc_g',BSC_RMK='$bsc_rmk',ENG_1='$eng_1',
ENG_2='$eng_2',ENG_3='$eng_3',ENG_E='$eng_e',ENG_T='$eng_t',ENG_G='$eng_g',ENG_RMK='$eng_rmk',WR_1='$wr_1',
WR_2='$wr_2',WR_3='$wr_3',WR_E='$wr_e',WR_T='$wr_t',WR_G='$wr_g',WR_RMK='$wr_rmk',HAB_1='$hab_1',HAB_2='$hab_2',HAB_3='$hab_3',HAB_E='$hab_e',
HAB_T='$hab_t',HAB_G='$hab_g',HAB_RMK='$hab_rmk',SOS_1='$sos_1',SOS_2='$sos_2',SOS_3='$sos_3',SOS_E='$sos_e',
SOS_T='$sos_t',SOS_G='$sos_g',SOS_RMK='$sos_rmk',PHE_1='$phe_1',PHE_2='$phe_2',PHE_3='$phe_3',PHE_E='$phe_e',PHE_T='$phe_t',PHE_G='$phe_g',
PHE_RMK='$phe_rmk',COMP_1='$comp_1',COMP_2='$comp_2',COMP_3='$comp_3',COMP_E='$comp_e',COMP_T='$comp_t',COMP_G='$comp_g',COMP_RMK='$comp_rmk',
HE_1='$he_1',HE_2='$he_2',HE_3='$he_3',HE_E='$he_e',HE_T='$he_t',HE_G='$he_g',HE_RMK='$he_rmk',FA_1='$fa_1',FA_2='$fa_2',FA_3='$fa_3',FA_E='$fa_e',
FA_T='$fa_t',FA_G='$fa_g',FA_RMK='$fa_rmk',AGR_1='$agr_1',AGR_2='$agr_2',AGR_3='$agr_3',AGR_E='$agr_e',AGR_T='$agr_t',AGR_G='$agr_g',
AGR_RMK='$agr_rmk',VR_1='$vr_1',VR_2='$vr_2',VR_3='$vr_3',VR_E='$vr_e',VR_T='$vr_t',VR_G='$vr_g',VR_RMK='$vr_rmk',QR_1='$qr_1',QR_2='$qr_2',
QR_3='$qr_3',QR_E='$qr_e',QR_T='$qr_t',QR_G='$qr_g',QR_RMK='$qr_rmk',FO_1='$fo_1',FO_2='$fo_2',FO_3='$fo_3',FO_E='$fo_e',FO_T='$fo_t',FO_G='$fo_g',
FO_RMK='$fo_rmk',FR_1='$fr_1',FR_2='$fr_2',FR_3='$fr_3',FR_E='$fr_e',FR_T='$fr_t',FR_G='$fr_g',FR_RMK='$fr_rmk' where ID='$getid'");
	
if($insert==false){
$errormsge1="<p id='red' >FAILED TO UPDATE, PLEASE TRY AGAIN</p>";
		}
else{
header("location:admin_view_result_pri.php");
	}
}
else if($getterm=="second" && $term!="select" && $term!="first" && $term!="third"){
$insert=$con->query("update result_pri_second set FNAME='$fname',LNAME='$lname',CLASS='$class',SEX='$sex',TERM='$term',SESSION='$sessions',
POSITION='$position',TOTAL_SCORE='$total_score',OVERALL_PERCENT='$overall_percent',OUT_OFF='$outoff',
NO_CLASS='$no_class',NO_SUBJECTS='$no_subjects',SCH_OPEN='$sch_open',SCH_ABS='$sch_abs',TEACHER_RPT='$teacher_rpt',HM_REMARK='$hm_remark',
SCH_RESUME='$sch_resume',INFO='$info',CRS_1='$crs_1',CRS_2='$crs_2',CRS_3='$crs_3',CRS_E='$crs_e',CRS_T='$crs_t',CRS_G='$crs_g',CRS_RMK='$crs_rmk',
MATH_1='$math_1',MATH_2='$math_2',MATH_3='$math_3',MATH_E='$math_e',MATHS_T='$math_t',MATH_G='$math_g',MATH_RMK='$math_rmk',BSC_1='$bsc_1',
BSC_2='$bsc_2',BSC_3='$bsc_3',BSC_E='$bsc_e',BSC_T='$bsc_t',BSC_G='$bsc_g',BSC_RMK='$bsc_rmk',ENG_1='$eng_1',
ENG_2='$eng_2',ENG_3='$eng_3',ENG_E='$eng_e',ENG_T='$eng_t',ENG_G='$eng_g',ENG_RMK='$eng_rmk',WR_1='$wr_1',
WR_2='$wr_2',WR_3='$wr_3',WR_E='$wr_e',WR_T='$wr_t',WR_G='$wr_g',WR_RMK='$wr_rmk',HAB_1='$hab_1',HAB_2='$hab_2',HAB_3='$hab_3',HAB_E='$hab_e',
HAB_T='$hab_t',HAB_G='$hab_g',HAB_RMK='$hab_rmk',SOS_1='$sos_1',SOS_2='$sos_2',SOS_3='$sos_3',SOS_E='$sos_e',
SOS_T='$sos_t',SOS_G='$sos_g',SOS_RMK='$sos_rmk',PHE_1='$phe_1',PHE_2='$phe_2',PHE_3='$phe_3',PHE_E='$phe_e',PHE_T='$phe_t',PHE_G='$phe_g',
PHE_RMK='$phe_rmk',COMP_1='$comp_1',COMP_2='$comp_2',COMP_3='$comp_3',COMP_E='$comp_e',COMP_T='$comp_t',COMP_G='$comp_g',COMP_RMK='$comp_rmk',
HE_1='$he_1',HE_2='$he_2',HE_3='$he_3',HE_E='$he_e',HE_T='$he_t',HE_G='$he_g',HE_RMK='$he_rmk',FA_1='$fa_1',FA_2='$fa_2',FA_3='$fa_3',FA_E='$fa_e',
FA_T='$fa_t',FA_G='$fa_g',FA_RMK='$fa_rmk',AGR_1='$agr_1',AGR_2='$agr_2',AGR_3='$agr_3',AGR_E='$agr_e',AGR_T='$agr_t',AGR_G='$agr_g',
AGR_RMK='$agr_rmk',VR_1='$vr_1',VR_2='$vr_2',VR_3='$vr_3',VR_E='$vr_e',VR_T='$vr_t',VR_G='$vr_g',VR_RMK='$vr_rmk',QR_1='$qr_1',QR_2='$qr_2',
QR_3='$qr_3',QR_E='$qr_e',QR_T='$qr_t',QR_G='$qr_g',QR_RMK='$qr_rmk',FO_1='$fo_1',FO_2='$fo_2',FO_3='$fo_3',FO_E='$fo_e',FO_T='$fo_t',FO_G='$fo_g',
FO_RMK='$fo_rmk',FR_1='$fr_1',FR_2='$fr_2',FR_3='$fr_3',FR_E='$fr_e',FR_T='$fr_t',FR_G='$fr_g',FR_RMK='$fr_rmk' where ID='$getid'");
	
if($insert==false){
$errormsge1="<p id='red' >FAILED TO UPDATE PLEASE TRY AGAIN</p>";
		}
		else{
			header("location:admin_view_result_pri.php");
			}
	
}
else if($getterm=="third" && $term!="select" && $term!="first" && $term!="second"){
$insert=$con->query("update result_pri_third set FNAME='$fname',LNAME='$lname',CLASS='$class',SEX='$sex',TERM='$term',SESSION='$sessions',
POSITION='$position',TOTAL_SCORE='$total_score',OVERALL_PERCENT='$overall_percent',OUT_OFF='$outoff',
NO_CLASS='$no_class',NO_SUBJECTS='$no_subjects',SCH_OPEN='$sch_open',SCH_ABS='$sch_abs',TEACHER_RPT='$teacher_rpt',HM_REMARK='$hm_remark',
SCH_RESUME='$sch_resume',INFO='$info',CRS_1='$crs_1',CRS_2='$crs_2',CRS_3='$crs_3',CRS_E='$crs_e',CRS_T='$crs_t',CRS_G='$crs_g',CRS_RMK='$crs_rmk',
MATH_1='$math_1',MATH_2='$math_2',MATH_3='$math_3',MATH_E='$math_e',MATHS_T='$math_t',MATH_G='$math_g',MATH_RMK='$math_rmk',BSC_1='$bsc_1',
BSC_2='$bsc_2',BSC_3='$bsc_3',BSC_E='$bsc_e',BSC_T='$bsc_t',BSC_G='$bsc_g',BSC_RMK='$bsc_rmk',ENG_1='$eng_1',
ENG_2='$eng_2',ENG_3='$eng_3',ENG_E='$eng_e',ENG_T='$eng_t',ENG_G='$eng_g',ENG_RMK='$eng_rmk',WR_1='$wr_1',
WR_2='$wr_2',WR_3='$wr_3',WR_E='$wr_e',WR_T='$wr_t',WR_G='$wr_g',WR_RMK='$wr_rmk',HAB_1='$hab_1',HAB_2='$hab_2',HAB_3='$hab_3',HAB_E='$hab_e',
HAB_T='$hab_t',HAB_G='$hab_g',HAB_RMK='$hab_rmk',SOS_1='$sos_1',SOS_2='$sos_2',SOS_3='$sos_3',SOS_E='$sos_e',
SOS_T='$sos_t',SOS_G='$sos_g',SOS_RMK='$sos_rmk',PHE_1='$phe_1',PHE_2='$phe_2',PHE_3='$phe_3',PHE_E='$phe_e',PHE_T='$phe_t',PHE_G='$phe_g',
PHE_RMK='$phe_rmk',COMP_1='$comp_1',COMP_2='$comp_2',COMP_3='$comp_3',COMP_E='$comp_e',COMP_T='$comp_t',COMP_G='$comp_g',COMP_RMK='$comp_rmk',
HE_1='$he_1',HE_2='$he_2',HE_3='$he_3',HE_E='$he_e',HE_T='$he_t',HE_G='$he_g',HE_RMK='$he_rmk',FA_1='$fa_1',FA_2='$fa_2',FA_3='$fa_3',FA_E='$fa_e',
FA_T='$fa_t',FA_G='$fa_g',FA_RMK='$fa_rmk',AGR_1='$agr_1',AGR_2='$agr_2',AGR_3='$agr_3',AGR_E='$agr_e',AGR_T='$agr_t',AGR_G='$agr_g',
AGR_RMK='$agr_rmk',VR_1='$vr_1',VR_2='$vr_2',VR_3='$vr_3',VR_E='$vr_e',VR_T='$vr_t',VR_G='$vr_g',VR_RMK='$vr_rmk',QR_1='$qr_1',QR_2='$qr_2',
QR_3='$qr_3',QR_E='$qr_e',QR_T='$qr_t',QR_G='$qr_g',QR_RMK='$qr_rmk',FO_1='$fo_1',FO_2='$fo_2',FO_3='$fo_3',FO_E='$fo_e',FO_T='$fo_t',FO_G='$fo_g',
FO_RMK='$fo_rmk',FR_1='$fr_1',FR_2='$fr_2',FR_3='$fr_3',FR_E='$fr_e',FR_T='$fr_t',FR_G='$fr_g',FR_RMK='$fr_rmk' where ID='$getid'");

if($insert==false){
$errormsge1="<p id='red' >FAILED TO UPDATE PLEASE TRY AGAIN</p>";
		}
		else{
echo"<script> alert('RESULT SUCCESSFULLY UPLOADED')</script>";
			header("location:admin_view_result_pri.php");
			}
	
	}
	else{
		$errormsge1="<p id='red' >FAILED TO UPDATE, PLEASE SELECT THE CORRECT TERM</p>";
		}		 
}
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>ELIXANDES ACADEMY BRITISH INT' STANDARD</title>     
    <!-- Bootstrap -->     
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> 
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="ELIXANDES ACADEMY"> 
    <link href="images/elixandes_icon.png" rel="icon" /> 
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->     
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
    <!-- start plugins -->     
    <!----font-Awesome----->     
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css"> 
    <!----font-Awesome----->     
    <style>
      #red
{
    background-color: #E34B1D;
    text-align: center;
    color: white;
    padding: 10px;
    font-size: 12px;
    display: inline-block;
    margin-right: 7px;
    border-radius: 4px;
}

#addresult
{
    text-decoration: none;
    font-size: 13px;
    color: white;
    font-weight: bold;
    background-color: #01A2A6;
    padding: 10px;
    display: inline-block;
    margin-right: 7px;
    border-radius: 4px;
}

#ct
{
    color: red;
    font-weight: bold;
}

.rt
{
    
    
   
    background-color: transparent;
    padding: 5px;
    position: relative;
   
}



</style>     
  </head>   
  <body class=""> 
    <?php include('header.php');?> 
    <div class="mainresultbody"> 
      <div class="container"> 
        <div class="submainresult" id="edittemp"> 
          <img src="images/topimage.jpg" /> 
          <a id='addresult' href='resultentry.php'>ADD NEW RESULT  </a> 
          <a id='addresult' href='#cmt' class="">ADD COMMENTS TO THIS RESULT BELLOW <i class="fa fa-chevron-down fa-lg"></i></a> 
          <?php echo $errormsge1;?> 
          <form role="form" class="" data-pg-collapsed method="post"> 
            <div class="row" data-pg-collapsed> 
              <div class="col-xs-6"> 
                <div class="leftentrydetails"> 
                  <div class="table-responsive"> 
                    <table class="table table-condensed table-striped table-hover table-bordered"> 
                      <tbody class=""> 
                        <tr class=""> 
                          <td class="resultdetails-td">ADMISSION NO.</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" required value="<?php echo $ADM_NO ?>" disabled="disabled"> 
                          </td>                           
                        </tr>                         
                        <tr class=""> 
                          <td class="resultdetails-td">SURNAME</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" required value="<?php echo $FNAME ?>" name="fname"> 
                          </td>                           
                        </tr>                         
                        <tr class=""> 
                          <td class="resultdetails-td">OTHER NAME</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" required value="<?php echo $LNAME?>" name="lname"> 
                          </td>                           
                        </tr>                         
                        <tr class=""> 
                          <td class="resultdetails-td">CLASS</td> 
                          <td class=""> 
                            <input type="text" class="form-control resultdetails-td2" id="resultcase" required value="<?php echo $CLASS;?>" name="class"> 
                          </td>                           
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">SESSION</td> 
                          <td class=""> 
                            <input type="text" class="form-control resultdetails-td2" id="resultcase" required value="<?php echo $SESSION;?>" name="sessions"> 
                          </td>                           
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">TERM</td> 
                          <td class=""> 
                            <input type="text" class="form-control resultdetails-td2" id="resultcase" required value="<?php echo $TERM;?>" name="term"> 
                          </td>                           
                        </tr>                         
                      </tbody>                       
                    </table>                     
                  </div>                   
                </div>                 
              </div>               
              <div class="col-xs-4"> 
                <div class="leftentrydetails"> 
                  <div class="table-responsive"> 
                    <table class="table table-condensed table-striped table-hover table-bordered"> 
                      <tbody class=""> 
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">SEX</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" required value="<?php echo $SEX ?>" name="sex"> 
                          </td>                           
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">NO. IN CLASS</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" name="no_class" value="<?php echo $NO_CLASS ?>"> 
                          </td>                           
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">TOTAL NO.OF SUBJECTS</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" name="no_subjects" value="<?php echo $NO_SUBJECTS ?>" required> 
                          </td>                           
                          <span id="ct">PLEASE ENSURE TO VERIFY TOTAL NO.OF SUBJECTS</span> 
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">POSITION</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" name="position" value="<?php echo $POSITION ?>"> 
                          </td>                           
                        </tr>                         
                      </tbody>                       
                    </table>                     
                  </div>                   
                </div>                 
              </div>               
              <div class="col-xs-3" data-pg-collapsed> 
                <div class="leftentrydetails"> 
                  <div class="table-responsive"> 
                    <table class="table table-bordered table-condensed table-striped table-hover"> 
                      <tbody class=""> 
</tbody>                       
                    </table>                     
                  </div>                   
                </div>                 
              </div>               
            </div>             
            <div class="resultcova"> 
              <div class="table-responsive"> 
                <table class="table table-striped table-bordered table-hover table-condensed"> 
                  <thead> 
                    <tr> 
                      <th>SUBJECTS</th> 
                      <th><span class="rt">TEST(20)</span></th> 
                      <th><span class="rt">ASSIGN(10)</span></th> 
                      <th><span class="rt">PROJECT(10)</span></th> 
                      <th><span class="rt">EXAM(60)</span></th> 
                      <th><span class="rt">TOTAL(100)</span></th> 
                      <th><span class="rt">GRADE</span></th> 
                      <th><span class="rt">REMARK</span></th> 
                    </tr>                     
                  </thead>                   
                  <tbody class=""> 
                    <tr data-pg-collapsed> 
                      <td class="subjects">C.R.S</td> 
                      <td> 
                        <input type="text" class="inputscore" name="crs_1" value="<?php echo $CRS_1;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_2" value="<?php echo $CRS_2;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_3" value="<?php echo $CRS_3;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_e" value="<?php echo $CRS_E;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_t" value="<?php echo $CRS_T;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_g" value="<?php echo $CRS_G;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_rmk" value="<?php echo $CRS_RMK;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">MATHEMATICS</td> 
                      <td> 
                        <input type="text" class="inputscore" name="math_1" value="<?php echo $MATH_1;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_2" value="<?php echo $MATH_2;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_3" value="<?php echo $MATH_3;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_e" value="<?php echo $MATH_E;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_t" value="<?php echo $MATHS_T;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_g" value="<?php echo $MATH_G;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_rmk" value="<?php echo $MATH_RMK;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">BASIC SCIENCE</td> 
                      <td> 
                        <input type="text" class="inputscore" name="bsc_1" value="<?php echo $BSC_1;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_2" value="<?php echo $BSC_2;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_3" value="<?php echo $BSC_3;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_e" value="<?php echo $BSC_E;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_t" value="<?php echo $BSC_T;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_g" value="<?php echo $BSC_G;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_rmk" value="<?php echo $BSC_RMK;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">ENGLISH LANGUAGE</td> 
                      <td> 
                        <input type="text" class="inputscore" name="eng_1" value="<?php echo $ENG_1;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_2" value="<?php echo $ENG_2;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_3" value="<?php echo $ENG_3;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_e" value="<?php echo $ENG_E;?>" maxlength="2"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_t" value="<?php echo $ENG_T;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_g" value="<?php echo $ENG_G;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_rmk" value="<?php echo $ENG_RMK;?>"> 
                      </td>                       
                    </tr>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">WRITING</td> 
                    <td> 
                      <input type="text" class="inputscore" name="wr_1" value="<?php echo $WR_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="wr_2" value="<?php echo $WR_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="wr_3" value="<?php echo $WR_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="wr_e" value="<?php echo $WR_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="wr_t" value="<?php echo $WR_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="wr_g" value="<?php echo $WR_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="wr_rmk" value="<?php echo $WR_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">HABIT</td> 
                    <td> 
                      <input type="text" class="inputscore" name="hab_1" value="<?php echo $HAB_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="hab_2" value="<?php echo $HAB_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="hab_3" value="<?php echo $HAB_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="hab_e" value="<?php echo $HAB_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="hab_t" value="<?php echo $HAB_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="hab_g" value="<?php echo $HAB_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="hab_rmk" value="<?php echo $HAB_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">SOCIAL STUDIES</td> 
                    <td> 
                      <input type="text" class="inputscore" name="sos_1" value="<?php echo $SOS_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="sos_2" value="<?php echo $SOS_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="sos_3" value="<?php echo $SOS_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="sos_e" value="<?php echo $SOS_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="sos_t" value="<?php echo $SOS_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="sos_g" value="<?php echo $SOS_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="sos_rmk" value="<?php echo $SOS_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">P.H.E</td> 
                    <td> 
                      <input type="text" class="inputscore" name="phe_1" value="<?php echo $PHE_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="phe_2" value="<?php echo $PHE_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="phe_3" value="<?php echo $PHE_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="phe_e" value="<?php echo $PHE_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="phe_t" value="<?php echo $PHE_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="phe_g" value="<?php echo $PHE_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="phe_rmk" value="<?php echo $PHE_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">COMPUTER STUDIES</td> 
                    <td> 
                      <input type="text" class="inputscore" name="comp_1" value="<?php echo $COMP_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="comp_2" value="<?php echo $COMP_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="comp_3" value="<?php echo $COMP_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="comp_e" value="<?php echo $COMP_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="comp_t" value="<?php echo $COMP_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="comp_g" value="<?php echo $COMP_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="comp_rmk" value="<?php echo $COMP_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">HOME ECONOMICS</td> 
                    <td> 
                      <input type="text" class="inputscore" name="he_1" value="<?php echo $HE_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="he_2" value="<?php echo $HE_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="he_3" value="<?php echo $HE_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="he_e" value="<?php echo $HE_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="he_t" value="<?php echo $HE_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="he_g" value="<?php echo $HE_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="he_rmk" value="<?php echo $HE_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">FINE ARTS</td> 
                    <td> 
                      <input type="text" class="inputscore" name="fa_1" value="<?php echo $FA_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fa_2" value="<?php echo $FA_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fa_3" value="<?php echo $FA_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fa_e" value="<?php echo $FA_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fa_t" value="<?php echo $FA_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fa_g" value="<?php echo $FA_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fa_rmk" value="<?php echo $FA_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">AGRIC SCI</td> 
                    <td> 
                      <input type="text" class="inputscore" name="agr_1" value="<?php echo $AGR_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="agr_2" value="<?php echo $AGR_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="agr_3" value="<?php echo $AGR_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="agr_e" value="<?php echo $AGR_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="agr_t" value="<?php echo $AGR_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="agr_g" value="<?php echo $AGR_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="agr_rmk" value="<?php echo $AGR_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">VERBAL REASONING</td> 
                    <td> 
                      <input type="text" class="inputscore" name="vr_1" value="<?php echo $VR_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="vr_2" value="<?php echo $VR_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="vr_3" value="<?php echo $VR_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="vr_e" value="<?php echo $VR_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="vr_t" value="<?php echo $VR_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="vr_g" value="<?php echo $VR_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="vr_rmk" value="<?php echo $VR_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">Q. REASONING</td> 
                    <td> 
                      <input type="text" class="inputscore" name="qr_1" value="<?php echo $QR_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="qr_2" value="<?php echo $QR_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="qr_3" value="<?php echo $QR_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="qr_e" value="<?php echo $QR_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="qr_t" value="<?php echo $QR_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="qr_g" value="<?php echo $QR_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="qr_rmk" value="<?php echo $QR_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">PHONICS</td> 
                    <td> 
                      <input type="text" class="inputscore" name="fo_1" value="<?php echo $FO_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fo_2" value="<?php echo $FO_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fo_3" value="<?php echo $FO_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fo_e" value="<?php echo $FO_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fo_t" value="<?php echo $FO_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fo_g" value="<?php echo $FO_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fo_rmk" value="<?php echo $FO_RMK;?>"> 
                    </td>                     
                  </tr>                   
                  <tr data-pg-collapsed> 
                    <td class="subjects">Q. REASONING</td> 
                    <td> 
                      <input type="text" class="inputscore" name="fr_1" value="<?php echo $FR_1;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fr_2" value="<?php echo $FR_2;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fr_3" value="<?php echo $FR_3;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fr_e" value="<?php echo $FR_E;?>" maxlength="2"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fr_t" value="<?php echo $FR_T;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fr_g" value="<?php echo $FR_G;?>"> 
                    </td>                     
                    <td> 
                      <input type="text" class="inputscore" name="fr_rmk" value="<?php echo $FR_RMK;?>"> 
                    </td>                     
                  </tr>                   
                </tbody>                 
              </table>               
            </div>             
        </div>         
        <div class="row" data-pg-collapsed> 
          <div class="col-xs-12"> 
            <div class="leftentrydetails"> 
              <div class="table-responsive"> 
                <div class="row"> 
                  <div class="col-xs-6"> 
                    <div class="input-group"> 
                      <span class="input-group-addon schlabel">NO. OF TIMES SCHOOL OPENED</span> 
                      <input type="text" class="form-control schlabel" name="sch_open" value="<?php echo $SCH_OPEN;?>"> 
                    </div>                     
                  </div>                   
                  <div class="col-xs-6"> 
                    <div class="input-group"> 
                      <span class="input-group-addon schlabel">NO. OF TIMES ABSENT</span> 
                      <input type="text" class="form-control schlabel" name="sch_abs" value="<?php echo $SCH_ABS;?>"> 
                    </div>                     
                  </div>                   
                </div>                 
                <table class="table table-condensed table-striped table-bordered table-hover"> 
                  <tbody class=""> 
                    <tr class="" data-pg-collapsed> 
                      <td class="resultdetails-td" id="resizetd">CLASS TEACHER'S REPORT</td> 
                      <td class=""> 
                        <input type="text" class="form-control" id="resultcase" name="teacher_rpt" value="<?php echo $TEACHER_RPT;?>"> 
                      </td>                       
                    </tr>                     
                    <tr class=""> 
                      <td class="resultdetails-td">HEAD TEACHER'S REPORT</td> 
                      <td class=""> 
                        <input type="text" class="form-control" id="resultcase" name="hm_remark" value="<?php echo $HM_REMARK;?>"> 
                      </td>                       
                    </tr>                     
                    <tr class=""> 
                      <td class="resultdetails-td">NEXT TERM BEGINS</td> 
                      <td class=""> 
                        <input type="text" class="form-control resultdetails-td2" id="resultcase" name="sch_resume" value="<?php echo $SCH_RESUME;?>"> 
                      </td>                       
                    </tr>                     
                    <tr class="" data-pg-collapsed> 
                      <td class="resultdetails-td" id="cmt">SPECIAL SKILLS/BEHAVIOUR</td> 
                      <td class=""> 
                        <input type="text" class="form-control" name="info" value="<?php echo $INFO;?>"> 
                      </td>                       
                    </tr>                     
                  </tbody>                   
                </table>                 
              </div>               
            </div>             
          </div>           
        </div>         
        <button type="submit" class="btn" id="addresult" name="update">UPDATE RESULT</button>         
      </form>       
      <div class="pg-empty-placeholder stamp"></div>       
      <p class="resultdate"><?php echo date("d/m/Y");?></p> 
    </div>     
  </div>   
</div> 
<!-- end main --> 
<div class="myfoter"> 
  <p>Copyright &copy;2017, ELIXANDES ACADEMY | Design by  Eminent technology</p> 
</div> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script> 
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
