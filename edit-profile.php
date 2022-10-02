<?php
session_start();
date_default_timezone_set("Africa/Lagos");
include('connect.php');
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header('location:admin.php');
	}

if(isset($_GET["id"])&& isset($_GET["id2"])){
include('connect.php');
$getid=$_GET["id"];
$getsession=$_GET["id2"];
if($getsession=="2017/2018"){
	$select=$con->query("select *from student_bio where REG='$getid'");
}
else if($getsession=="2018/2019"){
	$select=$con->query("select *from student_bio_18 where REG='$getid'");
}

if($select!=false){
$result=$select->fetch_assoc();
extract($result);
	}
else{
	die("ERROR TRY AGAIN");
	}
	}
	
$e_insert="";
$e_insert2="";
$address=$age=$dob=$nationality=$othername=$parentmobile=$parentname=$parentoccupation=$ac_sessions=$surname="";
if(isset($_POST["update"])){
$regno=$_POST["regnos"]; 
$surname=$_POST["surname"]; 
$surname=trim($surname);
$othername=$_POST["othername"]; 
$othername=trim($othername);
$sex=$_POST["sex"];
$age=$_POST["age"];
$parentname=$_POST["parentname"]; 
$parentname=trim($parentname);
$parentmobile=$_POST["parentmobile"]; 
$parentmobile=trim($parentmobile);
$parentoccupation=$_POST["parentoccupation"]; 
$parentoccupation=trim($parentoccupation);
$nationality=$_POST["nationality"]; 
$nationality=trim($nationality);
$dob=$_POST["dob"];
$ac_sessions=$_POST["ac_sessions"];

if($ac_sessions=="2017/2018"){
					
if($regno!="" && $surname!="" && $othername!="" && $dob!="" && $age!="" && $ac_sessions!="" && $parentname!="" && $parentmobile!="" && $nationality!="" && 
 $sex!="" && $parentoccupation!=""){
$updates=$con->query("update student_bio set REG='$regno',SURNAME='$surname',OTHERNAME='$othername',SEX='$sex',DOB='$dob',
AGE='$age',PARENT_NAME='$parentname',PARENT_MOBILE='$parentmobile',NATIONALITY='$nationality',PARENT_OCCUPATION='$parentoccupation',
ACA_SESSION='$ac_sessions' where REG='$getid'");
}
else{
	$e_insert2="<div  id='infos' class='bg-info'>UPDATE FAILED, PLEASE FILL ALL REQUIRED FIELDS CORRECTLY.DONT LEAVE A BLANK SPACE</div>";
	}	
}

else if($ac_sessions=="2018/2019"){
					
if($regno!="" && $surname!="" && $othername!="" && $dob!="" && $age!="" && $ac_sessions!="" && $parentname!="" && $parentmobile!="" && $nationality!="" && 
 $sex!="" && $parentoccupation!=""){
$updates=$con->query("update student_bio_18 set REG='$regno',SURNAME='$surname',OTHERNAME='$othername',SEX='$sex',DOB='$dob',
AGE='$age',PARENT_NAME='$parentname',PARENT_MOBILE='$parentmobile',NATIONALITY='$nationality',PARENT_OCCUPATION='$parentoccupation',
ACA_SESSION='$ac_sessions' where REG='$getid'");
}
else{
	$e_insert2="<div  id='infos' class='bg-info'>UPDATE FAILED, PLEASE FILL ALL REQUIRED FIELDS CORRECTLY.DONT LEAVE A BLANK SPACE</div>";
	}	
}
if($updates==false){
	$e_insert="<div id='infos' class='bg-info'>INVALID OPERATION</div>";
 	}
 else{
$e_insert="<div id='infos' class='bg-info'>SUCCESSFULLY UPDATED ! | <a href='admin_view.php'>BACK</a></div>";
 echo $e_insert2;
 echo $e_insert;
die();
	}
		
}	
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>ONLINE REGISTRATION | ELIXANDES ACADEMY BRITISH INT' STANDARD</title>     
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
            #infos{
            width:100%;
            }
            #bck{
            background-color:#3B3B3B;
            color:white;
            padding-bottom:9px;
            padding-left:15px;
            padding-right:15px;
            padding-top:9px;
            text-align:center;
            text-decoration:none;
            font-family:oswald;
            font-size:12px;
            position:relative;
            bottom:-2px
            }
</style>     
  </head>   
  <body class=""> 
    <div class="aboutsection" data-pg-collapsed> 
      <div class="container-fluid"> 
        <div class="row"> 
          <div class="col-sm-10 col-sm-offset-1"> 
</div>           
        </div>         
      </div>       
    </div>     
    <div class="main_bg" data-pg-collapsed> 
      <!-- start main -->       
    </div>     
    <div class="colorwhite"> 
      <div class="container"> 
        <div class="regform"> 
          <p class="showpin instruct">ALL FIELDS ARE MANDATORY</p> 
          <?php echo $e_insert2;?> 
          <?php echo $e_insert;?> 
          <form method="post" ole="form" class="" enctype="multipart/form-data"> 
            <div class="row"> 
                          
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">REGISTRATION NUMBER</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="regnos" readonly value="<?php echo $REG?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">SURNAME</label>                   
                  <input type="text" class="form-control" id="formInput15" name="surname" required value="<?php echo $SURNAME?>"> 
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">OTHER NAMES</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="othername" value="<?php echo $OTHERNAME?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">SEX</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="sex" value="<?php echo $SEX?>">                 
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                 <div class="form-group"> 
                  <label class="control-label" for="formInput21">NATIONALITY</label>                   
                  <input type="text" class="form-control" id="formInput21" required name="nationality" value="<?php echo $NATIONALITY?>"> 
                </div>               
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">DATE OF BIRTH</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="dob" value="<?php echo $DOB?>"> 
                </div>                  
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">AGE</label>                   
                  <input type="number" class="form-control" id="formInput15" required name="age" value="<?php echo $AGE?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput11">ACADEMIC SESSION</label> 
 <input type="text" class="form-control" id="formInput15" readonly required name="ac_sessions" value="<?php echo $ACA_SESSION?>">                   
                                 
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">PARENT/GUARDIAN NAME</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="parentname" value="<?php echo $PARENT_NAME?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput21">PARENTS/GUARDIAN PHONE NO.</label>                   
                  <input type="text" class="form-control" id="formInput21" required name="parentmobile" value="<?php echo $PARENT_MOBILE?>"> 
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">PARENTS/GUARDIAN OCCUPATION</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="parentoccupation" value="<?php echo $PARENT_OCCUPATION?>"> 
                </div>                 
              </div>               
            </div>             
                     
                     
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <button type="submit" class="btn" name="update">UPDATE</button>                 
              </div>               
            </div>             
          </form>           
        </div>         
      </div>       
    </div>     
    <!-- end main -->     
    <script type="text/javascript" src="js/jquery.min.js"></script>     
    <script type="text/javascript" src="js/bootstrap.js"></script>     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>     
  </body>   
</html>
