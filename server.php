<?php
	session_start();

	$surname = "";
	$name = "";
	$date = "";
	$idnum = "";
	$gender = "";
	$phone = "";
	$address = "";
	$province = "";
	$town = "";
	$email = "";
	$psurname = "";
	$pname = "";
	$pidnum = "";
	$pphone = "";
	$paddress = "";
	$relation = "";
	$ptown = "";
	$stream = "";
	$hl = "";
	$al = "";
	$maths = "";
	$lo = "";
	$ns = "";
	$ss = "";
	$ems = "";
	$tech = "";
	$ca = "";
	$errors = array();

	$con = mysqli_connect("localhost", "root", "", "fyp");

	if (isset($_POST['register'])) {
		$surname = $_POST["surname"];
		$name = $_POST["name"];
		$date = $_POST["date"];
		$idnum = $_POST["idnum"];
		$gender = $_POST["gender"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];
		$province = $_POST["province"];
		$town = $_POST["town"];
		$email = $_POST["email"];
		$psurname = $_POST["psurname"];
		$pname = $_POST["pname"];
		$pidnum = $_POST["pidnum"];
		$pphone = $_POST["pphone"];
		$paddress = $_POST["paddress"];
		$relation = $_POST["relation"];
		$ptown = $_POST["ptown"];
		$stream = $_POST["stream"];
		$hl = $_POST["hl"];
		$al = $_POST["al"];
		$maths = $_POST["maths"];
		$lo = $_POST["lo"];
		$ns = $_POST["ns"];
		$ss = $_POST["ss"];
		$ems = $_POST["ems"];
		$tech = $_POST["tech"];
		$ca = $_POST["ca"];
		$password_1 = $_POST["password_1"];
		$password_2 = $_POST["password_2"];

		if (empty($surname)) {
			array_push($errors, "Surname is required");
		}
		if (empty($name)) {
			array_push($errors, "Name is required");
		}
		if (empty($date)) {
			array_push($errors, "Date is required");
		}
		if (empty($idnum)) {
			array_push($errors, "ID number is required");
		}
		if (empty($phone)) {
			array_push($errors, "Phone number is required");
		}
		if (empty($address)) {
			array_push($errors, "Physical Address is required");
		}
		if (empty($province)) {
			array_push($errors, "Province is required");
		}
		if (empty($town)) {
			array_push($errors, "Town is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($psurname)) {
			array_push($errors, "Guardian's Surname is required");
		}
		if (empty($name)) {
			array_push($errors, "Guardian's Name is required");
		}
		if (empty($pidnum)) {
			array_push($errors, "Guardian's ID Number is required");
		}
		if (empty($pphone)) {
			array_push($errors, "Guardian's Contact is required");
		}
		if (empty($paddress)) {
			array_push($errors, "Guardian's Address is required");
		}
		if (empty($relation)) {
			array_push($errors, "Guardian's relationship to you is required");
		}
		if (empty($ptown)) {
			array_push($errors, "Guardian's Town is required");
		}
		if (empty($hl)) {
			array_push($errors, "Home Language level is required");
		}
		if (empty($al)) {
			array_push($errors, "Additional Language level is required");
		}
		if (empty($maths)) {
			array_push($errors, "Maths level is required");
		}
		if (empty($lo)) {
			array_push($errors, "LO level is required");
		}
		if (empty($ns)) {
			array_push($errors, "NS level is required");
		}
		if (empty($ss)) {
			array_push($errors, "SS level is required");
		}
		if (empty($ems)) {
			array_push($errors, "EMS level is required");
		}
		if (empty($tech)) {
			array_push($errors, "Technology level is required");
		}
		if (empty($ca)) {
			array_push($errors, "CA level is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if ($hl < 4){
			array_push($errors, "You do not qualify for Grade 10,Home Language is below 50%");
		}
		if ($al < 4){
			array_push($errors, "You do not qualify for Grade 10,Additional Language is below 50%");
		}
		if ($maths < 2){
			array_push($errors, "You do not qualify for Grade 10,Mathematics is below 30%");
		}
		if ($lo < 2){
			array_push($errors, "You do not qualify for Grade 10,LO is below 30%");
		}
		if (($ns < 3 && $ss < 3 && $ems < 3 && $tech < 3 && $ca < 3) || ($ns < 3 && $ss < 3 && $ems < 3 && $tech < 3) || ($ns < 3 && $ss < 3 && $ems < 3 && $ca < 3) || ($ns < 3 && $ss < 3 && $tech < 3 && $ca < 3) || ($ns < 3 && $ems < 3 && $tech < 3 && $ca < 3) || ($ss < 3 && $ems < 3 && $tech < 3 && $ca < 3)){
			array_push($errors, "You do not qualify for Grade 10,your score is low. You need at least 40% in two other subjects");
		}
		if ($ns < 2 || $ss < 2 || $ems < 2 || $tech < 2 || $ca < 2){
			array_push($errors, "You do not qualify for Grade 10,your score is low. Level one in any subject is fail");
		}
		if (($stream == "SCIENCE") && ($maths < 5 && $maths > 2)){
			array_push($errors, "You do not qualify for SCIENCE, with this mark in MATHS try COMMERCE or GENERAL");
		}
		if (($stream == "SCIENCE") && ($maths < 3 && $maths > 1)){
			array_push($errors, "You do not qualify for SCIENCE, with this mark in MATHS try GENERAL only");
		}
		if (($stream == "COMMERCE") && ($maths < 3 && $maths > 1)){
			array_push($errors, "You do not qualify for COMMERCE, with this mark in MATHS try GENERAL only");
		}
		if (($stream == "SCIENCE") && ($ns < 4)){
			array_push($errors, "You do not qualify for SCIENCE, with this mark in Natural Science try COMMERCE or GENERAL");
		}
		if (($stream == "SCIENCE") && ($tech < 3)){
			array_push($errors, "You do not qualify for SCIENCE, with this mark in Technology try COMMERCE or GENERAL");
		}
		if (($stream == "COMMERCE") && ($ems < 4)){
			array_push($errors, "You do not qualify for COMMERCE, with this mark in EMS try SCIENCE or GENERAL");
		}

		if (count($errors) == 0) {
			$password = md5($password_1);
			$username = ($email);
			$sql = "select * from user where idnum like '".$idnum."' or email like '".$email."';";
			$result = mysqli_query($con, $sql);
			$response = array();

		
			if (mysqli_num_rows($result)>0)
			{
				array_push($errors, "The user already exist");
			}
			else
			{
				$password = md5($password_1);
				$username = ($email);
				$statement = mysqli_prepare($con, "INSERT INTO user (surname, name, date, idnum, gender, phone, address, province, town, email, psurname, pname, pidnum, pphone, paddress, relation, ptown, stream, hl, al, maths, lo, ns, ss, ems, tech, ca, username, password)
											VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
				mysqli_stmt_bind_param($statement, "sssisissssssiissssiiiiiiiiiss", $surname, $name, $date, $idnum, $gender, $phone, $address, $province, $town, $email, $psurname, $pname, $pidnum, $pphone, $paddress, $relation, $ptown, $stream, $hl, $al, $maths, $lo, $ns, $ss, $ems, $tech, $ca, $username, $password);
				mysqli_stmt_execute($statement);
				$_SESSION['surname'] = $surname;
				$_SESSION['name'] = $name;
				$_SESSION['date'] = $date;
				$_SESSION['idnum'] = $idnum;
				$_SESSION['gender'] = $gender;
				$_SESSION['phone'] = $phone;
				$_SESSION['address'] = $address;
				$_SESSION['province'] = $province;
				$_SESSION['town'] = $town;
				$_SESSION['email'] = $email;
				$_SESSION['psurname'] = $psurname;
				$_SESSION['pname'] = $pname;
				$_SESSION['pidnum'] = $pidnum;
				$_SESSION['pphone'] = $pphone;
				$_SESSION['paddress'] = $paddress;
				$_SESSION['relation'] = $relation;
				$_SESSION['ptown'] = $ptown;
				$_SESSION['stream'] = $stream;
				$_SESSION['hl'] = $hl;
				$_SESSION['al'] = $al;
				$_SESSION['maths'] = $maths;
				$_SESSION['lo'] = $lo;
				$_SESSION['ns'] = $ns;
				$_SESSION['ss'] = $ss;
				$_SESSION['ems'] = $ems;
				$_SESSION['tech'] = $tech;
				$_SESSION['ca'] = $ca;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['success'] = "You are now logged in";
				header('location: page5.php');
			}
		}
	}
	if (isset($_POST['login'])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$sql = "select surname, name, date, idnum, gender, phone, address, province, town, email, psurname, pname, pidnum, pphone, paddress, relation, ptown, stream from user 
						where username like '".$username."' and password like '".$password."';";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_row($result);
				$surname = $row[0];
				$name = $row[1];
				$date = $row[2];
				$idnum = $row[3];
				$gender = $row[4];
				$phone = $row[5];
				$address = $row[6];
				$province = $row[7];
				$town = $row[8];
				$email = $row[9];
				$psurname = $row[10];
				$pname = $row[11];
				$pidnum = $row[12];
				$pphone = $row[13];
				$paddress = $row[14];
				$relation = $row[15];
				$ptown = $row[16];
				$stream = $row[17];

				$_SESSION['surname'] = $surname;
				$_SESSION['name'] = $name;
				$_SESSION['date'] = $date;
				$_SESSION['idnum'] = $idnum;
				$_SESSION['gender'] = $gender;
				$_SESSION['phone'] = $phone;
				$_SESSION['address'] = $address;
				$_SESSION['province'] = $province;
				$_SESSION['town'] = $town;
				$_SESSION['email'] = $email;
				$_SESSION['psurname'] = $psurname;
				$_SESSION['pname'] = $pname;
				$_SESSION['pidnum'] = $pidnum;
				$_SESSION['pphone'] = $pphone;
				$_SESSION['paddress'] = $paddress;
				$_SESSION['relation'] = $relation;
				$_SESSION['ptown'] = $ptown;
				$_SESSION['stream'] = $stream;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['success'] = "You are now logged in.";
				header('location: profile.php');
			}
			else
			{
				array_push($errors, "Wrong combination");
			}
		}
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['surname']);
		unset($_SESSION['name']);
		unset($_SESSION['date']);
		unset($_SESSION['idnum']);
		unset($_SESSION['gender']);
		unset($_SESSION['phone']);
		unset($_SESSION['address']);
		unset($_SESSION['province']);
		unset($_SESSION['town']);
		unset($_SESSION['email']);
		unset($_SESSION['psurname']);
		unset($_SESSION['pname']);
		unset($_SESSION['pidnum']);
		unset($_SESSION['pphone']);
		unset($_SESSION['paddress']);
		unset($_SESSION['relation']);
		unset($_SESSION['ptown']);
		unset($_SESSION['stream']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		header('location: home.php');
	}

	mysqli_close($con);

?>