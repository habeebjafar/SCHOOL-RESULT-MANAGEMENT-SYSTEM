<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
die("<a href='admin.php'>ACCESS DENIED FOR USER,PLEASE LOG IN</a>");
	}

if(isset($_COOKIE["pin"])&& isset($_COOKIE["regno"])&& isset($_COOKIE["fname"])&& isset($_COOKIE["othername"])&& isset($_COOKIE["sex"])&& 
 isset($_COOKIE["class"])&& isset($_COOKIE["sessions"])){
$pin=$_COOKIE["pin"];
$regno=$_COOKIE["regno"];
$fname=$_COOKIE["fname"];
$othername=$_COOKIE["othername"];
$sex=$_COOKIE["sex"];
$class=$_COOKIE["class"];
//$sessions=$_COOKIE["sessions"];
	}
else{
	die("<a href='admin.php'>ACCESS DENIED FOR USER,PLEASE GO BACK TO DASHBOARD</a>");
	}	
$overall_percent="";
$outoff="";
$errormsge1="";
include('connect.php');
if(isset($_POST["addresult"])){
$term=$_POST["term"];
$sessions=$_POST["sessions"];
$position=$_POST["position"];
$no_class=$_POST["no_class"];
$no_subjects=$_POST["no_subjects"];
$sch_open=$_POST["sch_open"];
$sch_abs=$_POST["sch_abs"];
$teacher_rpt=$_POST["teacher_rpt"];
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

if($term=="first"){
$insert=$con->query("insert into result_pri(ADM_NO,FNAME,LNAME,PIN,CLASS,SEX,TERM,SESSION,TOTAL_SCORE,OUT_OFF,
OVERALL_PERCENT,POSITION,NO_CLASS,
NO_SUBJECTS,SCH_OPEN,SCH_ABS,TEACHER_RPT,HM_REMARK,SCH_RESUME,INFO,CRS_1,CRS_2,CRS_3,CRS_E,CRS_T,CRS_G,CRS_RMK,MATH_1,MATH_2,MATH_3,MATH_E,MATHS_T,MATH_G,MATH_RMK,BSC_1,BSC_2,BSC_3,BSC_E,BSC_T,BSC_G,BSC_RMK,ENG_1,ENG_2,ENG_3,ENG_E,ENG_T,ENG_G,
ENG_RMK,WR_1,WR_2,WR_3,WR_E,WR_T,WR_G,WR_RMK,HAB_1,HAB_2,HAB_3,HAB_E,HAB_T,HAB_G,HAB_RMK,SOS_1,SOS_2,SOS_3,SOS_E,SOS_T,
SOS_G,SOS_RMK,PHE_1,PHE_2,PHE_3,PHE_E,PHE_T,PHE_G,PHE_RMK,COMP_1,COMP_2,COMP_3,COMP_E,COMP_T,COMP_G,COMP_RMK,HE_1,HE_2,
HE_3,HE_E,HE_T,HE_G,HE_RMK,FA_1,FA_2,FA_3,FA_E,FA_T,FA_G,FA_RMK,AGR_1,AGR_2,AGR_3,AGR_E,AGR_T,AGR_G,AGR_RMK,VR_1,VR_2,
VR_3,VR_E,VR_T,VR_G,VR_RMK,QR_1,QR_2,QR_3,QR_E,QR_T,QR_G,QR_RMK,FO_1,FO_2,FO_3,FO_E,FO_T,FO_G,FO_RMK,FR_1,FR_2,FR_3,FR_E,
FR_T,FR_G,FR_RMK) values('$regno','$fname','$othername','$pin','$class','$sex','$term',
'$sessions','$total_score','$outoff','$overall_percent','$position','$no_class','$no_subjects',
'$sch_open','$sch_abs','$teacher_rpt','$hm_remark','$sch_resume',
'$info','$crs_1','$crs_2','$crs_3','$crs_e','$crs_t','$crs_g','$crs_rmk','$math_1','$math_2','$math_3','$math_e','$math_t',
'$math_g','$math_rmk','$bsc_1','$bsc_2','$bsc_3','$bsc_e','$bsc_t','$bsc_g','$bsc_rmk','$eng_1','$eng_2',
'$eng_3','$eng_e','$eng_t','$eng_g','$eng_rmk','$wr_1','$wr_2',
'$wr_3','$wr_e','$wr_t','$wr_g','$wr_rmk','$hab_1','$hab_2','$hab_3','$hab_e','$hab_t','$hab_g','$hab_rmk','$sos_1','$sos_2','$sos_3',
'$sos_e','$sos_t','$sos_g','$sos_rmk','$phe_1','$phe_2','$phe_3','$phe_e','$phe_t','$phe_g','$phe_rmk','$comp_1','$comp_2',
'$comp_3','$comp_e',
'$comp_t','$comp_g','$comp_rmk','$he_1','$he_2','$he_3','$he_e','$he_t','$he_g','$he_rmk','$fa_1','$fa_2','$fa_3','$fa_e',
'$fa_t','$fa_g','$fa_rmk',
'$agr_1','$agr_2','$agr_3','$agr_e','$agr_t','$agr_g','$agr_rmk','$vr_1','$vr_2','$vr_3','$vr_e','$vr_t','$vr_g','$vr_rmk',
'$qr_1','$qr_2','$qr_3',
'$qr_e','$qr_t','$qr_g','$qr_rmk','$fo_1','$fo_2','$fo_3','$fo_e','$fo_t','$fo_g','$fo_rmk','$fr_1','$fr_2','$fr_3','$fr_e',
'$fr_t','$fr_g','$fr_rmk')");
$collectid=$con->insert_id;
//echo "$collectid";
if($insert==false){
		$errormsge1="<p id='red' >RESULT ALREADY EXIST</p>";
		}
		else{
			header("location:admin_edit_result_temp.php?id=$collectid & term=$term");
			}
	}
else if($term=="second"){
$insert=$con->query("insert into result_pri_second(ADM_NO,FNAME,LNAME,PIN,CLASS,SEX,TERM,SESSION,TOTAL_SCORE,OUT_OFF,
OVERALL_PERCENT,POSITION,NO_CLASS,
NO_SUBJECTS,SCH_OPEN,SCH_ABS,TEACHER_RPT,HM_REMARK,SCH_RESUME,INFO,CRS_1,CRS_2,CRS_3,CRS_E,CRS_T,CRS_G,CRS_RMK,MATH_1,MATH_2,MATH_3,MATH_E,MATHS_T,MATH_G,MATH_RMK,BSC_1,BSC_2,BSC_3,BSC_E,BSC_T,BSC_G,BSC_RMK,ENG_1,ENG_2,ENG_3,ENG_E,ENG_T,ENG_G,
ENG_RMK,WR_1,WR_2,WR_3,WR_E,WR_T,WR_G,WR_RMK,HAB_1,HAB_2,HAB_3,HAB_E,HAB_T,HAB_G,HAB_RMK,SOS_1,SOS_2,SOS_3,SOS_E,SOS_T,
SOS_G,SOS_RMK,PHE_1,PHE_2,PHE_3,PHE_E,PHE_T,PHE_G,PHE_RMK,COMP_1,COMP_2,COMP_3,COMP_E,COMP_T,COMP_G,COMP_RMK,HE_1,HE_2,
HE_3,HE_E,HE_T,HE_G,HE_RMK,FA_1,FA_2,FA_3,FA_E,FA_T,FA_G,FA_RMK,AGR_1,AGR_2,AGR_3,AGR_E,AGR_T,AGR_G,AGR_RMK,VR_1,VR_2,
VR_3,VR_E,VR_T,VR_G,VR_RMK,QR_1,QR_2,QR_3,QR_E,QR_T,QR_G,QR_RMK,FO_1,FO_2,FO_3,FO_E,FO_T,FO_G,FO_RMK,FR_1,FR_2,FR_3,FR_E,
FR_T,FR_G,FR_RMK) values('$regno','$fname','$othername','$pin','$class','$sex','$term',
'$sessions','$total_score','$outoff','$overall_percent','$position','$no_class','$no_subjects',
'$sch_open','$sch_abs','$teacher_rpt','$hm_remark','$sch_resume',
'$info','$crs_1','$crs_2','$crs_3','$crs_e','$crs_t','$crs_g','$crs_rmk','$math_1','$math_2','$math_3','$math_e','$math_t',
'$math_g','$math_rmk','$bsc_1','$bsc_2','$bsc_3','$bsc_e','$bsc_t','$bsc_g','$bsc_rmk','$eng_1','$eng_2',
'$eng_3','$eng_e','$eng_t','$eng_g','$eng_rmk','$wr_1','$wr_2',
'$wr_3','$wr_e','$wr_t','$wr_g','$wr_rmk','$hab_1','$hab_2','$hab_3','$hab_e','$hab_t','$hab_g','$hab_rmk','$sos_1','$sos_2','$sos_3',
'$sos_e','$sos_t','$sos_g','$sos_rmk','$phe_1','$phe_2','$phe_3','$phe_e','$phe_t','$phe_g','$phe_rmk','$comp_1','$comp_2',
'$comp_3','$comp_e',
'$comp_t','$comp_g','$comp_rmk','$he_1','$he_2','$he_3','$he_e','$he_t','$he_g','$he_rmk','$fa_1','$fa_2','$fa_3','$fa_e',
'$fa_t','$fa_g','$fa_rmk',
'$agr_1','$agr_2','$agr_3','$agr_e','$agr_t','$agr_g','$agr_rmk','$vr_1','$vr_2','$vr_3','$vr_e','$vr_t','$vr_g','$vr_rmk',
'$qr_1','$qr_2','$qr_3',
'$qr_e','$qr_t','$qr_g','$qr_rmk','$fo_1','$fo_2','$fo_3','$fo_e','$fo_t','$fo_g','$fo_rmk','$fr_1','$fr_2','$fr_3','$fr_e',
'$fr_t','$fr_g','$fr_rmk')");
$collectid=$con->insert_id;
//echo "$collectid";
if($insert==false){
		$errormsge1="<p id='red' >RESULT ALREADY EXIST</p>";
		}
		else{
			header("location:admin_edit_result_temp.php?id=$collectid & term=$term");
			}
	
	}

else if($term=="third"){
$insert=$con->query("insert into result_pri_third(ADM_NO,FNAME,LNAME,PIN,CLASS,SEX,TERM,SESSION,TOTAL_SCORE,OUT_OFF,
OVERALL_PERCENT,POSITION,NO_CLASS,
NO_SUBJECTS,SCH_OPEN,SCH_ABS,TEACHER_RPT,HM_REMARK,SCH_RESUME,INFO,CRS_1,CRS_2,CRS_3,CRS_E,CRS_T,CRS_G,CRS_RMK,MATH_1,MATH_2,MATH_3,MATH_E,MATHS_T,MATH_G,MATH_RMK,BSC_1,BSC_2,BSC_3,BSC_E,BSC_T,BSC_G,BSC_RMK,ENG_1,ENG_2,ENG_3,ENG_E,ENG_T,ENG_G,
ENG_RMK,WR_1,WR_2,WR_3,WR_E,WR_T,WR_G,WR_RMK,HAB_1,HAB_2,HAB_3,HAB_E,HAB_T,HAB_G,HAB_RMK,SOS_1,SOS_2,SOS_3,SOS_E,SOS_T,
SOS_G,SOS_RMK,PHE_1,PHE_2,PHE_3,PHE_E,PHE_T,PHE_G,PHE_RMK,COMP_1,COMP_2,COMP_3,COMP_E,COMP_T,COMP_G,COMP_RMK,HE_1,HE_2,
HE_3,HE_E,HE_T,HE_G,HE_RMK,FA_1,FA_2,FA_3,FA_E,FA_T,FA_G,FA_RMK,AGR_1,AGR_2,AGR_3,AGR_E,AGR_T,AGR_G,AGR_RMK,VR_1,VR_2,
VR_3,VR_E,VR_T,VR_G,VR_RMK,QR_1,QR_2,QR_3,QR_E,QR_T,QR_G,QR_RMK,FO_1,FO_2,FO_3,FO_E,FO_T,FO_G,FO_RMK,FR_1,FR_2,FR_3,FR_E,
FR_T,FR_G,FR_RMK) values('$regno','$fname','$othername','$pin','$class','$sex','$term',
'$sessions','$total_score','$outoff','$overall_percent','$position','$no_class','$no_subjects',
'$sch_open','$sch_abs','$teacher_rpt','$hm_remark','$sch_resume',
'$info','$crs_1','$crs_2','$crs_3','$crs_e','$crs_t','$crs_g','$crs_rmk','$math_1','$math_2','$math_3','$math_e','$math_t',
'$math_g','$math_rmk','$bsc_1','$bsc_2','$bsc_3','$bsc_e','$bsc_t','$bsc_g','$bsc_rmk','$eng_1','$eng_2',
'$eng_3','$eng_e','$eng_t','$eng_g','$eng_rmk','$wr_1','$wr_2',
'$wr_3','$wr_e','$wr_t','$wr_g','$wr_rmk','$hab_1','$hab_2','$hab_3','$hab_e','$hab_t','$hab_g','$hab_rmk','$sos_1','$sos_2','$sos_3',
'$sos_e','$sos_t','$sos_g','$sos_rmk','$phe_1','$phe_2','$phe_3','$phe_e','$phe_t','$phe_g','$phe_rmk','$comp_1','$comp_2',
'$comp_3','$comp_e',
'$comp_t','$comp_g','$comp_rmk','$he_1','$he_2','$he_3','$he_e','$he_t','$he_g','$he_rmk','$fa_1','$fa_2','$fa_3','$fa_e',
'$fa_t','$fa_g','$fa_rmk',
'$agr_1','$agr_2','$agr_3','$agr_e','$agr_t','$agr_g','$agr_rmk','$vr_1','$vr_2','$vr_3','$vr_e','$vr_t','$vr_g','$vr_rmk',
'$qr_1','$qr_2','$qr_3',
'$qr_e','$qr_t','$qr_g','$qr_rmk','$fo_1','$fo_2','$fo_3','$fo_e','$fo_t','$fo_g','$fo_rmk','$fr_1','$fr_2','$fr_3','$fr_e',
'$fr_t','$fr_g','$fr_rmk')");
$collectid=$con->insert_id;
if($insert==false){
		$errormsge1="<p id='red' >RESULT ALREADY EXIST</p>";
		}
		else{
			header("location:admin_edit_result_temp.php?id=$collectid & term=$term");
			}
	
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
      <script type="text/javascript" src="js/jquery.min.js"></script>       
      <script type="text/javascript" src="js/bootstrap.js"></script>       
      <script type="text/javascript" src="js/bootstrap.min.js"></script>       
      <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>       
      <script type="text/javascript" src="js/jquery.cycle.all.js"></script>       
      <!----font-Awesome----->       
      <link rel="stylesheet" href="fonts/css/font-awesome.min.css"> 
      <!----font-Awesome----->       
      <style> 
                #red{
                background-color:red;
                text-align:center;
                color:white;
                padding:10px;
                font-size:12px;
                display:inline-block;
                }
                #addresult{
                text-decoration:none;
                font-size:13px;
                color:white;
                font-weight:bold;
                background-color:#01A2A6;
                padding:10px;
                display:inline-block;
                box-shadow:0px 0px 4px gray;
                margin-right:5px;
                }
                .rt{
                transform:rotate(-40deg);
                -moz-transform:rotate(-40deg);
                -webkit-transform:rotate(-40deg);
                display:block;
                height:71px;
                background-color:transparent;
                padding:0px;
                position:relative;
                bottom:10px;
                left:30px;
                }
</style>       
    </head>     
    <body class="">
    <?php include('header.php');?>  
      <div class="mainresultbody"> 
        <div class="container"> 
          <div class="submainresult"> 
           <a href="http://www.elixandesacademy.com"> <img src="images/topimage.jpg" /></a> 
            <a id='addresult' href='resultentry.php'>ADD NEW RESULT HERE </a>
            
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
                              <input type="text" class="form-control" id="resultcase" required value="<?php echo $regno ?>" disabled="disabled"> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">SURNAME</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" required value="<?php echo $fname ?>" name="fname" disabled="disabled"> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">OTHER NAME</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" required value="<?php echo $othername?>" name="lname" disabled="disabled"> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">CLASS</td> 
                            <td class=""> 
                              <input type="text" class="form-control resultdetails-td2" id="resultcase" required value="<?php echo $class?>" disabled="disabled"> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">SESSION</td> 
                            <td class=""> 
                              <select class="form-control" name="sessions"> 
                                <option value="2017/2018">2017/2018</option>                                 
                                <option value=""></option>                                 
                                <option value=""></option>                                 
                              </select>                               
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">TERM</td> 
                            <td class=""> 
                              <select class="form-control" name="term"> 
                                <option value="first">FIRST TERM</option>                                 
                                <option value="second">SECOND TERM</option>                                 
                                <option value="third">THIRD TERM</option>                                 
                              </select>                               
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
                              <input type="text" class="form-control" id="resultcase" required value="<?php echo $sex ?>" disabled="disabled"> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">NO. IN CLASS</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" name="no_class"> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">TOTAL NO. OF  SUBJECTS</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" name="no_subjects" required> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">POSITION</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" name="position"> 
                            </td>                             
                          </tr>                           
                          <span class="text-danger"><strong>PLEASE ENSURE TO VERIFY TOTAL NO.OF SUBJECTS</strong> </span> 
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
              <div class="resultcova" data-pg-collapsed> 
                <div class="table-responsive"> 
                  <table class="table table-striped table-bordered table-hover table-condensed"> 
                    <thead> 
                      <tr> 
                        <th>SUBJECTS</th> 
                        <th><span class="rt">TEST(20)</span></th> 
                        <th><span class="rt">ASSIGN(10)</span></th> 
                        <th><span class="rt">PROJECT(10)</span></th> 
                        <th><span class="rt">EXAM(60)</span></th> 
                      </tr>                       
                    </thead>                     
                    <tbody class=""> 
                      <tr data-pg-collapsed> 
                        <td class="subjects">C.R.S</td> 
                        <td> 
                          <input type="text" class="inputscore" name="crs_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="crs_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="crs_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="crs_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">MATHEMATICS</td> 
                        <td> 
                          <input type="text" class="inputscore" name="math_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="math_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="math_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="math_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">BASIC SCIENCE</td> 
                        <td> 
                          <input type="text" class="inputscore" name="bsc_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="bsc_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="bsc_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="bsc_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">ENGLISH LANGUAGE</td> 
                        <td> 
                          <input type="text" class="inputscore" name="eng_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="eng_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="eng_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="eng_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">CIVIC/POEM</td> 
                        <td> 
                          <input type="text" class="inputscore" name="wr_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="wr_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="wr_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="wr_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">VOCATIONAL STUDY/HABIT</td> 
                        <td> 
                          <input type="text" class="inputscore" name="hab_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="hab_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="hab_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="hab_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">SOCIAL STUDIES</td> 
                        <td> 
                          <input type="text" class="inputscore" name="sos_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="sos_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="sos_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="sos_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">P.H.E</td> 
                        <td> 
                          <input type="text" class="inputscore" name="phe_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="phe_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="phe_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="phe_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">COMPUTER STUDIES</td> 
                        <td> 
                          <input type="text" class="inputscore" name="comp_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="comp_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="comp_3" maxlength="2"> 
                        </td>
                        <td> 
                          <input type="text" class="inputscore" name="comp_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">HOME ECONOMICS</td> 
                        <td> 
                          <input type="text" class="inputscore" name="he_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="he_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="he_3" maxlength="2"> 
                        </td>
                        <td> 
                          <input type="text" class="inputscore" name="he_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">FINE ARTS</td> 
                        <td> 
                          <input type="text" class="inputscore" name="fa_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fa_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fa_3" maxlength="2"> 
                        </td>
                        <td> 
                          <input type="text" class="inputscore" name="fa_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">AGRIC SCI</td> 
                        <td> 
                          <input type="text" class="inputscore" name="agr_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="agr_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="agr_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="agr_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">VERBAL REASONING</td> 
                        <td> 
                          <input type="text" class="inputscore" name="vr_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="vr_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="vr_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="vr_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">Q. REASONING</td> 
                        <td> 
                          <input type="text" class="inputscore" name="qr_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="qr_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="qr_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="qr_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">PHONICS</td> 
                        <td> 
                          <input type="text" class="inputscore" name="fo_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fo_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fo_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fo_e" maxlength="2"> 
                        </td>                         
                      </tr>                       
                      <tr data-pg-collapsed> 
                        <td class="subjects">FRENCH</td> 
                        <td> 
                          <input type="text" class="inputscore" name="fr_1" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fr_2" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fr_3" maxlength="2"> 
                        </td>                         
                        <td> 
                          <input type="text" class="inputscore" name="fr_e" maxlength="2"> 
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
                            <input type="text" class="form-control schlabel" placeholder="Enter No. here" name="sch_open"> 
                          </div>                           
                        </div>                         
                        <div class="col-xs-6"> 
                          <div class="input-group"> 
                            <span class="input-group-addon schlabel">NO. OF TIMES ABSENT</span> 
                            <input type="text" class="form-control schlabel" placeholder="Enter No. here" name="sch_abs"> 
                          </div>                           
                        </div>                         
                      </div>                       
                      <table class="table table-condensed table-striped table-bordered table-hover" id="hidecomments"> 
                        <tbody class=""> 
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td" id="resizetd">CLASS TEACHER'S REPORT</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" name="teacher_rpt"> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">HEAD TEACHER'S REPORT</td> 
                            <td class=""> 
                              <input type="text" class="form-control" id="resultcase" name="hm_remark"> 
                            </td>                             
                          </tr>                           
                          <tr class=""> 
                            <td class="resultdetails-td">NEXT TERM BEGINS</td> 
                            <td class=""> 
                              <input type="text" class="form-control resultdetails-td2" id="resultcase" name="sch_resume"> 
                            </td>                             
                          </tr>                           
                          <tr class="" data-pg-collapsed> 
                            <td class="resultdetails-td">SPECIAL SKILLS/BEHAVIOUR</td> 
                            <td class=""> 
                              <input type="text" class="form-control" name="info"> 
                            </td>                             
                          </tr>                           
                        </tbody>                         
                      </table>                       
                    </div>                     
                  </div>                   
                </div>                 
              </div>               
              <button type="submit" class="btn" id="addresult" name="addresult">UPLOAD SCORES</button>               
            </form>             
            <div class="pg-empty-placeholder stamp"></div>             
            <p class="resultdate"><?php echo date("d/m/Y");?></p> 
          </div>           
        </div>         
      </div>       
      <!-- end main -->       
      <div class="myfooter" data-pg-collapsed> 
        <div class="container-fluid"> 
          <div class="row"> 
            <div class="col-sm-3 col-sm-offset-1" data-pg-collapsed> 
              <div class="news" id="hidenews"> 
                <div class="row"> 
                  <div class="col-xs-3"> 
                    <h4><i class="fa fa-edit"></i></h4> 
                  </div>                   
                  <div class="col-xs-9"> 
                    <h3>LATEST NEWS</h3> 
                    <p>First-Term Mid term break for the 2016/2017 academic session commences from dd/mm/yy to dd/mm/yy.<br><span><a href="blog.html">READ MORE NEWS</a></span></p> 
                  </div>                   
                </div>                 
              </div>               
              <div class="news"> 
                <div class="row"> 
                  <div class="col-xs-3"> 
                    <h4><i class="fa fa-comments"></i></h4> 
                  </div>                   
                  <div class="col-xs-9"> 
                    <h3>CONNECT WITH US</h3> 
                    <p class=""><a href="" class="socialbutom"><i class="fa fa-facebook-square butttomsocial"></i></a><a href="" class="socialbutom"><i class="fa butttomsocial fa-twitter-square"></i></a><a href="" class="socialbutom"><i class="fa butttomsocial fa-youtube"></i></a></p> 
                  </div>                   
                </div>                 
              </div>               
            </div>             
            <div class="col-sm-4" data-pg-collapsed> 
              <div class="news"> 
                <div class="row"> 
                  <div class="col-xs-3"> 
                    <h4><i class="fa fa-map-marker"></i></h4> 
                  </div>                   
                  <div class="col-xs-9"> 
                    <h3>VISIT US @</h3> 
                    <p>6, Unity Street, off Upper Mission Road Extension,Uteh, Benin city, Edo State.</p> 
                  </div>                   
                </div>                 
              </div>               
              <div class="news"> 
                <div class="row"> 
                  <div class="col-xs-3"> 
                    <h4><i class="fa fa-phone-square"></i></h4> 
                  </div>                   
                  <div class="col-xs-9"> 
                    <h3>CALL:08051561885</h3> 
                  </div>                   
                </div>                 
              </div>               
              <div class="news"> 
                <div class="row"> 
                  <div class="col-xs-3"> 
                    <h4><i class="fa fa-envelope"></i></h4> 
                  </div>                   
                  <div class="col-xs-9"> 
                    <h3>info.elixandesacdaemy@gmail.com</h3> 
                  </div>                   
                </div>                 
              </div>               
            </div>             
            <div class="col-sm-4" data-pg-collapsed> 
              <div class="news"> 
                <div class="row"> 
                  <div class="col-xs-3 col-sm-3"> 
                    <h4><i class="fa fa-link"></i></h4> 
                  </div>                   
                  <div class="col-xs-9"> 
                    <h3>QUICK LINKS</h3> 
                    <p class="brokenlines linkp"><a href="index.html" class="newsa">HOME</a></p> 
                    <p class="brokenlines"><a href="about.html" class="newsa">ABOUT US</a></p> 
                    <p class="brokenlines"><a href="contact.php" class="newsa">CONTACT US</a></p> 
                    <p class="brokenlines"><a href="gallery.html" class="newsa">GALLERY</a></p> 
                    <p class="brokenlines"><a href="../blog" class="newsa">OUR BLOG</a></p> 
                    <p class="brokenlines"><a href="admin.php" class="newsa">ADMIN</a></p> 
                  </div>                   
                </div>                 
              </div>               
            </div>             
          </div>           
        </div>         
      </div>       
      <div class="myfoter"> 
      </div>       
    </body>     
  </html>
