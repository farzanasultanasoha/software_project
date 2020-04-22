<?php
session_start();
///initializing
$username=$password="";

///receiving username data from the login page and setting the value to $username variable
if( isset($_POST['uname']) ){
	$username=$_POST['uname'];
}

///receiving password data from the login page and setting the value to $password variable
if( isset($_POST['pass']) ){
	$password=$_POST['pass'];
}

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
$userquery= "select * from lawyer_info where username='$username' AND password='$password' ";
$returnvalue=$conn->query($userquery);
$rowcount=$returnvalue->rowCount();

if($rowcount==1){
	$_SESSION["lawyer_name"]="$username";
	
	?>
	<script>
	window.location.assign("Lawyerentry.php");
	</script>
	<?php
}	
else{
	?>
	<script>
	window.location.assign("lawyerSignUpPage.php");
	</script>
	<?php
}
?>