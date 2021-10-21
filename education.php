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
			<h1>GRADE 12 PREV PAPERS</h1>
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
			YOU CAN FIND THE NATIONAL DEPARTMENT OF BASIC EDUCATION @ <a href="https://www.education.gov.za/">www.education.gov.za</a> </br>
			BELOW ARE THE LINKS FOR DOWNLOADING MATRIC PREVIOUS YEARS QUESTION PAPERS
		</h6>
		1. MATHEMATICS @ <a href="http://bit.ly/2MiAghT">http://bit.ly/2MiAghT</a></br>
		2. MATHEMATICAL LITERACY @ <a href="http://bit.ly/2w8TmS7">http://bit.ly/2w8TmS7</a></br>
		3. ACCOUNTING @ <a href="http://bit.ly/2yqPsVr">http://bit.ly/2yqPsVr</a></br>
		4. BUSINESS STUDIES @ <a href="http://bit.ly/2X7ACNR">http://bit.ly/2X7ACNR</a></br>
		5. CONSUMER STUDIES @ <a href="http://bit.ly/345dLEa">http://bit.ly/345dLEa</a></br>
		6. ECONOMICS STUDIES @ <a href="http://bit.ly/39ExQCr">http://bit.ly/39ExQCr</a></br>
		7. PHYSICAL SCIENCES @ <a href="http://bit.ly/39GCDU6">http://bit.ly/39GCDU6</a></br>
		8. LIFE SCIENCES @ <a href="http://bit.ly/2UFcoZy">http://bit.ly/2UFcoZy</a></br>
		9. GEOGRAPHY @ <a href="http://bit.ly/2wPBUTh">http://bit.ly/2wPBUTh</a></br>
		10. HISTORY @ <a href="http://bit.ly/3bR3E8T">http://bit.ly/3bR3E8T</a></br>
		11. AGRICULTURAL SCIENCES @ <a href="http://bit.ly/2UX9Hlo">http://bit.ly/2UX9Hlo</a></br>
		12. ENGLISH (FAL) @ <a href="http://bit.ly/2UVGg3b">http://bit.ly/2UVGg3b</a></br>
		13. ENGLISH (HL) @ <a href="http://bit.ly/2JBY1iQ">http://bit.ly/2JBY1iQ</a></br>
		14. SEPEDI (HL) @ <a href="http://bit.ly/2UF9cO0">http://bit.ly/2UF9cO0</a></br>
		15. ISIZULU (HL) @ <a href="http://bit.ly/2URpEcA">http://bit.ly/2URpEcA</a></br>
		16. ISIXHOSA (HL) @ <a href="http://bit.ly/3bTqgpj">http://bit.ly/3bTqgpj</a></br>
		17. XITSONGA (HL) @ <a href="http://bit.ly/39GxTxM">http://bit.ly/39GxTxM</a></br>
		18. TSHIVENDA (HL) @ <a href="http://bit.ly/2ynwYVR">http://bit.ly/2ynwYVR</a></br>
		19. SISWATI (HL) @ <a href="http://bit.ly/2yyJVwp">http://bit.ly/2yyJVwp</a></br>
		20. SETSWANA (HL) @ <a href="http://bit.ly/3dSUUAU">http://bit.ly/3dSUUAU</a></br>
		21. ISINDEBELE (HL) @ <a href="http://bit.ly/3dTWP87">http://bit.ly/3dTWP87</a></br>
	</div>
</body>
</html>