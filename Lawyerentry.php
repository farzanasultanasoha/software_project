<?php
session_start();
$lawyer_name=$_SESSION["lawyer_name"];
?><b>lawyer name:</b><?php echo $_SESSION["lawyer_name"];

$_SESSION["member"]=2;
try{
	///trying to establish connection with the MySQL database server
	$conn = new PDO("mysql:host=localhost:3306;dbname=locklawyer;","root","");
	///setting errormode so that when error occurs it will give us an exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
	?>
		<script>
			window.alert("Database not connected");
		</script>
	<?php
}
$sql1="SELECT client_name FROM appoinment where memberOfLawyer='yes' AND lawyer_name='$lawyer_name'";
$returnvalue=$conn->query($sql1);
$table = $returnvalue->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		*{
	margin:0px;
	padding:0px;
}
		body{
			background-color:#DAF7A6;
			margin-left: 250px;
			margin-top: 20px;
			
		}

		#container ul{
			list-style: none;
		}

		#container ul li{
			background-color: transparent;
			width: 150px;
			border: 1px solid black;
			border-radius: 26px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			float: left;
			color: black;	
		}

		#container ul li:hover{
			background-color: #85C1E9;
		}

		#container ul ul{
			display: none;
		}
		#container ul li:hover> ul{
			display:block;
		} 
	</style>
	<title>legal_service</title>
	
</head>
<body>
	
	<div id="container">
	<ul>
		
		<li>APPOINTED CLIENT
			<ul>
                <?php
				for($i=0; $i<count($table); $i++){
					$row=$table[$i];
					?>
					
					<li><a href="lawyerchat.php"><?php echo $row[0];$_SESSION["name2"]="$row[0]"?></li><!--lawyer to client-->
					<?php
				}
				?>
			
			</ul>
		 	</li>
		<li><a href="lawyer_profile.php">Profile</li>

		<li><a href="logout.php">LOG OUT</li>

	</ul>
	</div>

</body>
</html>