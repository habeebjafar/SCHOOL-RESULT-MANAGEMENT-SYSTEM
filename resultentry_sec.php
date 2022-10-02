<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
die("<a href='admin.php'>ACCESS DENIED FOR USER,PLEASE LOG IN</a>");
	}
include('connect.php');
if(isset($_COOKIE["pin"])&& isset($_COOKIE["regno"])&& isset($_COOKIE["fname"])&& isset($_COOKIE["othername"])&& isset($_COOKIE["sex"])
&& isset($_COOKIE["class"])&& isset($_COOKIE["sessions"])){
$pin=$_COOKIE["pin"];
$regno=$_COOKIE["regno"];
$fname=$_COOKIE["fname"];
$othername=$_COOKIE["othername"];
$sex=$_COOKIE["sex"];
$class=$_COOKIE["class"];
$sessions=$_COOKIE["sessions"];
	}
else{
die("<a href='admin.php'>ACCESS DENIED FOR USER,PLEASE LOG IN</a>" . $con->error);
	}

$overall_percent="";
$outoff="";
$errormsge1="";
if(isset($_POST["addresult"])){
$term=$_POST["term"];
$sessions=$_POST["sessions"];
$position=$_POST["position"];
$no_class=$_POST["no_class"];
$no_subjects=$_POST["no_subjects"];
$sch_open=$_POST["sch_open"];
$sch_abs=$_POST["sch_abs"];
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

		
if($term=="first"){
$insert=$con->query("insert into result_sec(ADM_NO,FNAME,LNAME,PIN,CLASS,SEX,TERM,SESSION,TOTAL_SCORE,OUT_OFF,
OVERALL_PERCENT,POSITION,NO_CLASS,
NO_SUBJECTS,SCH_OPEN,SCH_ABS,TEACHER_RPT,HM_REMARK,SCH_RESUME,INFO,CRS_1,CRS_2,CRS_3,CRS_E,CRS_T,CRS_G,CRS_RMK,MATH_1,MATH_2,MATH_3,MATH_E,MATHS_T,MATH_G,MATH_RMK,BSC_1,BSC_2,BSC_3,BSC_E,BSC_T,BSC_G,BSC_RMK,ENG_1,ENG_2,ENG_3,ENG_E,ENG_T,ENG_G,
ENG_RMK,WR_1,WR_2,WR_3,WR_E,WR_T,WR_G,WR_RMK,HAB_1,HAB_2,HAB_3,HAB_E,HAB_T,HAB_G,HAB_RMK,SOS_1,SOS_2,SOS_3,SOS_E,SOS_T,
SOS_G,SOS_RMK) values('$regno','$fname','$othername','$pin','$class','$sex','$term',
'$sessions','$total_score','$outoff','$overall_percent','$position','$no_class','$no_subjects',
'$sch_open','$sch_abs','$teacher_rpt','$hm_remark','$sch_resume',
'$info','$crs_1','$crs_2','$crs_3','$crs_e','$crs_t','$crs_g','$crs_rmk','$math_1','$math_2','$math_3','$math_e','$math_t',
'$math_g','$math_rmk','$bsc_1','$bsc_2','$bsc_3','$bsc_e','$bsc_t','$bsc_g','$bsc_rmk','$eng_1','$eng_2',
'$eng_3','$eng_e','$eng_t','$eng_g','$eng_rmk','$wr_1','$wr_2',
'$wr_3','$wr_e','$wr_t','$wr_g','$wr_rmk','$hab_1','$hab_2','$hab_3','$hab_e','$hab_t','$hab_g','$hab_rmk','$sos_1','$sos_2','$sos_3','$sos_e','$sos_t','$sos_g','$sos_rmk')");
$collectid=$con->insert_id;	
if($insert==false){
	$errormsge1="<p id='red' >RESULT ALREADY EXIST FOR THIS Fisrt</p>". $con->error;
		}
		else{
			header("location:admin_edit_result2_temp.php?id=$collectid & term=$term");
			}
	}
else if($term=="second"){
$insert=$con->query("insert into result_sec_second(ADM_NO,FNAME,LNAME,PIN,CLASS,SEX,TERM,SESSION,TOTAL_SCORE,OUT_OFF,
OVERALL_PERCENT,POSITION,NO_CLASS,
NO_SUBJECTS,SCH_OPEN,SCH_ABS,TEACHER_RPT,HM_REMARK,SCH_RESUME,INFO,CRS_1,CRS_2,CRS_3,CRS_E,CRS_T,CRS_G,CRS_RMK,MATH_1,MATH_2,MATH_3,MATH_E,MATHS_T,MATH_G,MATH_RMK,BSC_1,BSC_2,BSC_3,BSC_E,BSC_T,BSC_G,BSC_RMK,ENG_1,ENG_2,ENG_3,ENG_E,ENG_T,ENG_G,
ENG_RMK,WR_1,WR_2,WR_3,WR_E,WR_T,WR_G,WR_RMK,HAB_1,HAB_2,HAB_3,HAB_E,HAB_T,HAB_G,HAB_RMK,SOS_1,SOS_2,SOS_3,SOS_E,SOS_T,
SOS_G,SOS_RMK) values('$regno','$fname','$othername','$pin','$class','$sex','$term',
'$sessions','$total_score','$outoff','$overall_percent','$position','$no_class','$no_subjects',
'$sch_open','$sch_abs','$teacher_rpt','$hm_remark','$sch_resume',
'$info','$crs_1','$crs_2','$crs_3','$crs_e','$crs_t','$crs_g','$crs_rmk','$math_1','$math_2','$math_3','$math_e','$math_t',
'$math_g','$math_rmk','$bsc_1','$bsc_2','$bsc_3','$bsc_e','$bsc_t','$bsc_g','$bsc_rmk','$eng_1','$eng_2',
'$eng_3','$eng_e','$eng_t','$eng_g','$eng_rmk','$wr_1','$wr_2',
'$wr_3','$wr_e','$wr_t','$wr_g','$wr_rmk','$hab_1','$hab_2','$hab_3','$hab_e','$hab_t','$hab_g','$hab_rmk','$sos_1','$sos_2','$sos_3','$sos_e','$sos_t','$sos_g','$sos_rmk')");
$collectid=$con->insert_id;
if($insert==false){
	$errormsge1="<p id='red' >RESULT ALREADY EXIST</p>";
		}
		else{
			header("location:admin_edit_result2_temp.php?id=$collectid & term=$term");
			}
	
}

else if($term=="third"){
$insert=$con->query("insert into result_sec_third(ADM_NO,FNAME,LNAME,PIN,CLASS,SEX,TERM,SESSION,TOTAL_SCORE,OUT_OFF,
OVERALL_PERCENT,POSITION,NO_CLASS,
NO_SUBJECTS,SCH_OPEN,SCH_ABS,TEACHER_RPT,HM_REMARK,SCH_RESUME,INFO,CRS_1,CRS_2,CRS_3,CRS_E,CRS_T,CRS_G,CRS_RMK,MATH_1,MATH_2,MATH_3,MATH_E,MATHS_T,MATH_G,MATH_RMK,BSC_1,BSC_2,BSC_3,BSC_E,BSC_T,BSC_G,BSC_RMK,ENG_1,ENG_2,ENG_3,ENG_E,ENG_T,ENG_G,
ENG_RMK,WR_1,WR_2,WR_3,WR_E,WR_T,WR_G,WR_RMK,HAB_1,HAB_2,HAB_3,HAB_E,HAB_T,HAB_G,HAB_RMK,SOS_1,SOS_2,SOS_3,SOS_E,SOS_T,
SOS_G,SOS_RMK) values('$regno','$fname','$othername','$pin','$class','$sex','$term',
'$sessions','$total_score','$outoff','$overall_percent','$position','$no_class','$no_subjects',
'$sch_open','$sch_abs','$teacher_rpt','$hm_remark','$sch_resume',
'$info','$crs_1','$crs_2','$crs_3','$crs_e','$crs_t','$crs_g','$crs_rmk','$math_1','$math_2','$math_3','$math_e','$math_t',
'$math_g','$math_rmk','$bsc_1','$bsc_2','$bsc_3','$bsc_e','$bsc_t','$bsc_g','$bsc_rmk','$eng_1','$eng_2',
'$eng_3','$eng_e','$eng_t','$eng_g','$eng_rmk','$wr_1','$wr_2',
'$wr_3','$wr_e','$wr_t','$wr_g','$wr_rmk','$hab_1','$hab_2','$hab_3','$hab_e','$hab_t','$hab_g','$hab_rmk','$sos_1','$sos_2','$sos_3','$sos_e','$sos_t','$sos_g','$sos_rmk')");
$collectid=$con->insert_id;
if($insert==false){
	$errormsge1="<p id='red' >RESULT ALREADY EXIST</p>";
		}
		else{
			header("location:admin_edit_result2_temp.php?id=$collectid & term=$term");
			}
	
	}
			 
}		
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>SCHOOL RESULT SHEET</title>     
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
          <div class="resultheading">
            <h1>BURUJTECH ACADEMY</h1>
            <h2>TERMY REPORT SHEET</h2>
          </div>           
          <img class="hidden" rc="images/topimage.jpg" /> 
          <a id='addresult' href='resultentry.php'>ADD ANOTHER RESULT HERE </a> 
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
                              <option value="2018/2019">2018/2019</option>                               
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
                        <span class="text-primary tex"><strong>PLEASE ENSURE TO VERIFY TOTAL NO.OF SUBJECTS</strong> </span> 
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
                      <td class="subjects">BASIC SCIENCE<BR>AND TECHNOLOGY</td> 
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
                      <td class="subjects">LITERATURE IN ENGLISH</td> 
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
                      <td class="subjects">PREVOCATIONA STUDIES</td> 
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
                      <td class="subjects">BUSINESS STUDIES</td> 
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
                    <table class="table table-condensed table-striped table-bordered table-hover" id="hidecomments2"> 
                      <tbody class=""> 
                        <tr class="" data-pg-collapsed> 
                          <td class="resultdetails-td" id="resizetd">FORM TEACHER'S COMMENT</td> 
                          <td class=""> 
                            <input type="text" class="form-control" id="resultcase" name="teacher_rpt"> 
                          </td>                           
                        </tr>                         
                        <tr class=""> 
                          <td class="resultdetails-td">RECTOR'S COMMENT</td> 
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
      <p>Copyright &copy;2017, ELIXANDES ACADEMY | Design by  Eminent technology</p> 
    </div>     
    <script type="text/javascript" src="js/jquery.min.js"></script>     
    <script type="text/javascript" src="js/bootstrap.js"></script>     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>     
  </body>   
</html>
