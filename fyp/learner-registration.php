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
$surname=$_POST['surname'];
$name=$_POST['name'];
$idnum=$_POST['idnum'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$gsurname=$_POST['gsurname'];
$gname=$_POST['gname'];
$gidnum=$_POST['gidnum'];
$ggender=$_POST['ggender'];
$gphone=$_POST['gphone'];
$gemail=$_POST['gemail'];
$gaddress=$_POST['gaddress'];
$relationship=$_POST['relationship'];

$result =mysqli_query($bd, "select * from learner where idnum='$idnum'");
$again =mysqli_query($bd, "select * from admin where idnum='$idnum'");
$check =mysqli_query($bd, "select * from learner where idnum='$gidnum'");
$count=mysqli_fetch_array($result);
$me=mysqli_fetch_array($again);
$ck=mysqli_fetch_array($check);
if(($count>0) || ($me>0))
{
  $_SESSION['msg']="This ID Number is Already on the System.";
}
else
{
  if($idnum==$gidnum)
  {
    $_SESSION['msg']="Learner cannot guide him/herself";
  }
  else if($ck>0)
  {
    $_SESSION['msg']="Learner cannot guide other learner";
  }
  else
  {
    $password1="12345";
    $password=md5($password1);
    $ret=mysqli_query($bd, "insert into learner(surname,name,idnum,gender,phone,email,address,gsurname,gname,gidnum,ggender,gphone,gemail,gaddress,relationship,password) values('$surname','$name','$idnum','$gender','$phone','$gemail','$address','$gsurname','$gname','$gidnum','$ggender','$gphone','$gemail','$gaddress','$relationship','$password')");

    if($ret)
    {
      $_SESSION['msg']="Learner Registered Successfully. Password = 12345.";
    }
    else
    {
      $_SESSION['msg']="Error : Learner Details not Registered.";
    }
  }
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
                        <h1 class="page-head-line" style="color: navy">Learner Registration  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                          <center>
                            <div class="panel-heading" style="background-color: maroon; color: white">
                              <b>FILL IN ALL THE FORM WITH CORRECT DETAILS</b>
                            </div>
                          </center>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
  <form name="learner-registration" enctype="multipart/form-data" method="post" action="learner-registration.php">
  <div class="panel panel-default">
    <center>
      <div class="panel-heading" style="background-color: grey">
        <b>LEARNER DETAILS</b>
      </div>
    </center>
  </div>

  <div class="form-group">
    <label for="surname">Surname  </label>
    <input type="text" maxlength="50" class="form-control" id="surname" name="surname" placeholder="Enter Surname" required />
  </div>
  
  <div class="form-group">
    <label for="name">Name  </label>
    <input type="text" maxlength="50" class="form-control" id="name" name="name" placeholder="Enter Name" required />
  </div>

  <div class="form-group">
    <label for="idnum">ID Number   </label>
    <input type="text" maxlength="13" minlength="13" class="form-control" id="idnum" name="idnum" placeholder="Enter ID Number" required />
  </div>

  <div class="form-group">
  <label for="gender">Choose Gender</label>
  <select class="form-control" name="gender" required="required">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select> 
</div>
  
  <div class="form-group">
    <label for="phone">Contact Number  </label>
    <input type="integer" maxlength="10" minlength="10" class="form-control" id="phone" name="phone" placeholder="Enter Contact Number" required />
  </div>

  <div class="form-group">
    <label for="email">Email (If available)</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>

  <div class="form-group">
    <label for="address">Residential Address  </label>
    <input type="text" maxlength="50" class="form-control" id="address" name="address" placeholder="Enter Address" required />
  </div><br><br>

  <div class="panel panel-default">
    <center>
      <div class="panel-heading" style="background-color: grey">
        <b>GUARDIAN DETAILS</b>
      </div>
    </center>
  </div>

  <div class="form-group">
    <label for="gsurname">Surname  </label>
    <input type="text" maxlength="50" class="form-control" id="gsurname" name="gsurname" placeholder="Enter Surname" required />
  </div>
  
  <div class="form-group">
    <label for="gname">Name  </label>
    <input type="text" maxlength="50" class="form-control" id="gname" name="gname" placeholder="Enter Name" required />
  </div>

  <div class="form-group">
    <label for="gidnum">ID Number   </label>
    <input type="text" maxlength="13" minlength="13" class="form-control" id="gidnum" name="gidnum" placeholder="Enter ID Number" required />
  </div>

  <div class="form-group">
    <label for="ggender">Choose Gender</label>
    <select class="form-control" name="ggender" required="required">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select> 
  </div>
  
  <div class="form-group">
    <label for="gphone">Contact Number  </label>
    <input type="integer" maxlength="10" minlength="10" class="form-control" id="gphone" name="gphone" placeholder="Enter Contact Number" required />
  </div>

  <div class="form-group">
    <label for="gemail">Email (If available)</label>
    <input type="email" class="form-control" id="gemail" placeholder="Enter email" name="gemail">
  </div>

  <div class="form-group">
    <label for="gaddress">Residential Address  </label>
    <input type="text" maxlength="50" class="form-control" id="gaddress" name="gaddress" placeholder="Enter Address" required />
  </div>

  <div class="form-group">
  <label for="relationship">Relationship to Learner</label>
  <select class="form-control" name="relationship" required="required">
    <option value="Father">Father</option>
    <option value="Mother">Mother</option>
    <option value="Uncle">Uncle</option>
    <option value="Aunt">Aunt</option>
    <option value="Grand Father">Grand Father</option>
    <option value="Grand Mother">Grand Mother</option>
  </select> 
</div></br></br>

  <center>
    <button type="submit" name="submit" id="submit" class="btn btn-default"><b>SUBMIT<b></button>
  </center>
</form>
                            </div>
                            </div>
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
