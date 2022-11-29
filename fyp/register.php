<?php
session_start();
include('includes/config.php');

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
$password1=$_POST['password1'];
$password2=$_POST['password2'];

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
  if($idnum==$gidnum)
  {
    $_SESSION['msg']="You cannot guide yourself";
  }
  else if($password1!=$password2)
  {
    $_SESSION['msg']="The two passwords do no match";
  }
  else
  {
    $password=md5($password1);
    $ret=mysqli_query($bd, "insert into learner(surname,name,idnum,gender,phone,email,address,gsurname,gname,gidnum,ggender,gphone,gemail,gaddress,relationship,password) values('$surname','$name','$idnum','$gender','$phone','$email','$address','$gsurname','$gname','$gidnum','$ggender','$gphone','$gemail','$gaddress','$relationship','$password')");

    if($ret)
    {
      $_SESSION['msg']="You have Registered Successfully";
      $extra="my-profile.php";
      $_SESSION['login']=$_POST['idnum'];
      $_SESSION['id']=$num['id'];
      $_SESSION['surname']=$num['surname'];
      $_SESSION['name']=$num['name'];
      $host=$_SERVER['HTTP_HOST'];
      $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
      header("location:http://$host$uri/$extra");
      exit();
    }
    else
    {
      $_SESSION['msg']="Error : Learner Details not Registered";
    }
  }
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>FUTURE UNLOCK</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
    background: rgb(50, 100, 100);
    background-attachment: fixed;
  }
  </style>
</head>
<body>
  <center>
    <h5 id="h5">FUTURE UNLOCK</h5>
    <font color="navy" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
    <div class="settings"></div>
    <h6 id="h6">LEARNER PARTICULARS</h6>
     
    <form method="post" enctype="multipart/form-data" action="register.php">
    <div class="field">
      <div class="input">
        <label>Surname</label>
        <input type="text" maxlength="50" placeholder="Enter your surname" name="surname" required>
      </div>
      <div class="input">
        <label>Name</label>
        <input type="text" maxlength="50" placeholder="Enter your name" name="name" required>
      </div>
      <div class="input">
        <label>ID Number</label>
        <input type="integer" maxlength="13" minlength="13" placeholder="Enter your id number" name="idnum" required>
      </div>
      <div class="input">
        <label for="gender">Choose Gender</label>
        <select class="form-control" name="gender" required="required">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select> 
      </div>
      <div class="input">
        <label>Contact Number</label>
        <input type="integer" minlength="10" maxlength="10" placeholder="Enter phone number" name="phone" required>
      </div>
      <div class="input">
        <label>Email (If available)</label>
        <input type="email" placeholder="Enter email" name="email">
      </div>
      <div class="input">
        <label>Residential Address</label>
        <input type="text"maxlength="100"  placeholder="Enter your Physical Address" name="address" required>
      </div>
    </div>
    <div class="settings"></div>
    <h6 id="h6">GUARDIAN PARTICULARS</h6>
    <div class="field">
      <div class="input">
        <label>Surname</label>
        <input type="text" maxlength="50" placeholder="Enter Guardian's surname" name="gsurname" required>
      </div>
      <div class="input">
        <label>Name</label>
        <input type="text" maxlength="50" placeholder="Enter Guardian's name" name="gname" required>
      </div>
      <div class="input">
        <label>ID Number</label>
        <input type="integer" maxlength="13" minlength="13" placeholder="Enter Guardian's id number" name="gidnum" required>
      </div>
      <div class="input">
        <label for="ggender">Choose Gender</label>
        <select class="form-control" name="ggender" required="required">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select> 
      </div>
      <div class="input">
        <label>Contact Number</label>
        <input type="integer" minlength="10" maxlength="10" placeholder="Guardian's phone number" name="gphone" required>
      </div>
      <div class="input">
        <label>Email (If available)</label>
        <input type="email" placeholder="Enter email" name="gemail">
      </div>
      <div class="input">
        <label>Residential Address</label>
        <input type="text"maxlength="100"  placeholder="Guardian's Physical Address" name="gaddress" required>
      </div>
      <div class="input">
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
    </div>
    <div class="settings"></div>
    <h6 id="h6">PASSWORD CREATION</h6>
    <div class="field">
      <div class="input">
        <label>Password</label>
        <input type="password" minlength="5" placeholder="Enter your password" name="password1" required>
      </div>
      <div class="input">
        <label>Confirm Password</label>
        <input type="password" minlength="5" placeholder="Confirm your password" name="password2" required>
      </div>
    </div>
    </br>
    <div class="input">
      <button type="submit" name="submit" class="btn">SUBMIT</button>
    </div>
    </form>
    </br>
    <p>
      Already a member? <a href="login.php">Log in</a>
    </p>
    </br>
  </center>
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>