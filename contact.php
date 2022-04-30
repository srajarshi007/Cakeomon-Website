<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact - cakeomon</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.jpg" height="75px" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="product.html">Menu</a>
					</li>
					<li class="selected">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="contact">
			<div class="header">
				<div>
					<h1>Contact</h1>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<img src="images/check-in.png" alt="">
						<h1>Block III-2A, Biswanath Abasan, NIshikanan, Teghoria, Kolkata - 7000157</h1>
						<p>If you are within 5kms of our location, we provide free delivery services. Delivery Charges may apply otherwise. Takeaway Services are available. Help us Grow so that we can provide our services through extended locations.</p>
					</div>
				</div>
			</div>

			<div class="footer">
				<div class="contact">
					<h1>Place Your Order</h1>
					<form method="POST">
						<input type="text" name="Name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Email" value="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="message" cols="50" rows="7">Share your thoughts</textarea>
						<input type="submit" value="Send" id="submit" onclick="preventDefault();">
					</form>
				</div>
				<div class="section">
					<h1>At Cakeomon, we care</h1>
					<p>We can't wait to welcome you at our location!!!</p><br>
					<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d567.5813354381702!2d88.43662686632653!3d22.62273054355608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e2deaed6f0f%3A0xfb772ce3d6ea3f82!2sBiswanath%20Abasan%2C%20Nishi%20Kanan%20Durga%20Muncha%2C%20Teghoria!5e0!3m2!1sen!2sin!4v1650713471761!5m2!1sen!2sin" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
				</div>
				<div class="section">
					<h1 id="send">
					</h1>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="" class="facebook">facebook</a>
					<a href="" class="twitter">twitter</a>
					<a href="" class="googleplus">googleplus</a>
					<a href="" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2022 cakeomon. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
<script>
	document.getElementById("submit").addEventListener("click", function(e){
		e.preventDefault();
		document.getElementById("send").innerHTML = "<?php include("send.php");?>"
	})
</script>
</html>
