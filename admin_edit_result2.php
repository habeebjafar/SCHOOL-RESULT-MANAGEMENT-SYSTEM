<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header('location:admin.php');
	}
?> 
<?php
$overall_percent="";
$outoff="";
$errormsge1="";
include('connect.php'); 
if(isset($_GET["id"])&& isset($_GET["term"])){
include('connect.php');
$getid=$_GET["id"];
$getterm=$_GET["term"];
	//echo $getid . $getterm;
if($getterm=="first"){
$select=$con->query("select *from result_sec where TERM='$getterm' && ID='$getid'");
	}
else if($getterm=="second"){
$select=$con->query("select *from result_sec_second where TERM='$getterm' && ID='$getid'");
	}
else if($getterm=="third"){
$select=$con->query("select *from result_sec_third where TERM='$getterm'&& ID='$getid'");
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
	die("ACCES DENIED");
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

function calculate($num1,$num2,$num3,$num4){
if($num1==!"" || $num2!="" || $num3!="" || $num4!=""){
	$sum=$num1+$num2+$num3+$num4;
	if($sum>=80){
		$grade="A1";
		$remark="EXCELLENTT";
		}
		
	else if($sum>=70){
		$grade="B2";
		$remark="GOOD";
		}
	else if($sum>=50){
		$grade="C6";
		$remark="CREDIT";
		}
	else if($sum<=49){
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

$total_score=$bsc_t+$crs_t+$eng_t+$hab_t+$math_t+$wr_t+$sos_t;
if($no_subjects>0){
	$overall_percent=$total_score/$no_subjects;
$outoff=$no_subjects*100;
}
		
if($getterm=="first" && $term!="select" && $term!="second" && $term!="third"){
$insert=$con->query("update result_sec set FNAME='$fname',LNAME='$lname',CLASS='$class',SEX='$sex',TERM='$term',SESSION='$sessions',
POSITION='$position',TOTAL_SCORE='$total_score',OVERALL_PERCENT='$overall_percent',OUT_OFF='$outoff',
NO_CLASS='$no_class',NO_SUBJECTS='$no_subjects',SCH_OPEN='$sch_open',SCH_ABS='$sch_abs',TEACHER_RPT='$teacher_rpt',HM_REMARK='$hm_remark',
SCH_RESUME='$sch_resume',INFO='$info',CRS_1='$crs_1',CRS_2='$crs_2',CRS_3='$crs_3',CRS_E='$crs_e',CRS_T='$crs_t',CRS_G='$crs_g',CRS_RMK='$crs_rmk',
MATH_1='$math_1',MATH_2='$math_2',MATH_3='$math_3',MATH_E='$math_e',MATHS_T='$math_t',MATH_G='$math_g',MATH_RMK='$math_rmk',BSC_1='$bsc_1',
BSC_2='$bsc_2',BSC_3='$bsc_3',BSC_E='$bsc_e',BSC_T='$bsc_t',BSC_G='$bsc_g',BSC_RMK='$bsc_rmk',ENG_1='$eng_1',
ENG_2='$eng_2',ENG_3='$eng_3',ENG_E='$eng_e',ENG_T='$eng_t',ENG_G='$eng_g',ENG_RMK='$eng_rmk',WR_1='$wr_1',
WR_2='$wr_2',WR_3='$wr_3',WR_E='$wr_e',WR_T='$wr_t',WR_G='$wr_g',WR_RMK='$wr_rmk',HAB_1='$hab_1',HAB_2='$hab_2',HAB_3='$hab_3',HAB_E='$hab_e',
HAB_T='$hab_t',HAB_G='$hab_g',HAB_RMK='$hab_rmk',SOS_1='$sos_1',SOS_2='$sos_2',SOS_3='$sos_3',SOS_E='$sos_e',
SOS_T='$sos_t',SOS_G='$sos_g',SOS_RMK='$sos_rmk' where ID='$getid'");
	
if($insert==false){
	$errormsge1="<p id='red' >FAILED TO UPDATE, PLEASE TRY AGAIN</p>";
		}
		else{
			header("location:admin_view_result_pri.php");
			}
	}
else if($getterm=="second" && $term!="select" && $term!="first" && $term!="third"){
$insert=$con->query("update result_sec_second set FNAME='$fname',LNAME='$lname',CLASS='$class',SEX='$sex',TERM='$term',SESSION='$sessions',
POSITION='$position',TOTAL_SCORE='$total_score',OVERALL_PERCENT='$overall_percent',OUT_OFF='$outoff',
NO_CLASS='$no_class',NO_SUBJECTS='$no_subjects',SCH_OPEN='$sch_open',SCH_ABS='$sch_abs',TEACHER_RPT='$teacher_rpt',HM_REMARK='$hm_remark',
SCH_RESUME='$sch_resume',INFO='$info',CRS_1='$crs_1',CRS_2='$crs_2',CRS_3='$crs_3',CRS_E='$crs_e',CRS_T='$crs_t',CRS_G='$crs_g',CRS_RMK='$crs_rmk',
MATH_1='$math_1',MATH_2='$math_2',MATH_3='$math_3',MATH_E='$math_e',MATHS_T='$math_t',MATH_G='$math_g',MATH_RMK='$math_rmk',BSC_1='$bsc_1',
BSC_2='$bsc_2',BSC_3='$bsc_3',BSC_E='$bsc_e',BSC_T='$bsc_t',BSC_G='$bsc_g',BSC_RMK='$bsc_rmk',ENG_1='$eng_1',
ENG_2='$eng_2',ENG_3='$eng_3',ENG_E='$eng_e',ENG_T='$eng_t',ENG_G='$eng_g',ENG_RMK='$eng_rmk',WR_1='$wr_1',
WR_2='$wr_2',WR_3='$wr_3',WR_E='$wr_e',WR_T='$wr_t',WR_G='$wr_g',WR_RMK='$wr_rmk',HAB_1='$hab_1',HAB_2='$hab_2',HAB_3='$hab_3',HAB_E='$hab_e',
HAB_T='$hab_t',HAB_G='$hab_g',HAB_RMK='$hab_rmk',SOS_1='$sos_1',SOS_2='$sos_2',SOS_3='$sos_3',SOS_E='$sos_e',
SOS_T='$sos_t',SOS_G='$sos_g',SOS_RMK='$sos_rmk' where ID='$getid'");

if($insert==false){
	$errormsge1="<p id='red' >FAILED TO UPDATE PLEASE TRY AGAIN</p>";
		}
		else{
			header("location:admin_view_result_pri.php");
			}
	
	}

else if($getterm=="third" && $term!="select" && $term!="first" && $term!="second"){
$insert=$con->query("update result_sec_third set FNAME='$fname',LNAME='$lname',CLASS='$class',SEX='$sex',TERM='$term',SESSION='$sessions',
POSITION='$position',TOTAL_SCORE='$total_score',OVERALL_PERCENT='$overall_percent',OUT_OFF='$outoff',
NO_CLASS='$no_class',NO_SUBJECTS='$no_subjects',SCH_OPEN='$sch_open',SCH_ABS='$sch_abs',TEACHER_RPT='$teacher_rpt',HM_REMARK='$hm_remark',
SCH_RESUME='$sch_resume',INFO='$info',CRS_1='$crs_1',CRS_2='$crs_2',CRS_3='$crs_3',CRS_E='$crs_e',CRS_T='$crs_t',CRS_G='$crs_g',CRS_RMK='$crs_rmk',
MATH_1='$math_1',MATH_2='$math_2',MATH_3='$math_3',MATH_E='$math_e',MATHS_T='$math_t',MATH_G='$math_g',MATH_RMK='$math_rmk',BSC_1='$bsc_1',
BSC_2='$bsc_2',BSC_3='$bsc_3',BSC_E='$bsc_e',BSC_T='$bsc_t',BSC_G='$bsc_g',BSC_RMK='$bsc_rmk',ENG_1='$eng_1',
ENG_2='$eng_2',ENG_3='$eng_3',ENG_E='$eng_e',ENG_T='$eng_t',ENG_G='$eng_g',ENG_RMK='$eng_rmk',WR_1='$wr_1',
WR_2='$wr_2',WR_3='$wr_3',WR_E='$wr_e',WR_T='$wr_t',WR_G='$wr_g',WR_RMK='$wr_rmk',HAB_1='$hab_1',HAB_2='$hab_2',HAB_3='$hab_3',HAB_E='$hab_e',
HAB_T='$hab_t',HAB_G='$hab_g',HAB_RMK='$hab_rmk',SOS_1='$sos_1',SOS_2='$sos_2',SOS_3='$sos_3',SOS_E='$sos_e',
SOS_T='$sos_t',SOS_G='$sos_g',SOS_RMK='$sos_rmk' where ID='$getid'");

	
	if($insert==false){
	
		$errormsge1="<p id='red' >FAILED TO UPDATE PLEASE TRY AGAIN</p>";
		}
		else{
			header("Location:admin_view_result_pri.php");
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
    <title>STUDENT RESULTS</title>     
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
    #red{
    background-color:#E34B1D;
    text-align:center;
    color:white;
    padding:10px;
    font-size:12px;
	display:inline-block;
	margin-right:7px;
	border-radius:4px;
    }
	#addresult{
		text-decoration:none;
		font-size:13px;
		color:white;
		font-weight:bold;
		background-color:#01A2A6;
		padding:10px;
		display:inline-block;
		margin-right:7px;
		border-radius:4px;
		}
	#ct{
		color:red;
		font-weight:bold;
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
		<div class="resultheading">
            <h1>BURUJTECH ACADEMY</h1>
            <h2>REPORT SHEET</h2>
          </div>  
          <img class="hidden" src="images/topimage.jpg" /> 
          <a id='addresult' href='resultentry.php'>ADD ANOTHER RESULT  </a><a id='addresult' href='admin_view_result_pri.php'>VIEW RESULT HERE </a>
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
                            <input type="text" class="form-control" id="resultcase" required value="<?php echo $LNAME?>" name="lname" > 
                          </td>                           
                        </tr>                         
                        <tr class=""> 
                          <td class="resultdetails-td">CLASS</td> 
                          <td class=""> 
                      <input type="text" class="form-control resultdetails-td2" id="resultcase"  required value="<?php echo $CLASS;?>" name="class"> 
                          </td>                           
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">SESSION</td> 
                          <td class=""> 
 							<select class="form-control" name="sessions"> 
                              <option value="2018/2019">2018/2019</option>                               
                              <option value=""></option>                               
                              <option value=""></option>                               
                            </select>                            </td>                           
                        </tr>                         
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td">TERM</td> 
                          <td class=""> 
                            <select class="form-control" name="term">
                            <option value="select">SELECT TERM</option>    
                              <option value="first">FIRST TERM</option>                               
                              <option value="second">SECOND TERM</option>                               
                              <option value="third">THIRD TERM</option>                               
                            </select>
                            <span id="ct">PLEASE CHOOSE THE CORRECT TERM</span>                             
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
                            <input type="text" class="form-control" id="resultcase"  required value="<?php echo $SEX ?>" name="sex" > 
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
                          </td> <span id="ct">PLEASE ENSURE TO VERIFY TOTAL NO.OF SUBJECTS</span>                          
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
                      <td class="subjects">RELIGION & NATIONAL VALUES</td> 
                      <td> 
                        <input type="text" class="inputscore" name="crs_1" value="<?php echo $CRS_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_2" value="<?php echo $CRS_2;?>" > 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="crs_3" value="<?php echo $CRS_3;?>"> 
                      </td> 
                       <td> 
                        <input type="text" class="inputscore" name="crs_e" value="<?php echo $CRS_E;?>"> 
                      </td> 
                                            
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">MATHEMATICS</td> 
                      <td> 
                        <input type="text" class="inputscore" name="math_1" value="<?php echo $MATH_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_2" value="<?php echo $MATH_2;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="math_3" value="<?php echo $MATH_3;?>"> 
                      </td> 
                      <td> 
                        <input type="text" class="inputscore" name="math_e" value="<?php echo $MATH_E;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">BASIC SCIENCE & TECHNOLOGY</td> 
                      <td> 
                        <input type="text" class="inputscore" name="bsc_1" value="<?php echo $BSC_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_2" value="<?php echo $BSC_2;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="bsc_3" value="<?php echo $BSC_3;?>"> 
                      </td>
                      <td> 
                        <input type="text" class="inputscore" name="bsc_e" value="<?php echo $BSC_E;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">ENGLISH LANGUAGE</td> 
                      <td> 
                        <input type="text" class="inputscore" name="eng_1" value="<?php echo $ENG_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_2" value="<?php echo $ENG_2;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="eng_3" value="<?php echo $ENG_3;?>"> 
                      </td>  
                      <td> 
                        <input type="text" class="inputscore" name="eng_e" value="<?php echo $ENG_E;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">LITERATURE IN ENGLISH</td> 
                      <td> 
                        <input type="text" class="inputscore" name="wr_1" value="<?php echo $WR_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="wr_2" value="<?php echo $WR_2;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="wr_3" value="<?php echo $WR_3;?>"> 
                      </td>
                      <td> 
                        <input type="text" class="inputscore" name="wr_e" value="<?php echo $WR_E;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">PREVOCATIONAL STUDIES</td> 
                      <td> 
                        <input type="text" class="inputscore" name="hab_1" value="<?php echo $HAB_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="hab_2" value="<?php echo $HAB_2;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="hab_3" value="<?php echo $HAB_3;?>"> 
                      </td> 
                      <td> 
                        <input type="text" class="inputscore" name="hab_e" value="<?php echo $HAB_E;?>"> 
                      </td>                       
                    </tr>                     
                    <tr data-pg-collapsed> 
                      <td class="subjects">BUSINESS STUDIES</td> 
                      <td> 
                        <input type="text" class="inputscore" name="sos_1" value="<?php echo $SOS_1;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="sos_2" value="<?php echo $SOS_2;?>"> 
                      </td>                       
                      <td> 
                        <input type="text" class="inputscore" name="sos_3" value="<?php echo $SOS_3;?>"> 
                      </td>
                       <td> 
                        <input type="text" class="inputscore" name="sos_e" value="<?php echo $SOS_E;?>"> 
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
                          <input type="text" class="form-control schlabel"  name="sch_abs" value="<?php echo $SCH_ABS;?>"> 
                        </div>                         
                      </div>                       
                    </div>                     
                    <table class="table table-condensed table-striped table-bordered table-hover"> 
                      <tbody class=""> 
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td" id="resizetd">FORM TEACHER'S REPORT</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" name="teacher_rpt" value="<?php echo $TEACHER_RPT;?>"> 
                          </td>                           
                        </tr>                         
                        <tr class=""> 
                          <td class="resultdetails-td">RECTOR'S REPORT</td> 
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
                          <td class="resultdetails-td">SPECIAL SKILLS/BEHAVIOUR</td> 
                          <td class=""> 
                             <input type="text" class="form-control" name="info"  value="<?php echo $INFO;?>" >                              
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
    </div>
 <script type="text/javascript" src="js/jquery.min.js"></script>     
    <script type="text/javascript" src="js/bootstrap.js"></script>     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>          
  </body>   
</html>
