<?php
	session_start();
	include("aincludes/config.php");
	$_SESSION['alogin']=="";
	session_unset();
	$_SESSION['errmsg']="You have successfully logged out";
?>
<script language="javascript">
	document.location="login.php";
</script>
