<?php
session_start();
if(isset($_SESSION["profile"])){
	$id=$_SESSION["profile"];
	}
else{
	header('location:student_profile.php');
	}	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ELIXANDES ACADEMY">
    <title>E-REGISTRATION SLIP</title>
     <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> 
    <meta name="author" content="ELIXANDES ACADEMY"> 
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
        <link href="print.css" rel="stylesheet" type="text/css" media="all" /> 

        <link href="images/elixandes_icon.png" rel="icon" /> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style>
  .coverregister{
  min-width:767px;
  }
  </style>
  </head>
  <body class="">
  <a href="index.php" id="bck" class="btn btn-primary" id="hidebutton">BACK HOME</a>

<?php
include('connect.php');
$select=$con->query("select *from student_bio_18 where REG='$id'");
if($select!=false){
		$rows=$select->num_rows;
		if($rows>0){
			$result=$select->fetch_assoc();
			$pin=$result["PIN"];
			$reg=$result["REG"];
			$surname=$result["SURNAME"];
			$othername=$result["OTHERNAME"];
			$sex=$result["SEX"];
			$session=$result["ACA_SESSION"];
			$mobile=$result["PARENT_MOBILE"];
			$class=$result["ENTRY_CLASS"];
			$img=$result["PICS"];
if($img=="uploads/"){
$passport="ATTACH PASSPORT HERE";
}
else{
	$passport="<div>
                <img src='$img' width='120' class='regimg' />
              </div>";
}
	$date= date("D jS M Y ",strtotime($result['ENTRY_DATE']));
	
	echo" <div class='container' >
	 <div class='coverregister' >
        <div class='datecase'> REGISTERED ON : $date</div>
        <div class='topside'>
          <div class='row'>
            <div class='hidden' class='col-xs-3'> 
              <div>
                <img src='images/topbadge.png' width='180' class='regbadge'/>
              </div>
            </div>
            <div class='col-xs-12'> 
              <div class='rightside'>
                <h1 class='ereg'>E-REGISTRATION SLIP</h1>
                <h1 class='elix'>BURUJTECH ACADEMY</h1>
                <h1 class='british'>BRITISH INTERNATIONAL STANDARD</h1>
                <p>1 BENIN AUCHI ROAD, RAMAT PARK, IKPOBA HILL,BENIN CITY.<br>www.burujtechacademy.com<br>TEL:08074535711.</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class='row' data-pg-collapsed>
            <div class='col-xs-4'>                

              <div>
                <table class='table'> 
                  <tbody> 
                    <tr> 
                      <td class='bold-td'>ACCES PIN:</td> 
                      <td>$pin</td> 
                    </tr>                     
                    <tr> 
                      <td class='bold-td'>REG NO.:</td> 
                      <td>$reg</td> 
                    </tr>                     
                    <tr> 
                      <td class='bold-td'>SESSION</td> 
                      <td>$session</td> 
                    </tr>
                    <tr> 
                      <td class='bold-td'>CLASS</td> 
                      <td>$class</td> 
                    </tr>                     
                  </tbody>
                </table>
              </div>
            </div>
            <div class='col-xs-5'>                

              <div>
                <table class='table'> 
                  <tbody> 
                    <tr> 
                      <td class='bold-td'>SURNAME</td> 
                      <td>$surname</td> 
                    </tr>                     
                    <tr> 
                      <td class='bold-td'>OTHER NAMES:</td> 
                      <td>$othername</td> 
                    </tr>                     
                    <tr> 
                      <td class='bold-td'>SEX</td> 
                      <td>$sex</td> 
                    </tr>
                    <tr> 
                      <td class='bold-td'>PARENTS NO.</td> 
                      <td>$mobile</td> 
                    </tr>                     
                  </tbody>
                </table>
              </div>
            </div>
            <div class='col-xs-3'>                

              $passport
            </div>
          </div>
        </div>
        <div>
          <h5 class='note'>NOTE: This slip is your <strong>Acknowledgement slip</strong> .Please print out and keep safe.Any student or pupils without this slip would not be granted access to test, examinations and results.If missing please report to the school authourity immediately or CALL:08074535711.<br>Thanks</h5>
		  <p class='text-center'><input type='button' value='PRINT SLIP' onclick='window.print()'/></p>
        </div>
      </div>
	  </div>";
}
else{
	echo "NO RECORD FOUND";
		}
}
 else{
	 echo "error connecting to database";
		}
?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
