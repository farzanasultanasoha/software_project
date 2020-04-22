<?php
session_start();
$lawyer_name=$_SESSION["name1"];
$client_name=$_SESSION["client_name"];



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


 $sql1 = "SELECT * FROM messaging where lawyer_name='$lawyer_name' and client_name='$client_name' ORDER BY message_id DESC";
 $returnvalue = $conn->query($sql1);
 $table = $returnvalue->fetchAll();
 ///extracting only the table(2D array) from the return value
 
 for($i=0; $i<count($table); $i++){
    $row=$table[$i];
    if($row[7]=='c10'){
	echo "<span class='client_name'>".$row[4]."</span>: <span class='msg'>". $row['message'] ."</span><br>";
	}
	else if($row[7]=='l10'){
	   
		echo "<span class='name1'>".$row[5]."</span>: <span class='msg'>". $row['message'] ."</span><br>";
	}
 }

?>
