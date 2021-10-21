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
			<h1>HIGHER INSTITUTIONS</h1>
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
			BELOW ARE THE LINKS FOR APPLYING AT DIFFERENT HIGHER EDUCATION INSTITUTIONS </br>
			IN KZN, YOU CAN APPLY IN DIFFERENT INSTITUTIONS USING ONLY ONE APPLICATION @ <a href="http://www.cao.ac.za/">www.cao.ac.za</a>
		</h6>
		1. WITS UNIVERSITY @ <a href="http://www.wits.ac.za/">www.wits.ac.za</a></br>
		2. UNIVERSITY OF FORT HARE @ <a href="http://www.ufh.ac.za/">www.ufh.ac.za</a></br>
		3. TSHWANE UNIVERSITY OF TECHNOLOGY @ <a href="http://www.tut.ac.za/">www.tut.ac.za</a></br>
		4. UNIVERSITY OF JOHANNESBURG @ <a href="http://www.uj.ac.za/">www.uj.ac.za</a></br>
		5. UNIVERSITY OF WESTERN CAPE @ <a href="http://www.uwc.ac.za/">www.uwc.ac.za</a></br>
		6. CAPE PENINSULA UNIVERSITY OF TECHNOLOGY @ <a href="http://www.cput.ac.za/">www.cput.ac.za</a></br>
		7. UNIVERSITY OF CAPE TOWN @ <a href="http://www.uct.ac.za/">www.uct.ac.za</a></br>
		8. UNIVERSITY OF KWAZULU-NATAL @ <a href="http://www.ukzn.ac.za/">www.ukzn.ac.za</a></br>
		9. DURBAN UNIVERSITY OF TECHNOLOGY @ <a href="http://www.dut.ac.za/">www.dut.ac.za</a></br>
		10. RHODES UNIVERSITY @ <a href="http://www.ru.ac.za/">www.ru.ac.za</a></br>
		11. WALTER SISULU UNIVERSITY @ <a href="http://www.wsu.ac.za/">www.wsu.ac.za</a></br>
		12. NELSON MANDELA METROPOLITAN UNIVERSITY @ <a href="http://www.nmmu.ac.za/">www.nmmu.ac.za</a></br>
		13. CENTRAL UNIVERSITY OF TECHNOLOGY @ <a href="http://www.cut.ac.za/">www.cut.ac.za</a></br>
		14. UNIVERSITY OF THE FREE STATE @ <a href="http://www.ufs.ac.za/">www.ufs.ac.za</a></br>
		15. UNIVERSITY OF PRETORIA @ <a href="http://www.up.ac.za/">www.up.ac.za</a></br>
		16. UNIVERSITY OF SOUTH AFRICA @ <a href="http://www.unisa.ac.za/">www.unisa.ac.za</a></br>
		17. VAAL UNIVERSITY OF TECHNOLOGY @ <a href="http://www.vut.ac.za/">www.vut.ac.za</a></br>
		18. UNIVERSITY OF LIMPOPO @ <a href="http://www.ul.ac.za/">www.ul.ac.za</a></br>
		19. MANGOSUTHU UNIVERSITY OF TECHNOLOGY @ <a href="http://www.mut.ac.za/">www.mut.ac.za</a></br>
		20. UNIVERSITY OF ZULULAND @ <a href="http://www.unizul.ac.za/">www.unizul.ac.za</a></br>
		21. UNIVERSITY OF VENDA @ <a href="http://www.univen.ac.za/">www.univen.ac.za</a></br>
		22. NORTH WEST UNIVERSITY @ <a href="http://www.unw.ac.za/">www.unw.ac.za</a></br>
		23. UNIVERSITY OF STELLENBOSCH @ <a href="http://www.us.ac.za/">www.us.ac.za</a></br>
		24. SOL PLAATJE UNIVERSITY @ <a href="http://www.spu.ac.za/">www.spu.ac.za</a></br>
		25. UNIVERSITY OF MPUMALANGA @ <a href="http://www.ump.ac.za/">www.ump.ac.za</a></br>
	</div>
</body>
</html>