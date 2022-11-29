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
    mysqli_query($bd, "delete from application where idnum = '".$_GET['id']."'");
    $_SESSION['delmsg']="Application record deleted!!!";
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
                        <h1 class="page-head-line" style="color: navy">Process Application  </h1>
                    </div>
                </center>
                </div>
                <div class="row" >
                 
                <font color="red" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font>
                <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <center>
                            <div class="panel-heading">
                                <b>GRADE 10 APPLICATIONS<b>
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
                                            <th><center>STREAM</center></th>
                                            <th><center>STATUS</center></th>
                                             <th><center>ACTION</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($bd, "select * from application order by idnum asc");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['idnum']);?></td>
                                            <td><?php echo htmlentities($row['surname']);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['stream']);?></td>
                                            <td><?php echo htmlentities($row['status']);?></td>
                                            <td>
<a href="process.php?id=<?php echo $row['id']?>">
<button class="btn btn-primary"><i class="fa fa-edit "></i> Process</button> </a>                                          
<a href="application-manager.php?id=<?php echo $row['idnum']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
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
