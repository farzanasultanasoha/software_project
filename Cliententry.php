<?php
session_start();
$services="";
?><b>Client name:</b><?php echo $_SESSION["client_name"];
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
		
		<li>SERVICES
			<ul>
				<li><a href="listOfLawyer.php?services=criminal">Criminal</a></li>

				<li><a href="listOfLawyer.php?services=family">Family lawyers</a></li>

				<li><a href="listOfLawyer.php?services=personal injury">Personal Injury Lawyers</a></li>

				<li><a href="listOfLawyer.php?services=business">Business lawyers</a></li>

				<li><a href="listOfLawyer.php?services=estate planning">Estate PLanning lawyers</a></li>

				<li><a href="listOfLawyer.php?services=constitutional">Constitutional lawyers</a></li>

				<li><a href="listOfLawyer.php?services=environmental">Environmental lawyers</a></li>

				<li><a href="listOfLawyer.php?services=immigration">Immigration lawyers</a></li>

				<li><a href="listOfLawyer.php?services=tax">Tax lawyers</a></li>

				<li><a href="listOfLawyer.php?services=real estate">Real estate lawyers</a></li>
			</ul>
		 	</li>
		<li><a href="client_profile.php">Profile</li>

		

		<li><a href="client_logout.php">LOG OUT</li>

	</ul>
	</div>

</body>
</html>