<?php
session_start();


$client_name=$_SESSION["client_name"];
?><b>Client name:</b><?php echo $_SESSION["client_name"];?><br><br><?php

$_SESSION["member"]=1;


?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<style>
       	body{
			background-color:#DAF7A6;
			margin-left: 0px;
			margin-top: 0px;
			
		}
			
			#table1{
				width: 100%;
			}
			
			#table1 th, #table1, #table1 td{
				border: 2px solid black;
				border-collapse: collapse;
				color: blue;
			}
			
			td img{
				width:100px;
				height:100px;
			}
			td{
				text-align: center;
			}
		</style>
	</head>
	
	<body>		
       
        <div id="container">
        <button class="btn btn-primary" onclick="backFunction()">BACK</button>
     <script>
     	function backFunction(){
     		window.location.assign("Cliententry.php");
     	}   
     </script>


     <button class="btn btn-primary" onclick="logoutFunction()">log out</button>
     <script>
     	function logoutFunction(){
     		window.location.assign("client_logout.php");
     	}   
     </script>

     <br>
     <br>

		<?php
		
			///database connection 
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
			
			/// data fetching
			$userquery = "SELECT lawyer_name FROM appoinment WHERE client_name='$client_name'";
			
			$returnvalue = $conn->query($userquery);
			///extracting only the table(2D array) from the return value
			$table = $returnvalue->fetchAll();
			
			///print_r($table);			
		?>
		
		<table id="table1">
<!--			showing the table headers 		-->
			<thead>
				<tr>
                    
					<th>LAWYER</th>
					<th>Action</th>
				</tr>
			</thead>
		
			<tbody>
			<?php
			///$table is a two dimensional array, first loop will return each row of the table
			$value=count($table);
			for($i=0; $i<count($table); $i++){
				$row=$table[$i];
				?>
				
				<tr>
					<td><?php echo $row[0];$_SESSION["namela"]="$row[0]" ?></td>
					<td><a href="membership_connection.php">chat</a></td>

					
				</tr> 
				
				<?php
			}
				
			?>
			</tbody>
		</table>
		
		</div>
	</body>
</html>