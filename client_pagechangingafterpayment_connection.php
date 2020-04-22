<?php
session_start();


$client_name=$_SESSION["client_name"];
$lawyer_name=$_SESSION["name1"];

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

$userquery="select * from appoinment where client_name='$client_name' AND lawyer_name='$lawyer_name' AND memberOfLawyer='yes'";
$returnvalue=$conn->query($userquery);
$rowcount=$returnvalue->rowCount();

if($rowcount==1){
	?>
	<script>
		window.location.assign("message.php");
	</script>
	<?php
}
else{
	?>
  <script>
		window.location.assign("message_hire.php");
	</script>
	<?php
}

?>