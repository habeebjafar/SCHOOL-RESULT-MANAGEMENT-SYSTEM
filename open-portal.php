<!DOCTYPE HTML> 
<html> 
  <head> 
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105600939-1', 'auto');
  ga('send', 'pageview');

</script>     
    <title>Student registration portal</title>     
    <!-- Bootstrap -->     
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> 
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="ELIXANDES ACADEMY"> 
    <link href="images/elixandes_icon.png" rel="icon" /> 
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>     
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
  </head>   
  <body class=""> 
    <?php include('tophead.php');?> 
    <div class="openportal"> 
      <div class="portalcolor" data-pg-collapsed id="hidestudentportal"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-sm-5 col-sm-offset-1"> 
              <a href="#" class="door1"> <i class="fa fa-refresh"></i> UPDATE PROFILE</a> 
            </div>             
            <div class="col-sm-5"> 
              <a href="open-portal.php" class="door1 door2"> <i class="fa fa-pencil-square-o"></i> ONLINE REGISTRATION</a> 
            </div>             
          </div>           
          <div class="row"> 
            <div class="col-sm-5 col-sm-offset-1"> 
              <a href="admin.php" class="door1 door3"> <i class="fa fa-book"></i> RESULT CHECKING</a> 
            </div>             
            <div class="col-sm-5"> 
              <a href="project.php" class="door1 door4"> <i class="fa fa-sort-alpha-asc"></i> HOLIDAY PROJECT</a> 
            </div>             
          </div>           
          <div class="row"> 
            <div class="col-sm-5 col-sm-offset-3"> 
              <a href="admin.php" class="door1 door3 color4"> <i class="fa fa-print"></i> PRINT REGISTRATION SLIP</a> 
            </div>             
          </div>           
        </div>         
      </div>       
      <div class="portalcolor" data-pg-collapsed> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-sm-5 col-sm-offset-1" data-pg-collapsed> 
              <a href="register.php" class="door1 door2"> <i class="fa fa-pencil-square-o fa-2x"></i><br> ONLINE<br> REGISTRATION</a> 
            </div>
            <div class="col-sm-5" data-pg-collapsed> 
              <a href="resultchecker-sec.php" class="door1 door3"> <i class="fa fa-book fa-2x"></i><br> RESULT <br>CHECKING</a> 
            </div>             
          </div>           
          <div class="row"> 
            <div class="col-sm-5 col-sm-offset-1"> 
              <a href="student_profile.php" class="door1 door3 color4"> <i class="fa fa-print fa-2x"></i><br> PRINT<br> REGISTRATION SLIP</a> 
            </div>
            <div class="col-sm-5"> 
              <a href="#" class="door1 door3 color4 color5"> <i class="fa fa-folder-open fa-2x"></i> <br>SCHOOL<br> PROJECTS</a> 
            </div>             
          </div>           
        </div>         
      </div>       
    </div>     
    <!-- end main -->     
    <?php include('footer.php');?> 
  </body>   
</html>
