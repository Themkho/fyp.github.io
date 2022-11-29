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
      $surname=$_POST['surname'];
      $name=$_POST['name'];
      $idnum=$_POST['idnum'];
      $gender=$_POST['gender'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $address=$_POST['address'];

      $result =mysqli_query($bd, "select * from learner where idnum='$idnum'");
      $again =mysqli_query($bd, "select * from admin where idnum='$idnum'");
      $count=mysqli_fetch_array($result);
      $me=mysqli_fetch_array($again);
      if(($count>0) || ($me>0))
      {
        $_SESSION['msg']="This ID Number is Already on the System.";
      }
      else
      {
        $password1="54321";
        $password=md5($password1);
        $ret=mysqli_query($bd, "insert into admin(surname,name,idnum,gender,phone,email,address,password) values('$surname','$name','$idnum','$gender','$phone', '$email','$address','$password')");

        if($ret)
        {
          $_SESSION['msg']="Admin Registered Successfully. Password = 54321.";
        }
        else
        {
          $_SESSION['msg']="Error : Admin Details not Registered.";
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
                        <h1 class="page-head-line" style="color: navy">Admin Registration  </h1>
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
                       <form name="dept" method="post">
  <div class="panel panel-default">
    <center>
      <div class="panel-heading" style="background-color: grey">
        <b>ADMIN DETAILS</b>
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
