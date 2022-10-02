<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header('location:admin.php');
	}
?> 
<?php
include('connect.php');
$invalidregno="";
if(isset($_POST["resultentry"])){
$regno=$_POST["regno"];
$regno=trim($regno);
$select=$con->query("select *from student_bio_18 where REG='$regno'");
if($select!=false){
$rows=$select->num_rows;
if($rows>0){
$result=$select->fetch_assoc();
$collectreg=$result["REG"];
$collectpin=$result["PIN"];
$collectname=$result["SURNAME"];
$collectothername=$result["OTHERNAME"];
$collectsex=$result["SEX"];
$collectclass=$result["ENTRY_CLASS"];
$collectsession=$result["ACA_SESSION"];
setcookie("regno",$collectreg,time()+(86400*30),"/");
setcookie("pin",$collectpin,time()+(86400*30),"/");
setcookie("fname",$collectname,time()+(86400*30),"/");
setcookie("othername",$collectothername,time()+(86400*30),"/");
setcookie("sex",$collectsex,time()+(86400*30),"/");
setcookie("class",$collectclass,time()+(86400*30),"/");
setcookie("sessions",$collectsession,time()+(86400*30),"/");
if($collectclass=="JUNIOR-HIGH-SCH1" || $collectclass=="JUNIOR-HIGH-SCH2" || $collectclass=="JUNIOR-HIGH-SCH3"){
	header("location:resultentry_sec.php");	
	}						
else{
	header("location:resultentry_pri.php");	
	}
 }
	else{
		$invalidregno="Admission Number not found.";
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
  </head>   
  <body class=""> 
    <div class="header_bg" data-pg-collapsed> 
      <div class="container-fluid"> 
        <div class="row header"> 
          <div class="logo navbar-left col-sm-12"> 
            <h1 class=""><a href="index.php" class=""> 
                <div class="hidden"> 
                  <div class="row"> 
                    <div class="col-sm-2"> 
                      <img src="images/elexandesbadge.png" width="150" /> 
                    </div>                     
                    <div class="col-sm-10"> 
                      <section class="mysection"> 
                        <span class="titletop">ELIXANDES ACADEMY<br><span id="britishtxt">BRITISH INTERNATIONAL STANDARD</span></span> 
                        <span class="moto">...GOOD WORK BETTER TOMMOROW</span> 
                      </section>                       
                    </div>                     
                  </div>                   
                  <br /> 
                </div>                 
              </a></h1> 
          </div>           
        </div>         
      </div>       
    </div>     
 <?php include('header.php');?>
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
      <div class="container-fluid"> 
        <div class="row"> 
          <div class="col-sm-5 col-sm-offset-3"> 
            <div class="coverform"> 

              <div class="holderror"> 
                <p class="errorpin"><?php echo $invalidregno; ?></p> 
              </div>               
              <form method="post" role="form" class="" data-pg-collapsed> 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label mylabel2" for="exampleInputPassword1">ENTER STUDENT REG NO.</label>                   
                  <input type="text" class="form-control myinput2" required name="regno" placeholder="Enter your registration no. here"> 
                </div>                 
                <button type="submit" class="btn" name="resultentry" id="register">CONTINUE</button>                 
              </form>               
            </div>             
          </div>           
        </div>         
      </div>       
    </div>     
    <!-- end main -->     
<?php include('footer.php');?>
<script type="text/javascript" src="js/jquery.min.js"></script>     
    <script type="text/javascript" src="js/bootstrap.js"></script>     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>         
  </body>   
</html>
