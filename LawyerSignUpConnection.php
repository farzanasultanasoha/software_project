<?php
header('location:LawyerSignUpPage.php');
///initializing
$name=$password=$id=$email=$phone_no=$expert=$psession=$ptotal=$username=$age=$country=$city=$zip_code=$create_date=$image="";

///receiving username data from the login page and setting the value to $username variable
if(isset($_POST['Sign_Up'])){
       	 $name=$_POST['lname'];
       	 $password=$_POST['lpass'];
       	 $id=$_POST['lid'];
       	 $email=$_POST['lemail'];
       	 $phone_no=$_POST['lphone_no'];
       	 $expert=$_POST['lexpert'];
       	 $psession=$_POST['lpsession'];
       	 $ptotal=$_POST['lptotal'];
       	 $username=$_POST['lsname'];
       	 $age=$_POST['lage'];
       	 $country=$_POST['lcountry'];
       	 $city=$_POST['lcity'];
       	 $zip_code=$_POST['lcode'];
       	 $create_date=$_POST['ldate'];
       	 $image=$_POST['picture'];

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
$sql1="INSERT INTO  lawyer_info (name,lawyer_id,email,quantity,expert,creation_date,username,price_per_session,age,images,phone_no,password,country,city,zip_code,price_total) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 $statinsert=$conn->prepare($sql1);
 $result=$statinsert->execute([$name,$id,$email,0,$expert,$create_date,$username,$psession,$age,$image,$phone_no,$password,$country,$city,$zip_code,$ptotal]);
if($result){
	echo "successfully saved";
}
else{
	echo"there were problem saving data";
}


?>