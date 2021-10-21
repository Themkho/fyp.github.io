<?php include('server.php');

	// if user is not logged in, s/he cannot access this page
	if (empty($_SESSION['username'])) {
		header('location: home.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FUTURE UNLOCK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		form, .content {
			width: 30%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #80C4DE;
			background: rgb(225,225,225);
			border-radius: 0px 0px 10px 10px;
		}
		strong {
			height: 30px;
			width: 200px;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
			display: block;
			text-align: left;
			margin: 3px;
			color: rgb(0,0,50);
			background: white;
		}
	</style>
</head>
<body>
	<div class="topic">
			<h1>PERSONAL PARTICULARS</h1>
		</div>
	<div class="setting">
		<button class="setting-btn1"><a href="profile.php?logout='1'">LOGOUT</a></button>
	</div>
	<div class="dd">
		<button>HOME</button>
		<div class="dd-content">
			<a href="profile.php">GENERAL</a>
			<a href="stream.php">STREAMS</a>
		</div>
	</div>
	<div class="dd">
		<button>DETAILS</button>
		<div class="dd-content">
			<a href="personal.php">PERSONAL PARTICULARS</a>
			<a href="guardian.php">GUARDIAN PARTICULARS</a>
		</div>
	</div>
	<div class="dd">
		<button>ABOUT US</button>
		<div class="dd-content">
			<a href="contact.php">CONTACT DETAILS</a>
			<a href="history.php">HISTORY</a>
		</div>
	</div>
	<div class="dd">
		<button>FIELDS</button>
		<div class="dd-content">
			<a href="social.php">SOCIAL MEDIAS</a>
			<a href="education.php">GRADE 12 PREV PAPERS</a>
		</div>
	</div>
	<div class="dd">
		<button>USEFUL WEBSITES</button>
		<div class="dd-content">
			<a href="bursaries.php">BURSARIES</a>
			<a href="institutions.php">HIGHER INSTITUTIONS</a>
		</div>
	</div>
	<center>
		<form>
			<div class="input">
				<label>Surname</label>
				<strong><?php echo $_SESSION['surname']; ?></strong>
			</div>
			<div class="input">
				<label>Name</label>
				<strong><?php echo $_SESSION['name']; ?></strong>
			</div>
			<div class="input">
				<label>Date of Birth</label>
				<strong><?php echo $_SESSION['date']; ?></strong>
			</div>
			<div class="input">
				<label>ID Number</label>
				<strong><?php echo $_SESSION['idnum']; ?></strong>
			</div>
			<div class="input">
				<label>Gender</label>
				<strong><?php echo $_SESSION['gender']; ?></strong>
			</div>
			<div class="input">
				<label>Phone Number</label>
				<strong><?php echo $_SESSION['phone']; ?></strong>
			</div>
			<div class="input">
				<label>Address</label>
				<strong><?php echo $_SESSION['address']; ?></strong>
			</div>
			<div class="input">
				<label>Province</label>
				<strong><?php echo $_SESSION['province']; ?></strong>
			</div>
			<div class="input">
				<label>Town</label>
				<strong><?php echo $_SESSION['town']; ?></strong>
			</div>
			<div class="input">
				<label>Email</label>
				<strong><?php echo $_SESSION['email']; ?></strong>
			</div>
		</form>
	</center>
</body>
</html>