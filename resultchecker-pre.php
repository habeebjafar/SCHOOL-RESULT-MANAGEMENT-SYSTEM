<?php
$invalidcre1="";	
$invalidcre2="";	
$invalidcre3="";			  
if(isset($_POST["checkresult"])){
include('connect.php');
$regno=$_POST["regno"];
$class=$_POST["class"];
$term=$_POST["term"];
$sessions=$_POST["sessions"];
$pin=$_POST["pin"];
if($sessions=="2017/2018"){
 if($term=="first"){
$select=$con->query("select  *from result_pri where CLASS='$class' && ADM_NO='$regno' && PIN='$pin' && TERM='$term'");
if($select!=false){
$rows=$select->num_rows;
if($rows>0){
$result=$select->fetch_assoc();
$collectclass=$result["CLASS"];
$collectadm_no=$result["ADM_NO"];
$collectpin=$result["PIN"];
$collectterm=$result["TERM"];
setcookie("pin",$collectpin,time()+(86400*30),"/");
setcookie("reg",$collectadm_no,time()+(86400*30),"/");
setcookie("class",$collectclass,time()+(86400*30),"/");
setcookie("term",$collectterm,time()+(86400*30),"/");
header("location:resultview_pri.php");	

}//closerows

else{
	$invalidcre1="Sorry you supplied invalid credentials try again";
	}
}//closeselect
else{echo "cant select database";}				
}
else if($term=="second"){
$select=$con->query("select *from result_pri_second where CLASS='$class' && ADM_NO='$regno' && PIN='$pin' && TERM='$term'");
if($select!=false){
$rows=$select->num_rows;
$result=$select->fetch_assoc();
$collectclass=$result["CLASS"];
$collectadm_no=$result["ADM_NO"];
$collectpin=$result["PIN"];
$collectterm=$result["TERM"];
if($collectadm_no==$regno && $collectclass==$class && $collectpin==$pin && $collectterm==$term){
setcookie("pin",$pin,time()+(86400*30),"/");
setcookie("reg",$regno,time()+(86400*30),"/");
setcookie("class",$class,time()+(86400*30),"/");
setcookie("term",$collectterm,time()+(86400*30),"/");		
header("location:resultview_pri.php");
}
else{ 

	 $invalidcre2="Sorry you supplied invalid credentials try again";
	 	}
	}
	else{
		 echo "failed to select database";	
		 }
				
}
else if($term=="third"){
$select=$con->query("select CLASS,ADM_NO,PIN,TERM from result_pri_third where CLASS='$class' && ADM_NO='$regno' && PIN='$pin' && TERM='$term'");
if($select!=false){
$rows=$select->num_rows;
$result=$select->fetch_assoc();
$collectclass=$result["CLASS"];
$collectadm_no=$result["ADM_NO"];
$collectpin=$result["PIN"];
$collectterm=$result["TERM"];
if($collectadm_no==$regno && $collectclass==$class && $collectpin==$pin && $collectterm==$term){
setcookie("pin",$pin,time()+(86400*30),"/");
setcookie("reg",$regno,time()+(86400*30),"/");
setcookie("class",$class,time()+(86400*30),"/");
setcookie("term",$collectterm,time()+(86400*30),"/");		
header("location:resultview_pri.php");
}
else{ 
	$invalidcre3="Sorry you supplied invalid credentials try again";	
	}
	}//end of select
	else{
		 echo "failed to select database";	
		 }
  }//enf of third term
 }//end ofsession		
				
}//ifissetbitton
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>ELIXANDES ACADEMY BRITISH INT' STANDARD</title>     
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
              <h1 class="resultcheckertxt">RESULT CHECKER</h1>   
              <p class="errorpin"><?php echo $invalidcre1;?></p>
              <p class="errorpin"><?php echo $invalidcre2;?></p>
              <p class="errorpin"><?php echo $invalidcre3;?></p> 
              <div class="holderror" data-pg-collapsed> 
              </div>               
              <div class="panel-group" id="panels1"> 
                <div class="panel panel-default mypanel">                    
                  <div id="collapse1" class="panel-collapse collapse in"> 
                    <form method="post" role="form" class="" data-pg-collapsed> 
                      <div class="form-group" data-pg-collapsed> 
                        <label class="control-label mylabel2" for="exampleInputPassword1">REG NO.</label>                         
                        <input type="text" class="form-control myinput2" required name="regno" placeholder="Enter your registration no. here"> 
                      </div>                       
                      <div class="form-group" data-pg-collapsed> 
                        <label class="control-label mylabel2" for="exampleInputPassword1">ACCESS PIN</label>                         
                        <input type="text" class="form-control myinput2" required name="pin"> 
                      </div>                       
                      <div class="form-group"> 
                        <label class="control-label mylabel2" for="formInput4">SESSION</label>                         
                        <select id="formInput4" class="form-control" name="sessions"> 
                          <option value="2017/2018">2017/2018</option>                           
                          <option></option>                           
                        </select>                         
                      </div>                       
                      <div class="form-group"> 
                        <label class="control-label mylabel2" for="formInput4">CLASS</label>                         
                        <select id="formInput4" class="form-control" name="class"> 
                          <option value="TODDLER">TODDLER</option>                           
                          <option value="CRECHE">CRECHE</option> 
                          <option value="PRE-SCH1">PRE-SCH1</option>                           
                          <option value="PRE-SCH2">PRE-SCH2</option>                           
                          <option value="PRE-SCH3">PRE-SCH3</option>                           
                          <option value="BASIC 1">BASIC 1</option>                           
                          <option value="BASIC 2">BASIC 2</option>                           
                          <option value="BASIC 3">BASIC 3</option>                           
                          <option value="BASIC 4">BASIC 4</option>                           
                          <option value="BASIC 5">BASIC 5</option>                                      
                        </select>                         
                      </div>                       
                      <div class="form-group"> 
                        <label class="control-label mylabel2" for="formInput4">TERM</label>                         
                        <select id="formInput4" class="form-control" name="term"> 
                          <option value="first">FIRST TERM</option>                           
                          <option value="second">SECOND TERM</option>                           
                          <option value="third">THIRD TERM</option>                           
                        </select>                         
                      </div>                       
                      <button type="submit" class="btn" name="checkresult" id="register">SUBMIT</button>                       
                    </form>                     
                  </div>                   
                </div>                                  
              </div>               
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
