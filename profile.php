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
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="topic">
				<div class="error success">
					<h1><strong><?php echo $_SESSION['name']; ?></strong><strong><?php echo " "; ?></strong><strong><?php echo $_SESSION['surname']; ?></strong></h1>
				</div>
			</div>
		<?php endif ?>
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
</body>
</html>