<?php
session_start();
date_default_timezone_set("Africa/Lagos");
if(isset($_SESSION["pin"])&& isset($_SESSION["regno"])){
$pin=$_SESSION["pin"];
$regno=$_SESSION["regno"];
	}
else{
 header("location:portal.php");
	}

function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
  }
  
include('connect.php');
$e_insert="";
$e_insert2="";
$filesize_error="";
$filesize_error=$address=$age=$dob=$nationality=$othername=$parentmobile=$parentname=$parentoccupation=$ac_sessions=$surname="";

if(isset($_POST["register"])){
$file_name=$_FILES["pics"]["name"];
$file_temporaryname=$_FILES["pics"]["tmp_name"];
$file_type=$_FILES["pics"]["type"];
$file_size=$_FILES["pics"]["size"];
if($file_size>200000){$filesize_error="<p class='bg-danger'>size must not be greater than 100kb</p>";}
$surname=test_input($_POST["surname"]); 
$othername=test_input($_POST["othername"]); 
$sex=$_POST["sex"];
$dob=$_POST["dob"]; 
$genotype=$_POST["genotype"];
$age=$_POST["age"];
$ac_sessions=$_POST["ac_sessions"]; 
$parentname=test_input($_POST["parentname"]); 
$parentmobile=test_input($_POST["parentmobile"]); 
$parentoccupation=test_input($_POST["parentoccupation"]); 
$nationality=test_input($_POST["nationality"]); 
$classes=$_POST["classes"]; 
$address=test_input($_POST["address"]); 
$dates=date("Y/m/d h:i:s");
					
if($surname=="" || $othername=="" || $dob=="" || $age==""  || $parentname=="" || $parentmobile=="" || $nationality=="" || $address=="" || $sex=="SELECT" ||  $classes=="SELECT" || $file_size>200000){
  $e_insert2="<div  id='infos' class='bg-info'>REGISTRATION FAILED, PLEASE FILL ALL REQUIRED FIELDS CORRECTLY.</div>";		
}
else{
	move_uploaded_file($file_temporaryname,"uploads/".$file_name);
    $image="uploads/".$file_name;
$insert=$con->query("insert into student_bio_18 (PIN,REG,SURNAME,OTHERNAME,SEX,DOB,GENOTYPE,AGE,ACA_SESSION,PARENT_NAME,PARENT_MOBILE,NATIONALITY,
ENTRY_CLASS,PARENT_ADDRESS,PARENT_OCCUPATION,PICS,ENTRY_DATE) values('$pin','$regno','$surname','$othername','$sex','$dob','$genotype',
'$age','$ac_sessions','$parentname','$parentmobile','$nationality','$classes','$address','$parentoccupation','$image','$dates')");

if($insert==false){
	$e_insert="<div id='infos' class='bg-info'>THIS REGISTRATION NO: $regno. HAS BEEN USED BEFORE</div>" . $con->error;
 	}
 else{
$id=$con->insert_id;
$_SESSION["key"]=$id;
mail("jafarharun7@gmail.com","srms","new user");
//setcookie("key",$id,time()+(86400*30),"/");
//echo $file_type;
header("location:registration-slip.php");
	}
}	

				   
}
else{
	//exit("access denied!");
}	
?> 
<!DOCTYPE HTML> 
<html lang="en"> 
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>ONLINE REGISTRATION </title>     
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
    <style>
      #infos{
    width:100%;
    }
    #bck{
    background-color:#3B3B3B;
    color:white;
    padding-bottom:9px;
    padding-left:15px;
    padding-right:15px;
    padding-top:9px;
    text-align:center;
    text-decoration:none;
    font-family:oswald;
    font-size:12px;
    position:relative;
    bottom:-2px
    }

</style>     
  </head>   
  <body class=""> 
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
      <div class="container"> 
        <div class="regform"> 
          <p class="showpin instruct">ALL FIELDS ARE MANDATORY</p> 
          <?php echo $e_insert2;?> 
          <?php echo $e_insert;?> 
          <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">REGISTRATION NUMBER</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="regno" value="<?php echo $regno;?>" readonly> 
                </div>                 
              </div>               
              <div class="col-sm-5 "> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">ENTER PIN</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="pin" value="<?php echo $pin;?>" readonly> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">SURNAME</label>                   
                  <input type="text" class="form-control" id="formInput15" name="surname" required value="<?php echo $surname?>"> 
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">OTHER NAMES</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="othername" value="<?php echo $othername?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">SEX</label>                   
                  <select id="formInput18" class="form-control" name="sex"> 
                    <option value="SELECT">SELECT</option>                     
                    <option value="MALE">MALE</option>                     
                    <option value="FEMALE">FEMALE</option>                     
                  </select>                   
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">DATE OF BIRTH</label>                   
                  <input type="date" class="form-control" id="formInput15" required placeholder="E.g  01/25/2000" name="dob" value="<?php echo $dob?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput18">GENOTYPE</label>                   
                  <select id="formInput18" class="form-control" name="genotype"> 
                    <option value="SELECT">SELECT</option>                     
                    <option value="AA">AA</option>                     
                    <option value="AS">AS</option>                     
                    <option value="SS">SS</option>                     
                  </select>                   
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">AGE</label>                   
                  <input type="number" class="form-control" id="formInput15" required name="age" value="<?php echo $age?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput11">ACADEMIC SESSION</label>                   
                  <select id="formInput11" class="form-control" name="ac_sessions"> 
                    <option value="2018/2019">2018/2019</option>                     
                  </select>
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">PARENT/GUARDIAN NAME</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="parentname" value="<?php echo $parentname?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput21">PARENTS/GUARDIAN PHONE NO.</label>                   
                  <input type="text" class="form-control" id="formInput21" required name="parentmobile" value="<?php echo $parentmobile?>"> 
                </div>                 
              </div>               
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput15">PARENTS/GUARDIAN OCCUPATION</label>                   
                  <input type="text" class="form-control" id="formInput15" required name="parentoccupation" value="<?php echo $parentoccupation?>"> 
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput21">NATIONALITY</label>                   
                  <input type="text" class="form-control" id="formInput21" required name="nationality" value="<?php echo $nationality?>"> 
                </div>                 
              </div>               
              <div class="col-sm-5" data-pg-collapsed> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput4">ENTRY CLASS</label>                   
                  <select id="formInput4" class="form-control" name="classes" value="<?php echo $classes?>"> 
                    <option class="hidden" value="SELECT">SELECT</option>                     
                    <option class="hidden" value="TODDLER">TODDLER</option>                     
                    <option class="hidden" value="CRECHE">CRECHE</option>                     
                    <option class="hidden" value="PRE-SCH1">PRE-SCH1</option>                     
                    <option class="hidden" value="PRE-SCH2">PRE-SCH2</option>                     
                    <option class="hidden" value="PRE-SCH3">PRE-SCH3</option>                     
                    <option class="hidden" value="BASIC 1">BASIC 1</option>                     
                    <option class="hidden" value="BASIC 2">BASIC 2</option>                     
                    <option class="hidden" value="BASIC 3">BASIC 3</option>                     
                    <option class="hidden" value="BASIC 4">BASIC 4</option>                     
                    <option class="hidden" value="BASIC 5">BASIC 5</option>                     
                    <option value="JUNIOR-HIGH-SCH1">JUNIOR HIGH SCH 1</option>                     
                    <option value="JUNIOR-HIGH-SCH2">JUNIOR HIGH SCH 2</option>                     
                    <option value="JUNIOR-HIGH-SCH3">JUNIOR HIGH SCH 3</option>                     
                  </select>                   
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput7">PARENTS/GUARDIAN ADDRESS</label>                   
                  <textarea class="form-control" rows="3" id="formInput7" name="address"></textarea>                   
                </div>                 
              </div>
              <div class="col-sm-5"> 
                <div class="form-group"> 
                  <label class="control-label" for="formInput8">OPTIONAL-UPLOAD PASSPORT (MAX SIZE:200KB, TYPE:jpeg/png)</label>
                  <input type="file" class="form-control" id="uploadpic" name="pics" onchange="readURL(this);">
                  <?php echo $filesize_error;?>
                </div>
                <div class="coverphoto">
                  <img width="100%" id="prev" />
                </div>                 
              </div>               
            </div>             
            <div class="row"> 
              <div class="col-sm-5 col-sm-offset-1"> 
                <button type="submit" class="btn" name="register">REGISTER</button>                 
                <button type="reset" class="btn" id="reset">RESET</button>
                <span> <a href="open-portal.php" id="bck">GO BACK</a></span> 
              </div>               
            </div>             
          </form>           
        </div>         
      </div>       
    </div>     
    <!-- end main -->     
    <script type="text/javascript" src="js/jquery.min.js"></script>     
    <script type="text/javascript" src="js/bootstrap.js"></script>     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>     
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>     
    <script type="text/javascript">

  function readURL(input){
		if(input.files && input.files[0]){
		var reader=new FileReader();
reader.onload=function(e){
	$('#prev').attr('src', e.target.result);
	$('#prev').show();
}
reader.readAsDataURL(input.files[0]);		
		}
		
var filename=$("#uploadpic").val();
	//var allowed_extensions = new Array("jpg","png","gif");
	var file_extension = filename.split('.').pop().toLowerCase();
	
var file_extension1 = filename.split('.');
var file_extension2 = file_extension1[1];
	 
if(file_extension!="jpg" ||file_extension2!="jpg"){
window.location.assign("nofile.html") }
else if (file_extension2!="jpg"){
window.location.assign("nofile.html")}		
		else{
			
			//window.location.assign("nofile.html")
			
		}		
	}
</script>     
  </body>   
</html>
