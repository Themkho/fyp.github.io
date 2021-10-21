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
</head>
<body>
	<div class="topic">
			<h1>SOCIAL MEDIAS</h1>
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

	<div>
		</br>
		</br>
		</br>
		</br>
		<h6>
			FOR SOME USEFUL VIDEOS TO LEARN, ACCESS YOUTUBE @ <a href="https://www.youtube.com/">www.youtube.com</a></br>
			BELOW ARE THE LINKS FOR DIFFERENT SOCIAL MEDIA PLATFORMS
		</h6>
		1. FACEBOOK @ <a href="http://www.facebook.com/">www.facebook.com</a></br>
		2. FREE FACEBOOK @ <a href="http://free.facebook.com/">free.facebook.com</a></br>
		3. TWITTER @ <a href="https://www.twitter.com/">www.twitter.com</a></br>
		4. INSTAGRAM @ <a href="http://www.instagram.com/">www.instagram.com</a></br>
		5. WHATSAPP @ <a href="http://www.whatsapp.com/">www.whatsapp.com</a></br>
		6. TIKTOK @ <a href="http://www.tiktok.com/">www.tiktok.com</a></br>
	</div>
</body>
</html>