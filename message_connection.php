<?php
session_start();
$count=$_SESSION["count"];
if($count==1){
	header('location:message.php');
}
else{
	header('location:message_hire.php');
}

$message=$_SESSION["message_store"];

$client_name=$_SESSION["client_name"];
?><b>Client name:</b><?php echo $_SESSION["client_name"];?><br><br><?php

$lawyer_name=$_SESSION["name1"];
if(isset($_SESSION['name1'])){?><b>LAWYER NAME: </b><?php echo $_SESSION["name1"];}


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


$sql="INSERT INTO messaging (id,message,client_name,lawyer_name) VALUES(?,?,?,?)";
 $statinsert=$conn->prepare($sql);
 $result=$statinsert->execute(["",$message,$client_name,$lawyer_name]);
if($result){
	echo "successfully saved";
}
else{
	echo"there were problem saving data";
}
?>