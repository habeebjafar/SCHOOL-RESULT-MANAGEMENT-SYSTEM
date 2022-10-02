<head> 
    <!-- Bootstrap -->     
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> 
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />  
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
    <style>
	.mytd{
		padding:20px;
		
		}
    </style>
        
  </head>   



 <table class="table-bordered">
			  <thead>
              <th>SN</th>
			 
			  <th>P</th>
			  <thead/>
			  <tbody>
<?php
die('NOT ALLOWED');
//include('connect.php');
$x=1;

for($x=1;$x<=2;$x=$x+1){
	$randomnum=rand(1111111111,9999999999);
		$insert=$con->query("insert into ACCESS_PINS values('NULL','$randomnum')");
//echo $randomnum."<br>";
	}

		$select=$con->query("select *from ACCESS_PINS");
		if ($select==false){
			echo "failed";
			}
			$n=1000000;
			while($result=$select->fetch_assoc()){
				$pins=$result["PINS"];
			 // $id=$result["ID"];
			  $n=$n+1;
			 echo" 
			  <tr>
			  <td class='mytd'>$n</td>
			  
			  <td>$pins</td>
			  </tr>";
			 
				}
			
			 
			  
?>
 </tbody>
			  
			  
			  </table>
              
       