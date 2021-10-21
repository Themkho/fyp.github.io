<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>FUTURE UNLOCK</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
        body {
			background: linear-gradient(red, maroon, black);
			background-attachment: fixed;
        }
    </style>
</head>
<body>
	<center>
		<script>document.write(Date());</script>
		<h5 id="h5">FUTURE UNLOCK</h5>
		<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<p>
			REMEMBER TO USE YOUR EMAIL AS YOUR USERNAME TO LOG IN.
		</p>
		<div class="input">
			<input type="text" placeholder="Username" name="username">
		</div>
		<br />
		<br />
		<div class="input">
			<input type="password" placeholder="Password" name="password">
		</div>
		<br />
		<br />
		<div class="input">
			<button type="submit" name="login" class="btn">LOGIN</button>
		</div>
		</br>
		<p style="color: white;">
			Forgot Password? <a href="forgot.html">Click Here</a> or <a href="register.php">Sign Up</a>
		</p>
	    <br />
	    <br />
	    <br />
	    <br />
	    <link rel="stylesheet/css"><i style="color: navy">&copy; 2020 | All Rights Reserved</i>
	    <br />
	</center>	    
</body>
</html>