<?php
session_start();
$message="";

$username=$_SESSION["client_name"];


?><b>Client name:</b><?php echo $_SESSION["client_name"];?><br><br><?php

if( isset($_POST['submit']) ){
	$message=$_POST['message'];
	$_SESSION["message_store"]="$message";
	
}

$count=$_SESSION["count"];
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
$userquery= "select * from payment where client_name='$username' AND member_or_not='yes' ";
$returnvalue=$conn->query($userquery);
$rowcount=$returnvalue->rowCount();

if($rowcount==1){
	if( isset($_POST['submit']) ){
	?>
	    <script>
		
		window.location.assign("client_pagechangingafterpayment_connection.php");
		</script>
		<?php
	}
		else{
			?>
	    <script>
		
		window.location.assign("clientchat.php");
		</script>
		<?php
		}

}	
else{
	?>
	<button class="btn btn-primary" onclick="myFunction()">back</button>
	<?php
	if($count==1){
		?>
		<script>
     	function myFunction(){
     		window.location.assign("message.php");
     	}
	    window.alert("please be a member for getting our service");
	   </script>
		<?php
	}
	else{
		?>
		<script>
     	function myFunction(){
     		window.location.assign("message_hire.php");
     	}
	    window.alert("please be a member for getting our service");
	   </script>

		<?php
	}
     ?>
	<button class="btn btn-primary" onclick="yourFunction()">be a member</button>
     <script>
     	function yourFunction(){
     		window.location.assign("client_payment.php");
     	}
	</script>

	<button class="btn btn-primary" onclick="logoutFunction()">LOGOUT</button>
     <script>
     	function logoutFunction(){
     		window.location.assign("client_logout.php");
     	}
	</script>
	<?php
}
?>