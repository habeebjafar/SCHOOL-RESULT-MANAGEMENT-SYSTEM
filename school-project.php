<?php
session_start();
include('connect.php');
$error_pin="";
$pin="";
$regno="";
$e_pin="";
if(isset($_POST["continue"])){
$pin=$_POST["pin"];
$pin=trim($pin);
$regno=$_POST["regno"];
$regno=trim($regno);
$select=$con->query("select *from student_bio where REG='$regno' and PINS='$pin'");
if($select!=false){
$result=$select->fetch_assoc();
$collectpin=$result["PINS"];
$collectreg=$result["REG"];
if($pin===$collectpin && $regno===$collectreg){
header("location:../projects");
	//$_SESSION["pin"]=$pin;
	//$_SESSION["regno"]=$regno;
//setcookie("pin",$pin,time()+(86400*30),"/");
//setcookie("regno",$regno,time()+(86400*30),"/");

}
 else{ 
$e_pin="opps! invalid login credentials";
	}				
}
		
 }
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Student registration portal |ELIXANDES ACADEMY BRITISH INT' STANDARD</title>     
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
<?php include('tophead.php');?>
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
                <p class="errorpin"><?php echo $error_pin ?></p> 
                <p class="errorpin"><?php echo $e_pin ?></p> 
              </div>               
              <form method="post" role="form" class="" data-pg-collapsed> 
                <div class="form-group"> 
                  <label class="control-label mylabel2" for="exampleInputPassword1">ACCESS PIN</label>                   
                  <input type="text" class="form-control myinput2" required name="pin" placeholder="Enter your pin here"> 
                </div>                 
                <div class="form-group"> 
                  <label class="control-label mylabel2" for="exampleInputPassword1">REG NO.</label>                   
                  <input type="text" class="form-control myinput2" required name="regno" placeholder="Enter your registration no. here"> 
                </div>                 
                <button type="submit" class="btn" name="continue" id="register">CONTINUE</button>                 
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
