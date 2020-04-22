<?php
session_start();

$_SESSION["member"]=1;
$services=isset($_GET['services']) ? $_GET['services'] : '';
echo $services;
if(isset($_SESSION['client_name']))
	{?><b>Client name:</b><?php echo $_SESSION["client_name"];}
?><br><br>
<?php

if(isset($_SESSION['name1'])){?><b>LAWYER NAME: </b><?php echo $_SESSION["name1"];


?><br>
<br>
<!DOCTYPE html>
<html>
<head>

       <title>messaging</title>
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

       <style>
       	body{
			background-color:#DAF7A6;
			margin-left: 250px;
			margin-top: 20px;
			
		}

       	*{margin: 0px;padding: 0px; }
       	#main_msg_box{border: 1px solid black; width: 440px; height: 300px; margin: 24px auto;}
       </style>
</head>
<body>
      <b>Message</b>

      <div id="main_msg_box">
      
      <form action="membership_connection.php" method="post">
      	<input type="text" name="message" style="width: 430px; border: 1px solid black; height: 220px;" placeholder="type your message" required>
      	<input class="btn btn-primary" type="submit" name="submit"style="width:60px; height: 50px;" value="SEND">
      </form>
  </div>
   
   <button class="btn btn-primary" onclick="myFunction()">back</button>
   
	   <script>
     	function myFunction(){
     		window.location.assign("listOfLawyer.php");
     	}   
     </script> 
   
<?php
echo '<a href="logout.php">log out</a>';
?><br>
<?php
echo '<a href="membership_connection.php">chat</a>';


}

?>
</body>
</html>