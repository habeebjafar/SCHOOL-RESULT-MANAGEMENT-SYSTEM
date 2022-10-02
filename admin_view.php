<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header('location:admin.php');
	}
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>SCHOOL ADMINISTRATOR PANEL</title>     
    <!-- Bootstrap -->     
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> 
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->     
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
    <!-- start plugins -->     
    <!----font-Awesome----->     
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css"> 
    <link rel="icon" href="images/elixandes_icon.png"> 
    <!----font-Awesome----->     
  </head>   
  <body class=""> 
    <div class="header_bg" data-pg-collapsed> 
      <div class="container-fluid"> 
        <div class="row header"> 
          <div class="logo navbar-left col-sm-12"> 
            <h1 class=""><a href="index.php" class=""> 
                <div class=""> 
                  <div class="row"> 
                    <div class="col-sm-2 hidden-xs hidden-sm hidden-md hidden-lg"> 
                      <img src="images/elexandesbadge.png" width="150" /> 
                    </div>                     
                    <div class="col-sm-10"> 
                      <section class="mysection"> 
                        <span class="titletop">STUDENT RESULTS & ONLINE MANAGEMENT SYSTEM<br><span id="britishtxt">[SRMS]</span></span> 
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
    <div class="colorwhite" data-pg-collapsed> 
      <div class="container-fluid"> 
        <div class="row hidden-xs hidden-sm hidden-md hidden-lg" data-pg-collapsed> 
          <div class="col-sm-4"> 
            <div class="creche">CRECHE
              <form role="form" method="post" action="creche_view.php"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">SELECT SESSION</label>                   
                  <select id="formInput18" class="form-control" name="sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                    <option value="2017/2018">2017/2018</option>                     
                  </select>                   
                </div>                 
                <button type="submit" class="btn btn-default">Submit</button>                 
              </form>               
            </div>             
          </div>           
          <div class="col-sm-4"> 
            <div class="creche todler">TODDLER
              <form role="form" method="post" action="toddler_view.php"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">SELECT SESSION</label>                   
                  <select id="formInput18" class="form-control" name="sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                    <option value="2017/2018">2017/2018</option>                     
                  </select>                   
                </div>                 
                <button type="submit" class="btn btn-default">Submit</button>                 
              </form>               
            </div>             
          </div>           
          <div class="col-sm-4"> 
            <div class="creche todler presch">PRE-SCHOOL
              <form role="form" method="post" action="pre-school_view.php"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">SELECT SESSION</label>                   
                  <select id="formInput18" class="form-control" name="sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                    <option value="2017/2018">2017/2018</option>                     
                  </select>                   
                </div>                 
                <button type="submit" class="btn btn-default">Submit</button>                 
              </form>               
            </div>             
          </div>           
        </div>         
        <div class="row"> 
          <div class="col-sm-4"> 
            <div class="creche basic" id="bsic">FIRST STEP
              <form role="form" method="post" action="basic_view.php" class=""> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">ENTER HERE TO REGISTER STUDENT PROFILE</label>                   
                  <select id="formInput18" class="form-control hidden-lg hidden-md hidden-sm hidden-xs" name="sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                  </select>                   
                </div>                 
                <a href="portal.php" class="firststep">REGISTER</a> 
              </form>               
            </div>             
          </div>           
          <div class="col-sm-4"> 
            <div class="creche todler highsch">VIEW REGISTERED STUDENTS
              <form role="form" method="post" action="highschool_view.php"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">SELECT SESSION</label>                   
                  <select id="formInput18" class="form-control" name="sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                  </select>                   
                </div>                 
                <button type="submit" class="btn btn-default">Submit</button>                 
              </form>               
            </div>             
          </div>           
          <div class="col-sm-4" data-pg-collapsed> 
            <div class="creche todler highsch overv">OVER VIEW
              <form role="form" method="post" action="class_overview.php"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">SELECT SESSION</label>                   
                  <select id="formInput18" class="form-control" name="sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                  </select>                   
                </div>                 
                <button type="submit" class="btn btn-default">Submit</button>                 
              </form>               
            </div>             
          </div>           
        </div>         
        <div class="row ">            
          <div class="col-sm-4 " data-pg-collapsed> 
            <a href="resultentry.php" class="creche basic"> <i class="fa fa-edit fa-2x"></i><br> ADD STUDENT RESULT HERE</a> 
          </div>
          <div class="col-sm-4" data-pg-collapsed> 
            <a href="resultchecker-sec.php" class="creche basic vewr"> <i class="fa  fa-eye fa-2x"></i><br> VIEW STUDENT RESULT HERE</a> 
          </div>           
          <div class="col-sm-4"> 
            <a href="admin_view_result_pri.php" class="creche basic vewr query"> <i class="fa  fa-2x fa-file-text"></i><br> VIEW RESULT SUMMARY HERE</a> 
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
