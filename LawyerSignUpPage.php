
<!DOCTYPE html>
<html>
<head>
	<title>LawyerEntry</title>
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
			<div class="row">
				<div class="col-md-6">
	<h1>Registration</h1>
	<form action="LawyerSignUpConnection.php" method="post">
	    <br class="mb-3">
		    
		    <div>
		    <label for="lname"><b>name:</b></label>
			<input type="text" placeholder="Name Here" id="lname" name="lname"required />
			</div>
			<br/>

            <div>
            <label for="lpass"><b>PASSWORD:</b></label>
			<input type="password" id="lpass" name="lpass"required />
			</div>
			<br/>

            <div>
			<label for="lid"><b>ID:</b></label>
		    <input type="text" id="lid" name="lid"required />
			</div>
			<br/>

            <div>
			<label for="lemail"><b>EMAIL:</b></label>
			<input type="email"id="lemail" name="lemail" required />
			</div>
			<br/>

			<div> 
			<label for="lphone_no"><b>PHONE_NO:</b></label>
			<input type="phoneCode"id="lphone_no" name="lphone_no"required />
			</div>
			<br/>
            
			<div>
            <label for="lexpert"><b>expert:</b></label>
            	<select name="lexpert" id="lexpert">
            		<option>family</option>
            		<option>criminal</option>
            		<option>personal injury</option>
            		<option>business</option>
            		<option>estate planning</option>
            		<option>constitutional</option>
            		<option>environmental</option>
            		<option>immigration</option>
            		<option>tax</option>
            		<option>real estate</option>
            	</select>
				</div>
			<br/>
            
			<div>
			<label for="lpsession"><b>PRICE_PER_SESSION:</b></label>
			<input type="text"id="lpsession" name="lpsession"required />
			</div>
			<br/>
            
			<div>
			<label for="lptotal"><b>PRICE_TOTAL:</b></label>
		    <input type="text"id="lptotal" name="lptotal"required />
			</div>
			<br/>
 
            <div>
			<label for="lsname"><b>USERNAME:</b></label>
			<input type="text"id="lsname" name="lsname"required />
			</div>
			<br/>
 
            <div>
			<label for="lcountry"><b>COUNTRY:</b></label>
		    <input type="text"id="lcountry" name="lcountry" required>
			</div>
			<br/>

            <div>
			<label for="lcity"><b>CITY:</b></label>
			<input type="text"id="lcity" name="lcity" required>
			</div>
			<br/>
			
            <div>
			<label for="lcode"><b>ZIP_CODE:</b></label>
			<input type="text"id="lcode" name="lcode" required>
            </div>
			<br/>
            
			<div>
			<label for="lage"><b>AGE:</b></label>
			<input type="text"id="lage" name="lage" required>
			</div>
			<br/>
            
			<div>
			<label for="ldate"><b>CREATE_DATE</b></label>
			<input type="date"id="ldate" name="ldate" required />
			</div>
			<br/>
            
			
			<b>image:</b><input type="file" name="picture" required />
			<br/>
			<br class="mb-3">
         
	<input class="btn btn-primary" type="submit" name="Sign_Up" value="Sign Up">
    <br/>

	</form>
	</div>
    <div class="col-md-6">
    	<h2>login here</h2>
	<form action="LawyerVerify.php"  method="post">

	<div>    
	<label for="uname"><b>Username:</b></label>
	<input type="text" placeholder="User Name Here" id="uname" name="uname">
	</div>
	<br/>

	<div>
    <label for="pass"><b>Password:</b></label>
	<input type="password" id="pass" name="pass">
	</div>
	<br/>
     
	<br class="mb-3">
    <input class="btn btn-primary" type="submit" name="login" value="login">
</form>

	</div>

	<div class="col-md-6">
	<form action="landing_page.php"  method="post">

	<br class="mb-3">
    <input class="btn btn-primary" type="submit" name="HOME" value="HOME">
</form>

	</div>
	</div>
</div>

</body>
</html>