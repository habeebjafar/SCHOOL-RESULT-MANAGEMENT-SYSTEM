<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
	header("location:admin.php");
	}
?> 
<!DOCTYPE HTML> 
<html> 
  <head> 
    <title>ADMIN PANEL</title>     
    <!-- Bootstrap -->     
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> 
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
    <div class="main_bg"> 
      <div class="container-fluid"> 
        <h1 class="crechline">HIGH SCHOOL</h1> 
        <div class="table-responsive holdrecords"> 
          <table class="table table-striped table-bordered table-hover bg-success table-condensed"> 
            <thead> 
              <tr> 
                <th>NO.</th> 
                <th>REG NO.</th> 
                <th>SURNAME</th> 
                <th>OTHER NAME</th> 
                <th>SEX</th> 
                <th>DATE OF BIRTH</th> 
                <th>GENOTYPE</th> 
                <th>AGE</th> 
                <th>SESSION</th> 
                <th>PARENT NAME</th> 
                <th>PARENT NO.</th> 
                <th>NATIONALITY</th> 
                <th>ENTRY CLASS</th> 
                <th>PARENT ADDRESS</th> 
                <th>PARENT OCCUPATION</th> 
                <th>DATE</th> 
              </tr>               
            </thead>             
            <tbody> 
<?php
$norec=$rows="";
 include('connect.php');
 if($_POST){
$collectsession=$_POST["sessions"];
if($collectsession=="2017/2018"){
$select=$con->query("select *from student_bio where ENTRY_CLASS='JUNIOR-HIGH-SCH1' OR ENTRY_CLASS='JUNIOR-HIGH-SCH2' OR ENTRY_CLASS='JUNIOR-HIGH-SCH3'");
 }
 else if($collectsession=="2018/2019"){
$select=$con->query("select *from student_bio_18 where ENTRY_CLASS='JUNIOR-HIGH-SCH1' OR ENTRY_CLASS='JUNIOR-HIGH-SCH2' OR ENTRY_CLASS='JUNIOR-HIGH-SCH3'");
 }
	if ($select!=false){
		$rows=$select->num_rows;
		if($rows>0){
			$x=0;
		while($result=$select->fetch_assoc()){
			$x=$x+1;
			//$pin=$result["PINS"];
			$reg=$result["REG"];
			$surname=$result["SURNAME"];
			$othername=$result["OTHERNAME"];
			$sex=$result["SEX"];
			$session=$result["ACA_SESSION"];
			$mobile=$result["PARENT_MOBILE"];
			$class=$result["ENTRY_CLASS"];
			$dob=$result["DOB"];
			$genotype=$result["GENOTYPE"];
			$age=$result["AGE"];
			$parentname=$result["PARENT_NAME"];
			$parent_address=$result["PARENT_ADDRESS"];
			$parentoccupation=$result["PARENT_OCCUPATION"];
			$nationality=$result["NATIONALITY"];
			$date= date("D jS M Y ",strtotime($result['ENTRY_DATE']));
			
			echo "
			<tr data-pg-collapsed> 
                <td>$x</td> 
                <td>$reg</td> 
                <td>$surname</td> 
                <td>$othername</td> 
                <td>$sex</td> 
                <td>$dob</td> 
                <td>$genotype</td> 
                <td>$age</td> 
                <td>$session</td> 
                <td>$parentname</td> 
                <td>$mobile</td> 
                <td>$nationality</td> 
                <td>$class</td> 
                <td>$parent_address</td> 
                <td>$parentoccupation</td> 
                <td>$date</td> 
              </tr>           
			";
			
		}
	
		}
		else{
			$norec= "<div>Sorry no records found</div>";
			}
		}
 }
	?> 
            </tbody>             
          </table>           
          <?php echo "<H5>TOTAL NO. OF STUDENTS:$rows</h5>"; ?> 
          <?php echo $norec; ?> 
        </div>         
      </div>       
      <!-- start main -->       
    </div>     
    <!-- end main -->     
<?php include('footer.php');?>
  </body>   
</html>
