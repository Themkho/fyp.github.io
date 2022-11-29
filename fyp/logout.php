<?php
	session_start();
	include("includes/config.php");
	$_SESSION['login']=="";
	session_unset();
	$_SESSION['errmsg']="You have successfully Logged Out";
?>
<script language="javascript">
	document.location="login.php";
</script>
