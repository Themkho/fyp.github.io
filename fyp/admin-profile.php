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
    $photo=$_FILES["adminphoto"]["name"];
    move_uploaded_file($_FILES["adminphoto"]["tmp_name"],"adminphoto/".$_FILES["adminphoto"]["name"]);
    $ret=mysqli_query($bd, "update admin set adminphoto='$photo' where idnum='".$_SESSION['alogin']."'");
    if($ret)
    {
      $_SESSION['msg']="Admin Profile Picture Updated Successfully !!";
    }
    else
    {
      $_SESSION['msg']="Error : Admin Profile Picture not Updated";
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
                        <h1 class="page-head-line" style="color: navy">Admin Profile  </h1>
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
<?php $sql=mysqli_query($bd, "select * from admin where idnum='".$_SESSION['alogin']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">
  <center><div class="form-group"><b><?php echo htmlentities($row['name']);?> <?php echo htmlentities($row['surname']);?><b>
  </div>

<div class="form-group">
   <?php if($row['adminphoto']==""){ ?>
   <img src="adminphoto/noimage.png" width="200" height="200"><?php } else {?>
   <img src="adminphoto/<?php echo htmlentities($row['adminphoto']);?>" width="200" height="200">
   <?php } ?>
  </div></center>
<div class="form-group">
    <label for="adminphoto">Change Profile Picture  </label>
    <input type="file" class="form-control" id="photo" name="adminphoto"  value="<?php echo htmlentities($row['adminphoto']);?>" />
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
  <?php include('aincludes/footer.php');?>
    <script src="aassets/js/jquery-1.11.1.js"></script>
    <script src="aassets/js/bootstrap.js"></script>


</body>
</html>
<?php } ?>
