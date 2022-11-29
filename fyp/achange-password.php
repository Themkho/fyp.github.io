
<?php
  session_start();
  include('aincludes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {   
    header('location:login.php');
  }
  else
  {
    if(isset($_POST['submit']))
    {
    $sql=mysqli_query($bd, "select password from admin where password='".md5($_POST['cpass'])."' && idnum='".$_SESSION['alogin']."'");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
      if(($_POST['newpass']) != ($_POST['cnfpass']))
      {
        $_SESSION['msg']="New Password and Confirm New Password not match!!!";
      }
      else
      {
        $con=mysqli_query($bd, "update admin set password='".md5($_POST['newpass'])."' where idnum='".$_SESSION['alogin']."'");
        $_SESSION['msg']="Password Changed Successfully!!!";
      }
    }
    else
    {
      $_SESSION['msg']="Current Password not match!!!";
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
    <link href="aassets/css/bootstrap.css" rel="stylesheet" />
    <link href="aassets/css/font-awesome.css" rel="stylesheet" />
    <link href="aassets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php include('aincludes/header.php');?>

<?php if($_SESSION['alogin']!="")
{
 include('aincludes/menubar.php');
}
 ?>

    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color: navy">Admin Change Password </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Change Password
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="chngpwd" method="post" onSubmit="return valid();">
   <div class="form-group">
    <label for="exampleInputPassword1">Current Password</label>
    <input type="password" minlength="5" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="Password" />
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" minlength="5" class="form-control" id="exampleInputPassword2" name="newpass" placeholder="Password" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm New Password</label>
    <input type="password" minlength="5" class="form-control" id="exampleInputPassword3" name="cnfpass" placeholder="Password" />
  </div>
 
  <button type="submit" name="submit" class="btn btn-default">Change</button>
                           <hr />
   



</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
        </div>
    </div>
    
  <?php include('aincludes/footer.php');?>
   
    <script src="aassets/js/jquery-1.11.1.js"></script>

    <script src="aassets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
