<?php
session_start();
include('aincludes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:login.php');
}
else{
$id=intval($_GET['id']);
date_default_timezone_set('Africa/Johannesburg');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_POST['submit']))
{
$status=$_POST['status'];
$ret=mysqli_query($bd, "update application set status='$status' where id='$id'");
if($ret)
{
$_SESSION['msg']="Application Status Updated Successfully!!!";
}
else
{
  $_SESSION['msg']="Error : Application Status not Updated";
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
                        <h1 class="page-head-line" style="color:navy">PROCESS APPLICATION</h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <center>
                            <b>Academic Records<b>
                          </center>
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($bd, "select * from application where id='$id'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="process" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="idnum">ID Number</label>
    <input type="text" class="form-control" id="idnum" name="idnum" value="<?php echo htmlentities($row['idnum']);?>" readonly />
    
  </div>

  <div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo htmlentities($row['surname']);?>" readonly />
  </div>
  
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlentities($row['name']);?>" readonly />
  </div>

<div class="form-group">
    <label for="stream">Stream  </label>
    <select class="form-control" name="stream" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['stream']);?></option>
<?php } ?>

    </select> 
  </div></br>

<div class="form-group">
    <label for="hl">Home Language  </label>
    <select class="form-control" name="hl" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['hl']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="al">Additional Language  </label>
    <select class="form-control" name="al" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['al']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="maths">Mathematics  </label>
    <select class="form-control" name="maths" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['maths']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="lo">Life Orientation  </label>
    <select class="form-control" name="lo" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['lo']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="ns">Natural Science  </label>
    <select class="form-control" name="ns" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['ns']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="ss">Social Science  </label>
    <select class="form-control" name="ss" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['ss']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="ems">Economic Management Science  </label>
    <select class="form-control" name="ems" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['ems']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="tech">Technology  </label>
    <select class="form-control" name="tech" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['tech']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
    <label for="ca">Creative Arts  </label>
    <select class="form-control" name="ca" required="required" readonly>   
   <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['ca']);?></option>
<?php } ?>

    </select> 
  </div>

<div class="form-group">
  <label for="status">Application Status  </label>
  <select class="form-control" name="status" required="required">
  <?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['status']);?></option>
<?php } ?>
  <option value="WAITING FOR DECISION">WAITING FOR DECISION</option>
  <option value="SUCCESSFUL">SUCCESSFUL</option>
  <option value="UNSUCCESSFUL">UNSUCCESSFUL</option>  
  </select>
</div>

<center>
  <button type="submit" name="submit" id="submit" class="btn btn-default"><b>UPDATE<b></button>
</center>
<?php } ?>
</form>
                            </div>
                            <center><?php 
$sql=mysqli_query($bd, "select * from application where id='$id'");
while($row=mysqli_fetch_array($sql))
{
  $iname=$row['iname'];
?>
<?php } ?></center>
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
