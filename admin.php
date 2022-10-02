<?php
session_start();
if (isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
  header('location:admin_view.php');
  return;
}
include('connect.php');
$invalid = "";
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST["login"])) {
  $username = test_input($_POST["username"]);
  $pw = test_input($_POST["pw"]);
  
  // $select = $con->query("select * from admin_login");
  // if ($select != false) {
  //   $rows = $select->num_rows;
  //   if ($rows > 0) {
  //     $result = $select->fetch_assoc();
  //     $in_user = $result["USERNAME"];
  //     $in_pass = $result["PASSWORD"];
  //     if ($in_pass == $pw && $in_user == $username) {
  //       $_SESSION["user"] = $username;
  //       $_SESSION["pass"] = $pw;
  //       header("location:admin_view.php");
  //     } else {
  //       $invalid = "<p class='bg-danger'>INVALID LOGIN DETAILS</p>";
  //     }
  //   }
  // }
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ELIXANDES ACADEMY, BRITISH INTERNATIONAL' STANDARD</title>
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
  <?php include('tophead.php'); ?>
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
      <div class="row">
        <div class="col-sm-5 col-sm-offset-3">
          <div class="coverform">
            <h1 class="portaltxt">ADMINISTRATOR</h1>
            <?php echo $invalid ?>
            <form method="post" role="form" class="" data-pg-collapsed>
              <div class="form-group">
                <label class="control-label mylabel2" for="exampleInputEmail1">USERNAME</label>
                <input type="text" class="form-control myinput2" required name="username">
              </div>
              <div class="form-group">
                <label class="control-label mylabel2" for="exampleInputPassword1">PASSWORD</label>
                <input type="password" class="form-control myinput2" required name="pw">
              </div>
              <button type="submit" class="btn" name="login" id="register">LOGIN</button>
            </form>
            <h5>USERNAME:webmaster_username <br><br> PASSWORD:webmaster_password</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
  <!-- end main -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
  <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
</body>

</html>