<?php
session_start();
$services=isset($_GET['services']) ? $_GET['services'] : '';
echo $services;
///$_SESSION["namee".$i]="$row[3]"
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<style>
			
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
		<img src="family.jpg" alt="Girl in a jacket" style="width:600px;height:300px;">
		<br>
		<br>

       <b>Client name:</b><?php echo $_SESSION["client_name"];?>

        <div id="container">
		<button class="btn btn-primary" onclick="myFunction()">back</button>
     <script>
     	function myFunction(){
     		window.location.assign("Cliententry.php");
     	}   
     </script>

     <button class="btn btn-primary" onclick="logoutFunction()">LOGOUT</button>
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
			$userquery = "SELECT * FROM lawyer_info WHERE expert='$services'";
			
			$returnvalue = $conn->query($userquery);
			///extracting only the table(2D array) from the return value
			$table = $returnvalue->fetchAll();
			
			///print_r($table);			
		?>
		
		<table id="table1">
<!--			showing the table headers 		-->
			<thead>
				<tr>
					<th>name</th>
					<th>expert</th>
					<th>quantity</th>
					<th>price_per_session</th>
					<th>image</th>
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
					
					<td><?php echo "<a href=message_hire_connection.php?name1=",$row[3],">$row[3]</a>" ?></td>
					<td><?php echo $row[2] ?></td>
					<td><?php echo $row[5] ?></td>
					<td><?php echo $row[10] ?></td>
					<td><img src="<?php echo $row[7] ?>"></td>
				</tr> 
				
				<?php
			}
				
			?>
			</tbody>
		</table>
		
		</div>
	</body>
</html>