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
    <title>STUDENT RESULTS</title>     
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
    <div class="main_bg"> 
      <div class="container-fluid"> 
	  <h3>VIEW RESULT SUMMARY</h3>
        <h5 class="centh5 hidden"><span class=""><a href="resultentry.php"><i class="fa fa-plus-circle"></i> ADD NEW RESULT HERE</a><span class=""><a href="view2_bsheet.php" class="highsch basic"><i class="fa fa-print"></i> BROADSHEET-TODDLER/CRECHE/PRE-SCH/BASIC</a><span class=""><a href="view_bsheet.php" class="overv"><i class="fa fa-print"></i> BROADSHEET-HIGH SCHOOL</a></h5> 
        <div class="searchdiv"> 
          <form role="form" class="" data-pg-collapsed method="post"> 
            <div class="row"> 
              <div class="col-sm-3"> 
                <div class="form-group"> 
                  <label class="control-label formlbl" for="exampleInputEmail1">ACADEMIC SESSION</label>                   
                  <select id="formInput20" class="form-control" name="aca_session"> 
                    <option value="select">SELECT</option>                     
                    <option value="2017/2018">2018/2019</option>                     
                    <option value=""></option>                     
                  </select>                   
                </div>                 
              </div>               
              <div class="col-sm-3"> 
                <div class="form-group"> 
                  <label class="control-label formlbl" for="exampleInputEmail1">TERM</label>                   
                  <select id="formInput20" class="form-control" name="term"> 
                    <option value="select">SELECT</option>                     
                    <option value="first">FIRST TERM</option>                     
                    <option value="second">SECOND TERM</option>                     
                    <option value="third">THIRD TERM</option>                     
                  </select>                   
                </div>                 
              </div>               
              <div class="col-sm-3"> 
                <div class="form-group"> 
                  <label class="control-label formlbl" for="exampleInputEmail1">CLASS</label>                   
                  <select id="formInput20" class="form-control" name="class"> 
                    <option class="hidden" value="select">SELECT</option>                     
                    <option class="hidden" value="CRECHE">CRECHE</option>                     
                    <option class="hidden" value="TODDLER">TODDLER</option>                     
                    <option class="hidden" value="PRE-SCH1">PRE SCHOOL1</option>                     
                    <option class="hidden" value="PRE-SCH2">PRE SCHOOL2</option>                     
                    <option class="hidden" value="PRE-SCH3">PRE SCHOOL3</option>                     
                    <option class="hidden" value="BASIC 1">BASIC1</option>                     
                    <option class="hidden" value="BASIC 2">BASIC2</option>                     
                    <option class="hidden" value="BASIC 3">BASIC3</option>                     
                    <option class="hidden" value="BASIC 4">BASIC4</option>                     
                    <option class="hidden" value="BASIC 5">BASIC5</option>                     
                    <option value="JUNIOR-HIGH-SCH1">JUNIOR-HIGH-SCH 1</option>                     
                    <option value="JUNIOR-HIGH-SCH2">JUNIOR-HIGH-SCH 2</option>                     
                    <option value="JUNIOR-HIGH-SCH3">JUNIOR-HIGH-SCH 3</option>                     
                  </select>                   
                </div>                 
              </div>               
              <div class="col-sm-3"> 
                <div class="pg-empty-placeholder pushbtn"></div>                 
                <button type="submit" class="btn" name="search1">SEARCH RESULT</button>                 
              </div>               
            </div>             
          </form>           
        </div>         
        <div class="table-responsive holdrecords"> 
          <table class="table table-striped table-bordered table-hover bg-success table-condensed"> 
            <thead> 
              <tr> 
                <th>NO.</th> 
                <th>REG NO.</th> 
                <th>SURNAME</th> 
                <th>OTHER NAME</th> 
                <th>SEX</th> 
                <th>SESSION</th> 
                <th>TERM</th> 
                <th>CLASS</th> 
                <th>OVERALL<br> TOTAL</th> 
                <th>OVERALL<br> PERCENTAGE</th> 
                <th>VERDICT</th> 
                <th>POSITION</th> 
                <th>QUICK LINKS</th> 
                <th>QUICK LINKS</th> 
              </tr>               
            </thead>             
            <tbody> 
              <?php 
$select="";
$norec2="";
$norec="";
$rows="";
$primary="";
$secondary="";
include('connect.php');	
if(isset($_POST["search1"])){
$session=$_POST["aca_session"];	
$term=$_POST["term"];
$class=$_POST["class"];
if($session=="2017/2018"){
if($term=="first"){
if($class=="TODDLER"){
$select=$con->query("select *from result_pri where  CLASS='TODDLER' order by TOTAL_SCORE desc");
 }//end of toddler
else if($class=="CRECHE"){
$select=$con->query("select *from result_pri where CLASS='CRECHE' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH1"){
$select=$con->query("select *from result_pri where CLASS='PRE-SCH1' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH2"){
$select=$con->query("select *from result_pri where CLASS='PRE-SCH2' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH3"){
$select=$con->query("select *from result_pri where CLASS='PRE-SCH3' order by TOTAL_SCORE desc");
 }
else if($class=="BASIC 1"){
$select=$con->query("select *from result_pri where CLASS='BASIC 1' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 2"){
$select=$con->query("select *from result_pri where CLASS='BASIC 2' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 3"){
$select=$con->query("select *from result_pri where CLASS='BASIC 3' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 4"){
$select=$con->query("select *from result_pri where CLASS='BASIC 4' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 5"){
$select=$con->query("select *from result_pri where CLASS='BASIC 5' order by TOTAL_SCORE desc");
 } 
else if($class=="JUNIOR-HIGH-SCH1"){
$select=$con->query("select *from result_sec where CLASS='JUNIOR-HIGH-SCH1' order by TOTAL_SCORE desc");
 }
else if($class=="JUNIOR-HIGH-SCH2"){
$select=$con->query("select *from result_sec where CLASS='JUNIOR-HIGH-SCH2' order by TOTAL_SCORE desc");
 }
else if($class=="JUNIOR-HIGH-SCH3"){
$select=$con->query("select *from result_sec where CLASS='JUNIOR-HIGH-SCH3' order by TOTAL_SCORE desc ");
 }
}//end of firstterm

else if($term=="second"){
 if($class=="TODDLER"){
$select=$con->query("select *from result_pri_second where  CLASS='TODDLER' order by TOTAL_SCORE desc");
 }//end of toddler
else if($class=="CRECHE"){
$select=$con->query("select *from result_pri_second where CLASS='CRECHE' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH1"){
$select=$con->query("select *from result_pri_second where CLASS='PRE-SCH1' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH2"){
$select=$con->query("select *from result_pri_second where CLASS='PRE-SCH2' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH3"){
$select=$con->query("select *from result_pri_second where CLASS='PRE-SCH3' order by TOTAL_SCORE desc");
 }
else if($class=="BASIC 1"){
$select=$con->query("select *from result_pri_second where CLASS='BASIC 1' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 2"){
$select=$con->query("select *from result_pri_second where CLASS='BASIC 2' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 3"){
$select=$con->query("select *from result_pri_second where CLASS='BASIC 3' order by TOTAL_SCORE desc");
} 
else if($class=="BASIC 4"){
$select=$con->query("select *from result_pri_second where CLASS='BASIC 4' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 5"){
$select=$con->query("select *from result_pri_second where CLASS='BASIC 5' order by TOTAL_SCORE desc");
 } 
else if($class=="JUNIOR-HIGH-SCH1"){
$select=$con->query("select *from result_sec_second where CLASS='JUNIOR-HIGH-SCH1' order by TOTAL_SCORE desc");
 }
else if($class=="JUNIOR-HIGH-SCH2"){
$select=$con->query("select *from result_sec_second where CLASS='JUNIOR-HIGH-SCH2' order by TOTAL_SCORE desc");
 }
else if($class=="JUNIOR-HIGH-SCH3"){
$select=$con->query("select *from result_sec_second where CLASS='JUNIOR-HIGH-SCH3' order by TOTAL_SCORE desc");
 }
}//end of second term

else if($term=="third"){
if($class=="TODDLER"){
$select=$con->query("select *from result_pri_third where  CLASS='TODDLER' order by TOTAL_SCORE desc");
 }//end of toddler
else if($class=="CRECHE"){
$select=$con->query("select *from result_pri_third where CLASS='CRECHE' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH1"){
$select=$con->query("select *from result_pri_third where CLASS='PRE-SCH1' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH2"){
$select=$con->query("select *from result_pri_third where CLASS='PRE-SCH2' order by TOTAL_SCORE desc");
 }
else if($class=="PRE-SCH3"){
$select=$con->query("select *from result_pri_third where CLASS='PRE-SCH3' order by TOTAL_SCORE desc");
 }
else if($class=="BASIC 1"){
$select=$con->query("select *from result_pri_third where CLASS='BASIC 1' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 2"){
$select=$con->query("select *from result_pri_third where CLASS='BASIC 2' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 3"){
$select=$con->query("select *from result_pri_third where CLASS='BASIC 3' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 4"){
$select=$con->query("select *from result_pri_third where CLASS='BASIC 4' order by TOTAL_SCORE desc");
 } 
else if($class=="BASIC 5"){
$select=$con->query("select *from result_pri_third where CLASS='BASIC 5' order by TOTAL_SCORE desc");
 } 
else if($class=="JUNIOR-HIGH-SCH1"){
$select=$con->query("select *from result_sec_third where CLASS='JUNIOR-HIGH-SCH1' order by TOTAL_SCORE desc");
 }
else if($class=="JUNIOR-HIGH-SCH2"){
$select=$con->query("select *from result_sec_third where CLASS='JUNIOR-HIGH-SCH2' order by TOTAL_SCORE desc");
 }
else if($class=="JUNIOR-HIGH-SCH3"){
$select=$con->query("select *from result_sec_third where CLASS='JUNIOR-HIGH-SCH3' order by TOTAL_SCORE desc");
 }
}//end of third term
}//end of session

if($select!=FALSE){			
$rows=$select->num_rows;
if($rows>0){
echo $rows;
echo $class . $session. $term;
$x=0;
//$y=0;
while($result=$select->fetch_assoc()){
$x=$x+1;
//$y=$y+1;
//$ys=$y%10;
//if($ys==0||$ys==4||$ys==5||$ys==6||$ys==7||$ys==8||$ys==9){$pos=$y."th";}
//else if($ys==1){$pos=$y."st";}
//else if($ys==2){$pos=$y."nd";}
//else if($ys==3){$pos=$y."rd";}
$id=$result["ID"];
$reg=$result["ADM_NO"];
$surname=$result["FNAME"];
$othername=$result["LNAME"];
$sex=$result["SEX"];
$insertsession=$result["SESSION"];
$insertterm=$result["TERM"];
$insertclass=$result["CLASS"];
$totalscore=$result["TOTAL_SCORE"];
$percent=$result["OVERALL_PERCENT"];
$remark=$result["HM_REMARK"];
$position=$result["POSITION"];

$primary="<tr data-pg-collapsed><td>$x</td><td>$reg</td> <td>$surname</td><td>$othername</td><td>$sex</td><td>$insertsession</td><td>$insertterm</td> <td>$insertclass</td><td>$totalscore</td><td>$percent</td><td>$remark</td><td>$position</td>
<td><a href='admin_edit_result.php?id=$id & term=$term'>EDIT</a></td><td><a href='admin_delete_result.php?id=$id & term=$term'>DELETE</a></td></tr>";

$secondary="<tr data-pg-collapsed><td>$x</td><td>$reg</td> <td>$surname</td><td>$othername</td><td>$sex</td><td>$insertsession</td><td>$insertterm</td> <td>$insertclass</td><td>$totalscore</td><td>$percent</td><td>$remark</td><td>$position</td>
<td><a href='admin_edit_result2.php?id=$id & term=$term'>EDIT</a></td><td><a href='admin_delete_result2.php?id=$id & term=$term'>DELETE</a></td>
</tr>";
			 
if($class=="JUNIOR-HIGH-SCH1" || $class=="JUNIOR-HIGH-SCH2" || $class=="JUNIOR-HIGH-SCH3"){
echo $secondary;
	}
else{echo $primary;
}
			
 }
	
}
else{$norec= "<div>Sorry no records found for your search</div>";
 }
}
else{echo "failed";
 }
		
}	 
?> 
            </tbody>             
          </table>           
          <?php echo "<H5>TOTAL NO. OF STUDENTS ENROLLED:$rows</h5>";?> 
          <?php echo $norec;?> 
          <?php echo $norec2;?> 
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
