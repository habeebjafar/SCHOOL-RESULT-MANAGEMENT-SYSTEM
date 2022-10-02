<?php
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
header("location:admin.php");
}
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head>
 <meta charset="utf-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <title>ADMIN PANELY</title>     
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
                    <div class="col-sm-2 hidden"> 
                      <img src="images/elexandesbadge.png" width="150" /> 
                    </div>                     
                    <div class="col-sm-12"> 
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
    <div class="main_bg"> 
      <div class="container-fluid"> 
       <h1 class='crechline'>CLASS OVER-VIEW</h1>
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
                <th>ENTRY CLASS</th> 
                <th>PARENT ADDRESS</th> 
                <th>DATE REGISTERED</th> 
                <th>QUICK LINK</th> 
				<th>QUICK LINK</th> 

              </tr>               
            </thead>             
            <tbody> 
<?php 
$norec="";
$rows="";

include('connect.php');
if($_POST){
$collectsession=$_POST["sessions"];
//echo "$collectsession";
if($collectsession=="2017/2018"){
$select=$con->query("select *from student_bio order by REG asc");
}
else if($collectsession=="2018/2019"){
	$select=$con->query("select *from student_bio_18 order by REG asc");
}

if($select!=false){
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
$date= date("D jS M Y ",strtotime($result['ENTRY_DATE']));
echo"<tr data-pg-collapsed><td>$x</td><td>$reg</td><td>$surname</td><td>$othername</td><td>$sex</td><td>$dob</td><td>$genotype</td> 
 <td>$age</td><td>$session</td><td>$parentname</td><td>$mobile</td><td>$class</td><td>$parent_address</td><td>$date</td>
<td><a href='delete.php?id=$reg & id2=$session'>DELETE</a></td><td><a href='edit-profile.php?id=$reg & id2=$session'>EDIT</a></td></tr>";
			
		}
	
		}
		else{
			$norec= "<div>Sorry no records found</div>";
			}
}
}
else{
	header("location:admin_view.php");
}
?> 
            </tbody>             
          </table>           
<?php echo "<H5>TOTAL NO. OF STUDENTS ENROLLED <b>($collectsession) SESSION</b>:$rows</h5>";?> 
<?php echo $norec ?> 
        </div>         
      </div>       
      <!-- start main -->       
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
