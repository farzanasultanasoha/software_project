<?php
session_start();

$client_name=$_SESSION["client_name"];
$lawyer_name=$_SESSION["name1"];


///initializing
$membership_date="";

//defining
/*if(isset($_POST['hire'])){
	$membership_date=$_POST('membership_date');

}*/

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
$sql1="INSERT INTO  payment (amount,client_name,lawyer_name,member_or_not,id,membership_date) VALUES(?,?,?,?,?,?)";
$statinsert1=$conn->prepare($sql1);
$result1=$statinsert1->execute([300,$client_name,$lawyer_name,yes,"",$membership_date]);


 ///$sql="UPDATE payment SET member_or_not='yes' where client_name='$client_name' AND lawyer_name='$lawyer_name;";
 ///$statinsert=$conn->prepare($sql);


	?>
	<script>
	window.location.assign("client_pagechangingafterpayment_connection.php");
	</script>
	<?php

?>