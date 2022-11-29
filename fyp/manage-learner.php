<?php
session_start();
include('aincludes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:login.php');
}
else{



if(isset($_GET['del']))
{
    mysqli_query($bd, "delete from learner where idnum = '".$_GET['id']."'");
    $_SESSION['delmsg']="Learner record deleted!!!";
}

if(isset($_GET['pass']))
{
    $password="12345";
    $newpass=md5($password);
    mysqli_query($bd, "update learner set password='$newpass' where idnum = '".$_GET['id']."'");
    $_SESSION['delmsg']="Password Reset. New Password is 12345";
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
                <center>
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color: navy">Registered Learners  </h1>
                    </div>
                </center>
                </div>
                <div class="row" >
                 
                <font color="red" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font>
                <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <center>
                            <div class="panel-heading">
                                <b>MANAGE LEARNERS<b>
                            </div>
                        </center>
                        
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><center>#</center></th>
                                            <th><center>ID NUMBER</center></th>
											<th><center>SURNAME</center></th>
                                            <th><center>NAME</center></th>
                                            <th><center>GENDER</center></th>
											<th><center>CONTACT NO.</center></th>
                                             <th><center>ACTION</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($bd, "select * from learner order by idnum asc");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
    $iname=$row['iname'];
?>


    <tr>
        <td><?php echo $cnt;?></td>
    	<td><?php echo htmlentities($row['idnum']);?></td>
    	<td><?php echo htmlentities($row['surname']);?></td>
        <td><?php echo htmlentities($row['name']);?></td>
    	<td><?php echo htmlentities($row['gender']);?></td>
        <td><?php echo htmlentities($row['phone']);?></td>
        <td>
        <a href="edit-learner.php?id=<?php echo $row['id']?>">
        <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> </a>											
        <a href="manage-learner.php?id=<?php echo $row['idnum']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
        <button class="btn btn-danger">Delete</button>
        </a>
        <a href="manage-learner.php?id=<?php echo $row['idnum']?>&pass=update" onClick="return confirm('Are you sure you want to reset password?')">
        <button type="submit" name="submit" id="submit" class="btn btn-default">Reset Password</button>
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
