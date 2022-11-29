<?php
session_start();
error_reporting(1);
include("includes/config.php");
if(isset($_POST['submit']))
{
    $idnum=$_POST['idnum'];
    $password=md5($_POST['password']);
	$query=mysqli_query($bd, "SELECT * FROM learner WHERE idnum='$idnum' and password='$password'");
	$result=mysqli_query($bd, "SELECT * FROM admin WHERE idnum='$idnum' and password='$password'");
	$num=mysqli_fetch_array($query);
	$nums=mysqli_fetch_array($result);
	if($num>0)
	{
		$extra="my-profile.php";//
		$_SESSION['login']=$_POST['idnum'];
		$_SESSION['id']=$num['id'];
		$_SESSION['surname']=$num['surname'];
		$_SESSION['name']=$num['name'];
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
	else if($nums>0)
	{
		$extra="admin-profile.php";//
		$_SESSION['alogin']=$_POST['idnum'];
		$_SESSION['id']=$num['id'];
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
	else
	{
		$_SESSION['errmsg']="Invalid ID Number or Password";
		$extra="login.php";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="THEMBINKOSI" />

    <title>FUTURE UNLOCK</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
	<center>
		<?php include('hincludes/header.php');?>
		<div class="content-wrapper">
			<div class="container">
				<div class="row" style="background-color:grey; color:white; height: 20%">
					<div class="col-md-12">
						<h4>Please Login To Enter </h4>

					</div>

				</div>
				 <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
				<form name="learner" method="post">
				<div class="row" style="width:50%;">
					<div>
						 <label>Enter ID Number : </label>
							<input type="integer" maxlength="13" minlength="13" name="idnum" class="form-control" required  />
							<label>Enter Password :  </label>
							<input type="password" minlength="5" name="password" class="form-control" required  />
							<hr />
							<button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;LOG IN </button>&nbsp;
					</div>
					</form>
				</div>
			</div>
			<p style="black: white; position: center;">
				Want to register? <a href="register.php">Click Here</a>
			</p>
		</div>
	 
		<?php include('hincludes/footer.php');?>
	   
		<script src="assets/js/jquery-1.11.1.js"></script>

		<script src="assets/js/bootstrap.js"></script>
	</center>
</body>
</html>
