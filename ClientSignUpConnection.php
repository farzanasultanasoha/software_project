<?php

header('location:ClientSignUpPage.php');

///initializing
$name=$password=$id=$email=$phone_no=$country=$city=$zip_code=$status=$username=$create_date="";

///receiving username data from the login page and setting the value to $username variable
       if(isset($_POST['create'])){
       	 $name=$_POST['uname'];
       	 $password=$_POST['password'];
       	 $id=$_POST['uid'];
       	 $email=$_POST['uemail'];
       	 $phone_no=$_POST['uphone_no'];
       	 $country=$_POST['ucountry'];
       	 $city=$_POST['ucity'];
       	 $zip_code=$_POST['ucode'];
       	 $status=$_POST['ustatus'];
       	 $username=$_POST['usname'];
       	 $create_date=$_POST['udate'];

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


$userquery= "select * from user_info where username='$username' AND password='$password' ";
$returnvalue=$conn->query($userquery);
$rowcount=$returnvalue->rowCount();

if($rowcount==1){
	echo "duplicate data";
}
else{

	$sql="INSERT INTO  user_info (name,client_id,username,email,password,creation_date,phone_no,country,city,zip_code,status) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
 $statinsert=$conn->prepare($sql);
 $result=$statinsert->execute([$name,$id,$username,$email,$password,$create_date,$phone_no,$country,$city,$zip_code,$status]);
if($result){
	echo "successfully saved";
}
else{
	echo"there were problem saving data";
}

}	


?>