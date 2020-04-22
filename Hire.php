<!DOCTYPE html>
<html>
<head>
	<title>create mobile payment page design</title>
	<link rel="stylesheet" href="css/payment.css">
</head>
<body>
<form action="Hire_connection.php" method="post"> 
<div class="app-container">
	<div class="top-box">
	<p><span class="left-icon">&#x2190;</span>checkout<span class="right-icon">&#xb7;&#xb7;&#xb7;</span></p>
	</div>

	<div class="middle-box">
		<h1>100<span></span></h1>
	</div>

	<div class="bottom-box">
		<button type="button" class="payment-option-btn">pay with paypal</button>
		<button type="button" class="payment-option-btn">pay using netbanking</button>

		<div class="card-details">
			<p>pay using credit or debit card</p>
			<div class="card-num-field-group">
			<label>card number</label><br>
			<input type="text" class="card-num-field" placeholder="xxxx-xxxx-xxxx-xxxx" required>	
			</div>


			<div class="date-field-group">
			<label>expiry date</label><br>
			<input type="text" class="date-field" placeholder="mm" required>
			<input type="text" class="date-field" placeholder="yyyy" required></div>

            <div class="cvc-field-group">
			<label>CVC</label><br>
			<input type="password" class="cvc-field" placeholder="xxx" required>	
			</div>
            
            <div class="name-field-group">
			<label>card holder name</label><br>
			<input type="text" class="name-field" placeholder="full name" required>	
			</div>

			<input class="btn btn-primary" type="submit" name="hire" value="HIRE" required>

		</div>
	</div>
</div>
</form> 
</body>
</html>