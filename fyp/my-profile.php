<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{   
  header('location:login.php');
}
else{

if(isset($_POST['submit']))
{
  $photo=$_FILES["learnerphoto"]["name"];
  move_uploaded_file($_FILES["learnerphoto"]["tmp_name"],"learnerphoto/".$_FILES["learnerphoto"]["name"]);
  $ret=mysqli_query($bd, "update learner set learnerphoto='$photo' where idnum='".$_SESSION['login']."'");
  if($ret)
  {
    $_SESSION['msg']="Learner Profile Picture updated Successfully !!";
  }
  else
  {
    $_SESSION['msg']="Error : Learner Profile Picture not updated";
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
<?php include('includes/header.php');?>
    
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
  
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color: maroon">Learner Profile  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <center>
                            <b>PROFILE<b>
                          </center>
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($bd, "select * from learner where idnum='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">
  <center><div class="form-group"><b><?php echo htmlentities($row['name']);?> <?php echo htmlentities($row['surname']);?><b>
  </div>

<div class="form-group">
   <?php if($row['learnerphoto']==""){ ?>
   <img src="learnerphoto/noimage.png" width="200" height="200"><?php } else {?>
   <img src="learnerphoto/<?php echo htmlentities($row['learnerphoto']);?>" width="200" height="200">
   <?php } ?>
  </div></center>
<div class="form-group">
    <label for="learnerphoto">Change Profile Picture  </label>
    <input type="file" class="form-control" id="photo" name="learnerphoto"  value="<?php echo htmlentities($row['learnerphoto']);?>" />
  </div>


  <?php } ?>

 <center><button type="submit" name="submit" id="submit" class="btn btn-default"><b>UPDATE<b></button></center>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>

            </div>





        </div>
    </div>
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>


</body>
</html>
<?php } ?>
