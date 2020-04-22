<!DOCTYPE html>
<html>
<head>
	<title>client Sign UP</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

       <style>

	   label{
		   float: left;
		   width: 150px;
	   }
       	body{
			background-color:#DAF7A6;
			margin-left: 0px;
			margin-top: 0px;
			
		}
	</style>

</head>
<body>
	
	<div class="container">
	<form action="ClientSignUpConnection.php"  method="post">
              
		<h1>Enter Your Details</h1>
		<br class="mb-3">
		    <div>
			<label for="uname"><b>name:</b></label>
			<input type="text" placeholder="Name Here" id="uname" name="uname" required>
			</div>
			<br/>
			
            <div>
			<label for="password"><b>password:</b></label>
			<input type="password" id="password" name="password" required>
			</div>
			<br/>

            <div>
			<label for="uid"><b>ID:</b></label>
			<input type="text" id="uid" name="uid" required>
			</div>
			<br/>
            
			<div>
			<label for="uemail"><b>email:</b></label>
			<input type="email"id="uemail" name="uemail" required>
			</div>
			<br/>

            <div>
			<label for="uphone_no"><b>phone_no:</b></label>
			<input type="phoneCode"id="uphone_no" name="uphone_no" required>
			</div>
			<br/>

            <div>
			<label for="ucountry"><b>country:</b></label>
		    <input type="text"id="ucountry" name="ucountry" required>
			</div>
			<br/>
            
			<div>
			<label for="ucity"><b>city:</b></label>
			<input type="text"id="ucity" name="ucity" required>
			</div>
			<br/>
			
            <div>
			<label for="ucode"><b>zip_code:</b></label>
			<input type="text"id="ucode" name="ucode" required>
			</div>
			<br/>
			
            <div>
			<label for="ustatus"><b>status:</b></label>
			<input type="text"id="ustatus" name="ustatus" required>
			</div>
			<br/>

            <div>
			<label for="usname"><b>username:</b></label>
			<input type="text"id="usname" name="usname" required>
			</div>
			<br/>

            <div>
			<label for="udate"><b>create_date:</b></label>
			<input type="date"id="udate" name="udate" required>
			</div>
			<br/>
			
            <br class="mb-3">
	<input class="btn btn-primary" type="submit" name="create" value="Sign Up">

	
	</div>

</form>

<div class="container">
<form action="VERIFY.PHP"  method="post">

	<br class="mb-3">
    <input class="btn btn-primary" type="submit" name="login" value="login">

</form>
</div>

<div class="container">
	<form action="landing_page.php"  method="post">

	<br class="mb-3">
    <input class="btn btn-primary" type="submit" name="HOME" value="HOME">
</form>

	</div>

</body>
</html>