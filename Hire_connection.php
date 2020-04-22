<?php
session_start();


$client_name=$_SESSION["client_name"];
$lawyer_name=$_SESSION["name1"];



///initializing
$membership_date="";

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


$sql1="INSERT INTO  appoinment (serial_num,amount,date1,client_name,lawyer_name,memberOfLawyer) VALUES(?,?,?,?,?,?)";
$statinsert1=$conn->prepare($sql1);
$result1=$statinsert1->execute(["",100,$membership_date,$client_name,$lawyer_name,'yes']);

	
$sql2="UPDATE lawyer_info SET quantity=quantity + 1 where username='$lawyer_name'";
$update_law_info=$conn->query($sql2);


?>
<script>
window.location.assign("client_pagechangingafterpayment_connection.php");
</script>
<?php

?>