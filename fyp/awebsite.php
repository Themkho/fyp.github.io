<?php
session_start();
include('aincludes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:login.php');
}
else{

if(isset($_POST['submit']))
{
    $webname=$_POST['webname'];
  $website=$_POST['website'];
$ret=mysqli_query($bd, "insert into website(website,webname) values('$website','$webname')");
if($ret)
{
$_SESSION['msg']="New Website Added Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Website not Added";
}
}
if(isset($_GET['del']))
      {
              mysqli_query($bd, "delete from website where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Website deleted !!";
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
                        <h1 class="page-head-line" style="color: navy">Websites  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>
                                <b>ADD WEBSITE<b>
                            </center> 
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="website" method="post">
   <div class="form-group">
    <label for="webname">Website Name  </label>
    <input type="text" class="form-control" id="webname" name="webname" placeholder="Enter Website Name" required />
  </div>
  <div class="form-group">
    <label for="website">Website Link  </label>
    <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website Link" required />
  </div>
 <center><button type="submit" name="submit" class="btn btn-default"><b>ADD<b></button></center>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
                <font color="red" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font>
                <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MANAGE WEBSITES
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><center>#</center></th>
                                            <th><center>WEBSITE NAME</center></th>
                                            <th><center>WEBSITE LINK</center></th>
                                            <th><center>ACTION</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($bd, "select * from website");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['webname']);?></td>
                                            <td><a href="http://<?php echo htmlentities($row['website']);?>/"><?php echo htmlentities($row['website']);?></a></td>
                                            <td>
  <a href="awebsite.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                            <button class="btn btn-danger">Delete</button>
</a>
                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
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
