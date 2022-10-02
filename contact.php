<!DOCTYPE HTML> 
<html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105600939-1', 'auto');
  ga('send', 'pageview');

</script> 
  <head> 
    <title>CONTACT US|ELIXANDES ACADEMY BRITISH INT' STANDARD</title>     
    <!-- Bootstrap -->     
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> 
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="ELIXANDES ACADEMY"> 
    <link href="images/elixandes_icon.png" rel="icon" /> 
    <meta name="description" content="contact us at NO.6, Unity Street, off Upper Mission Road Extension,Uteh, Benin city, Edo State."> 
        
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->     
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
    <!-- start plugins -->     
    <script type="text/javascript" src="js/jquery.min.js"></script>     
    <script type="text/javascript" src="js/bootstrap.js"></script>     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <!----font-Awesome----->     
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css"> 
    <!----font-Awesome----->     
  </head>   
  <body class=""> 
<?php include_once("analyticstracking.php");?> 
<?php include('tophead.php');?>   
    <!-- end main -->     
    <div class="main_btm"> 
      <!-- start main_btm -->       
      <div class="container"> 
        <div class="main row"> 
          <div class="col-sm-8 col-sm-push-2"> 
            <div class="contact-form"> 
              <h2>Contact Us</h2> 
<?php 
			   $succes="";
			  $ermsg="";
			  
             
			 
              if(isset($_POST["submit"])){
				  $username=$_POST["username"];
				  $mobile=$_POST["mobile"];
				 $location=$_POST["location"];
				$useremail=$_POST["useremail"];
				$message=$_POST["message"];

				if($username!=""&& $mobile!=""&&$location!=""&&$useremail!=""&&$message!=""){
					$content="NAME: ".$username."\n"."EMAIL:".$useremail."\n"."LOCATION:".$location."\n"."MOBILE:".$mobile."\n"."MESSAGE:".$message;
					mail("info@elixandesacademy.com","ENQUIRY",$content);
						$succes="MESSAGE SENT!";
						//echo $content;
					}
					else{
						$ermsg="sorry your message was not sent, please fill all required fields thank you.";
						}			



				  }
?> 
              <form method="post"> 
                <?php echo" <h5 >$succes</h5>";?> 
                <?php echo" <h5>$ermsg</h5>";?> 
                <div> 
                  <span>name</span> 
                  <span><input type="text" class="form-control" id="userName" name="username" required></span> 
                </div>                 
                <div> 
                  <span>mobile no</span> 
                  <span><input type="text" class="form-control" id="mobile" name="mobile" required></span> 
                </div>                 
                <div> 
                  <span>location</span> 
                  <span><input type="text" class="form-control" id="location" name="location" required></span> 
                </div>                 
                <div> 
                  <span>e-mail</span> 
                  <span><input type="email" class="form-control" id="email" name="useremail" required></span> 
                </div>                 
                <div> 
                  <span>enter message here</span> 
                  <span><textarea name="message" required> </textarea></span> 
                </div>                 
                <div> 
                  <label class="fa-btn btn-1 btn-1e"> 
                    <input type="submit" value="submit" name="submit"> 
                  </label>                   
                </div>                 
              </form>               
            </div>             
          </div>           
          <div class="clearfix"></div>           
        </div>         
      </div>       
    </div>     
    <?php include('footer.php');?>  
  </body>   
</html>