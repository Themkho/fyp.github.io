<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>FUTURE UNLOCK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
		background: rgb(50, 100, 100);
		background-attachment: fixed;
	}
	</style>
</head>
<body>
	<center>
		<h5 id="h5">FUTURE UNLOCK</h5>
		<div class="settings"></div>
		<h4 id="h4">PAGE 1 OF 5</h4>
		<h6 id="h6">PERSONAL PARTICULARS</h6>
		 
		<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="field">
			<div class="input">
				<label>Surname</label>
				<input type="text" maxlength="50" placeholder="Enter your surname" name="surname" value="<?php echo $surname; ?>">
			</div>
			<div class="input">
				<label>Name</label>
				<input type="text" maxlength="50" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
			</div>
			<div class="input">
				<label>Date of Birth</label>
				<input type="date" min="1900-01-01" name="date" value="<?php echo $date; ?>">
			</div>
			<div class="input">
				<label>ID Number</label>
				<input type="integer" maxlength="13" minlength="13" placeholder="Enter your id number" name="idnum" value="<?php echo $idnum; ?>">
			</div>
			<div style="text-align:left">Choose your gender</div></br>
			<div>
				<label for="male">Male</label>
				<input type="radio" name="gender" value="m" required>
				<label for="female">Female</label>
				<input type="radio" name="gender" value="f" required>
				<label for="other">Other</label>
				<input type="radio" name="gender" value="o" required>
			</div>
			<div class="input">
				<label>Phone Number</label>
				<input type="integer" minlength="10" maxlength="10" placeholder="Enter phone number" name="phone" value="<?php echo $phone; ?>">
			</div>
			<div class="input">
				<label>Physical Address</label>
				<input type="text"maxlength="100"  placeholder="Enter your Physical Address" name="address" value="<?php echo $address; ?>">
			</div>
			<div class="input">
				<label>Province(RSA)</label>
				<input type="text" maxlength="100"  placeholder="Enter your Province" name="province" value="<?php echo $province; ?>">
			</div>
			<div class="input">
				<label>Town</label>
				<input type="text" maxlength="100" placeholder="Enter your Town" name="town" value="<?php echo $town; ?>">
			</div>
			<div class="input">
				<label>Email</label>
				<input type="text" maxlength="100"  placeholder="Enter your email" name="email" value="<?php echo $email; ?>">
			</div>
		</div>
		<div class="settings"></div>
		<h4 id="h4">PAGE 2 OF 5</h4>
		<h6 id="h6">GUARDIAN PARTICULARS</h6>
		<div class="field">
			<div class="input">
				<label>Surname</label>
				<input type="text" maxlength="50" placeholder="Enter Guardian's surname" name="psurname" value="<?php echo $psurname; ?>">
			</div>
			<div class="input">
				<label>Name</label>
				<input type="text" maxlength="50" placeholder="Enter Guardian's name" name="pname" value="<?php echo $pname; ?>">
			</div>
			<div class="input">
				<label>ID Number</label>
				<input type="integer" maxlength="13" minlength="13" placeholder="Enter Guardian's id number" name="pidnum" value="<?php echo $pidnum; ?>">
			</div>
			<div class="input">
				<label>Phone Number</label>
				<input type="integer" minlength="10" maxlength="10" placeholder="Enter Guardian's phone number" name="pphone" value="<?php echo $pphone; ?>">
			</div>
			<div class="input">
				<label>Physical Address</label>
				<input type="text"maxlength="100"  placeholder="Enter Guardian's Physical Address" name="paddress" value="<?php echo $paddress; ?>">
			</div>
			<div class="input">
				<label>Relationship</label>
				<input type="text"maxlength="100"  placeholder="How is s/he related to you?" name="relation" value="<?php echo $relation; ?>">
			</div>
			<div class="input">
				<label>Town</label>
				<input type="text" maxlength="100" placeholder="Enter Guardian's Town" name="ptown" value="<?php echo $ptown; ?>">
			</div>
		</div>
		<div class="settings"></div>
		<h4 id="h4">PAGE 3 OF 5</h4>
		<h6 id="h6">ACADEMIC RECORDS AND STREAM/FIELD SELECTION</h6>
		<div class="field">
			<h4 id="h4" style="text-align:left">Select Stream/Field of your choice</h4>
			<div>
				<label for="science">SCIENCE</label>
				<input type="radio" name="stream" value="SCIENCE" required>
				<label for="commerce">COMMERCE</label>
				<input type="radio" name="stream" value="COMMERCE" required>
				<label for="general">GENERAL</label>
				<input type="radio" name="stream" value="GENERAL" required>
			</div></br>
			<h4 id="h4" style="text-align:left">Enter correct Grade 9 marks</h4>
			<div class="input">
				<label>Home Language</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter HL level" name="hl" value="<?php echo $hl; ?>">
			</div>
			<div class="input">
				<label>Additional Language</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter AL level" name="al" value="<?php echo $al; ?>">
			</div>
			<div class="input">
				<label>Mathematics</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter Maths level" name="maths" value="<?php echo $maths; ?>">
			</div>
			<div class="input">
				<label>Life Orientation</label>
				<input type="integer" minlength="1" maxlength="3" placeholder="Enter LO level" name="lo" value="<?php echo $lo; ?>">
			</div>
			<div class="input">
				<label>Natural Science</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter NS level" name="ns" value="<?php echo $ns; ?>">
			</div>
			<div class="input">
				<label>Social Science</label>
				<input type="integer"maxlength="3" minlength="1" placeholder="Enter SS level" name="ss" value="<?php echo $ss; ?>">
			</div>
			<div class="input">
				<label>Economic Management Science</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter EMS level" name="ems" value="<?php echo $ems; ?>">
			</div>
			<div class="input">
				<label>Technology</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter Technology level" name="tech" value="<?php echo $tech; ?>">
			</div>
			<div class="input">
				<label>Creative Arts</label>
				<input type="integer" maxlength="3" minlength="1" placeholder="Enter CA level" name="ca" value="<?php echo $ca; ?>">
			</div>
		</div>
		<div class="settings"></div>
		<h4 id="h4">PAGE 4 OF 5</h4>
		<h6 id="h6">PASSWORD CREATION</h6>
		<div class="field">
			<div class="input">
				<label>Password</label>
				<input type="password" maxlength="500" placeholder="Enter your password" name="password_1">
			</div>
			<div class="input">
				<label>Confirm Password</label>
				<input type="password" maxlength="500" placeholder="Confirm your password" name="password_2">
			</div>
		</div>
		</br>
		<p>
			REMEMBER TO USE YOUR EMAIL AS YOUR USERNAME TO LOG IN.
		</p>
		</br>
		<div class="input">
			<button type="submit" name="register" class="btn">SUBMIT</button>
		</div>
		</form>
		</br>
		<p>
			Already a member? <a href="login.php">Log in</a>
		</p>
		</br>
		<link rel="stylesheet/css"><i style="color: maroon">&copy; 2021 | All Rights Reserved</i>
	</center>
</body>
</html>