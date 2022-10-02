<?php
$term=$class=$bsheet="";
session_start();
if(!isset($_SESSION["user"])&&!isset($_SESSION["pass"])){
die("<a href='admin.php'>ACCESS DENIED FOR USER,PLEASE GO BACK TO MAIN SITE</a>");
}
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>ELIXANDES ACADEMY</title>     
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
    <link href="print.css" rel="stylesheet" media="print" type="text/css"/> 
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
      <h5 class="centh5"><span class=""><a href="resultentry.php"><i class="fa fa-plus-circle"></i> ADD NEW RESULT HERE</a><span class=""><a href="view2_bsheet.php" class="highsch basic"><i class="fa fa-print"></i> BROADSHEET-TODDLER/CRECHE/PRE-SCH/BASIC</a><span class=""><a href="view_bsheet.php" class="overv"><i class="fa fa-print"></i> BROADSHEET-HIGH SCHOOL</a></h5> 
        <div class="searchdiv"> 
          <form role="form" class="" data-pg-collapsed method="post"> 
            <div class="row"> 
              <div class="col-sm-3"> 
                <div class="form-group"> 
                  <label class="control-label formlbl" for="exampleInputEmail1">ACADEMIC SESSION</label>                   
                  <select id="formInput20" class="form-control" name="aca_session"> 
                    <option value="select">SELECT</option>                     
                    <option value="2017/2018">2017/2018</option>                     
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
                    <option value="select">SELECT</option>
                    <option value="CRECHE">CRECHE</option>                     
                    <option value="TODDLER">TODDLER</option>                     
                    <option value="PRE-SCH1">PRE SCHOOL1</option>                     
                    <option value="PRE-SCH2">PRE SCHOOL2</option>                     
                    <option value="PRE-SCH3">PRE SCHOOL3</option>                     
                    <option value="BASIC 1">BASIC1</option>                     
                    <option value="BASIC 2">BASIC2</option>                     
                    <option value="BASIC 3">BASIC3</option>                     
                    <option value="BASIC 4">BASIC4</option>                     
                    <option value="BASIC 5">BASIC5</option>                                            
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
<div class=""> 
            <h5><center> 
                <strong>KEYS TO SUBJECTS</strong> 
              </center></h5> 
            <div class="row" data-pg-collapsed> 
              <div class="col-xs-3"> 
                <table class="table table-striped table-bordered table-condensed"> 
                  <tbody> 
                    <tr> 
                      <td>C</td> 
                      <td>C.R.S</td> 
                    </tr>                     
                    <tr> 
                      <td>M</td> 
                      <td>MATHEMATICS</td> 
                    </tr>                     
                    <tr> 
                      <td>BS</td> 
                      <td>BASIC SCIENCE</td> 
                    </tr>  
					<tr> 
                      <td>PE</td> 
                      <td>P.H.E</td> 
                    </tr>  
					<tr> 
                      <td>POS</td> 
                      <td>POSITION</td> 
                    </tr>                     
                  </tbody>                   
                </table>                 
              </div>               
              <div class="col-xs-3"> 
                <table class="table table-striped table-bordered table-condensed"> 
                  <tbody> 
                    <tr> 
                      <td>EN</td> 
                      <td>ENGLISH LANGUAGE</td> 
                    </tr>                     
                    <tr> 
                      <td>P</td> 
                      <td>POEM/CIVIC</td> 
                    </tr>                     
                    <tr> 
                      <td>H</td> 
                      <td>HABIT/VOCATIONAL-STDY</td> 
                    </tr>  
					<tr> 
                      <td>CP</td> 
                      <td>COMPUTER</td> 
                    </tr>                     
                  </tbody>                   
                </table>                 
              </div>               
              <div class="col-xs-3"> 
                <table class="table table-striped table-bordered table-condensed"> 
                  <tbody class=""> 
                    <tr> 
                      <td>S</td> 
                      <td>SOCIAL STUDIES</td> 
                    </tr>                     
                    <tr> 
                      <td>H.E</td> 
                      <td>HOME ECONS</td> 
                    </tr>  
					<tr> 
                      <td>F.A</td> 
                      <td>FINE ART</td> 
                    </tr>  
					<tr> 
                      <td>AG</td> 
                      <td>AGRIC</td> 
                    </tr>                       
                  </tbody>                   
                </table>                 
              </div> 
			  <div class="col-xs-3"> 
                <table class="table table-striped table-bordered table-condensed"> 
                  <tbody class=""> 
                    <tr> 
                      <td>V.R</td> 
                      <td>VERBAL REASONING</td> 
                    </tr>                     
                    <tr> 
                      <td>Q.R</td> 
                      <td>QUANTITATIVE REASONING</td> 
                    </tr>  
					<tr> 
                      <td>PN</td> 
                      <td>PHONICS</td> 
                    </tr>
                    <tr>   
                      <td>FR</td> 
                      <td>FRENCH</td> 
                    </tr>                       
                  </tbody>                   
                </table>                 
              </div>                         
            </div>             
          </div>             
<div class="table-responsive holdrecords"> 
 <table class="table table-striped table-bordered table-hover bg-success table-condensed contentmarks"> 
            <thead> 
              <tr> 
                <th>NO.</th> 
                <th>REG NO.</th> 
                <th>SURNAME</th> 
                <th>OTHER NAME</th> 
                <th>SEX</th> 
                <th>C</th> 
                <th>M</th> 
                <th>BS</th> 
                <th>EN</th> 
                <th>P</th> 
                <th>H</th> 
                 <th>S</th> 
                 <th>P.E</th> 
                <th>CP</th> 
                <th>H.E</th> 
                <th>F.A</th> 
                <th>A.G</th>
                <th>V.R</th> 
                <th>Q.R</th> 
                <th>PN</th> 
                <th>F.R</th> 
                <th>TOTAL</th> 
                <th>% PASS</th> 
                <th>POS</th> 
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
}//end of third term
}//end of session

if($select!=FALSE){			
$rows=$select->num_rows;
if($rows>0){
echo"<h4 class='showcat'>ELIXANDES ACADEMY /$session / $term term / $class</h4>";
$x=0;
while($result=$select->fetch_assoc()){
$x=$x+1;
extract($result);
$percent=$result["OVERALL_PERCENT"];
$percent=round($percent,2);
echo "<tr data-pg-collapsed><td>$x</td><td>$ADM_NO</td> <td>$FNAME</td><td>$LNAME</td><td>$SEX</td><td>$CRS_T</td><td>$MATHS_T</td> <td>$BSC_T</td><td>$ENG_T</td><td>$WR_T</td><td>$HAB_T</td><td>$SOS_T</td><td>$PHE_T</td> <td>$COMP_T</td><td>$HE_T</td><td>$FA_T</td><td>$AGR_T</td>
<td>$VR_T</td><td>$QR_T</td><td>$FO_T</td><td>$FR_T</td><td>$TOTAL_SCORE</td><td> $percent</td><td>$POSITION</td></tr>";			
 }
	
}
else{$norec= "<div>Sorry no records found for your search</div>";
 }
}
//else{echo "ERROR";}
		
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
