
<!DOCTYPE html>
<html>
<head>
	<style>

	label{
		width: 150px;
		float: left;

	}
		
		#container {
			position: relative;
			max-width: 700px;
			padding: 6px;
			background: rgba(255,255,255,.5);
			box-shadow: 0 5px 15px rgba(0,0,0,.5);

		}

		#container h1{
		margin: 0 0 10px;
		padding: 0;
		font-size: 38px;
		text-transform: uppercase;
		color:maroon;
		}
		#container h2{
		margin: 0 0 10px;
		padding: 0;
		font-size: 28px;
		text-transform: uppercase;
		color:	saddlebrown;
		}
        
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		section{
			padding: 0 450px;
			background: url('pictures/payment.jpg');
			
			height: 100vh;
			
			align-items: center;
			
		}

	</style>
	<title>LockLawyer</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<section>
	<div id="container">
	<h1>LockLawyer</h1>
	<p><b>We provide top level legal services for businesses and individuals. Our expert lawyers and counselors hold the highest legal certifications and have years of experience dealing with legal inquiries. They are available 24 hours to provide you with the legal service you need. They will make sure you understand the legal implications of your circumstances and that your rights are being protected. Read expert profiles and find the right legal expert for you.</p>
	<h1>Need any legal help</h1>
	<h2>you are in the right place</h2>
	<form action="VERIFY.php"  method="post">
	        <div>
			<label for="username"><b>Username: </b></label><input type="text" placeholder="User Name Here" id="uname" name="uname">
			</div>
            <br/>
			<div>
			<label for="password"><b>Password: </b></label><input type="password" id="pass" name="pass">
			</div>
			<br/>
			

	<input class="btn btn-success" type="submit" name="login" value="login">
	</form>

 <br>
 
 <button class="btn btn-danger" onclick="logoutFunction()">LOGOUT</button>
     <script>
     	function logoutFunction(){
     		window.location.assign("client_logout.php");
     	}
	</script>

	<button class="btn btn-success" onclick="myFunction()">User Sign Up</button>
     <script>
     	function myFunction(){

     		window.location.assign("ClientSignUpPage.php");
     	}
     </script>
    <br/>
	<br/>
    
    
     <button class="btn btn-success" onclick="yourFunction()">As a lawyer</button>
     <script>
     	function yourFunction(){
     		window.location.assign("LawyerSignUpPage.php");
     	}
     </script>
     <br/>
     
 </div>
	</section>
</body>
</html>