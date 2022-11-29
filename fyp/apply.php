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
$idnum=$_POST['idnum'];
$surname=$_POST['surname'];
$name=$_POST['name'];
$stream=$_POST['stream'];
$hl=$_POST['hl'];
$al=$_POST['al'];
$maths=$_POST['maths'];
$lo=$_POST['lo'];
$ns=$_POST['ns'];
$ss=$_POST['ss'];
$ems=$_POST['ems'];
$tech=$_POST['tech'];
$ca=$_POST['ca'];

$result =mysqli_query($bd, "select * from application where idnum='$idnum'");
$count=mysqli_fetch_array($result);
if($count>0)
{
   $_SESSION['msg']="Learner with this ID Number Already Applied.";
}
else if ($hl < 4){
  $_SESSION['msg']="You do not qualify for Grade 10,Home Language is below 50%";
}
else if ($al < 4){
  $_SESSION['msg']="You do not qualify for Grade 10,Additional Language is below 50%";
}
else if ($maths < 2){
  $_SESSION['msg']="You do not qualify for Grade 10,Mathematics is below 30%";
}
else if ($lo < 2){
  $_SESSION['msg']="You do not qualify for Grade 10,LO is below 30%";
}
else if (($ns < 3 && $ss < 3 && $ems < 3 && $tech < 3 && $ca < 3) || ($ns < 3 && $ss < 3 && $ems < 3 && $tech < 3) || ($ns < 3 && $ss < 3 && $ems < 3 && $ca < 3) || ($ns < 3 && $ss < 3 && $tech < 3 && $ca < 3) || ($ns < 3 && $ems < 3 && $tech < 3 && $ca < 3) || ($ss < 3 && $ems < 3 && $tech < 3 && $ca < 3)){
    $_SESSION['msg']="You do not qualify for Grade 10,your score is low. You need at least 40% in two other subjects";
}
else if ($ns < 2 || $ss < 2 || $ems < 2 || $tech < 2 || $ca < 2){
    $_SESSION['msg']="You do not qualify for Grade 10,your score is low. Level one in any subject is fail";
}
else if (($stream == "SCIENCE") && ($maths < 5 && $maths > 2)){
    $_SESSION['msg']="You do not qualify for SCIENCE, with this mark in MATHS try COMMERCE or GENERAL";
}
else if (($stream == "SCIENCE") && ($maths < 3 && $maths > 1)){
    $_SESSION['msg']="You do not qualify for SCIENCE, with this mark in MATHS try GENERAL only";
}
else if (($stream == "COMMERCE") && ($maths < 3 && $maths > 1)){
    $_SESSION['msg']="You do not qualify for COMMERCE, with this mark in MATHS try GENERAL only";
}
else if (($stream == "SCIENCE") && ($ns < 4)){
    $_SESSION['msg']="You do not qualify for SCIENCE, with this mark in Natural Science try COMMERCE or GENERAL";
}
else if (($stream == "SCIENCE") && ($tech < 3)){
    $_SESSION['msg']="You do not qualify for SCIENCE, with this mark in Technology try COMMERCE or GENERAL";
}
else if (($stream == "COMMERCE") && ($ems < 4)){
    $_SESSION['msg']="You do not qualify for COMMERCE, with this mark in EMS try SCIENCE or GENERAL";
}
else
{
  $ret=mysqli_query($bd, "insert into application(idnum,surname,name,stream,hl,al,maths,lo,ns,ss,ems,tech,ca) values('$idnum','$surname','$name','$stream','$hl','$al','$maths','$lo','$ns','$ss','$ems','$tech','$ca')");

  $_SESSION['msg']="Application Successfully Submitted. Please keep on checking your Application Status!!!";
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
                        <h1 class="page-head-line" style="color:maroon">APPLICATION</h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <center>
                            <b>APPLY FOR GRADE 10<b>
                          </center>
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($bd, "select * from learner where idnum='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="apply" method="post" enctype="multipart/form-data">
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
 <?php } ?>

<div class="form-group">
  <label for="stream">Choose Stream</label>
  <select class="form-control" name="stream" required="required">
    <option value="SCIENCE">SCIENCE</option>
    <option value="COMMERCE">COMMERCE</option>
    <option value="GENERAL">GENERAL</option>
  </select> 
</div></br> 

<div class="form-group">
  <label for="hl">Home Language</label>
  <select class="form-control" name="hl" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="al">Additional Language</label>
  <select class="form-control" name="al" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="maths">Mathematics</label>
  <select class="form-control" name="maths" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="lo">Life Orientation</label>
  <select class="form-control" name="lo" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="ns">Natural Science</label>
  <select class="form-control" name="ns" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="ss">Social Science</label>
  <select class="form-control" name="ss" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="ems">Economic Management Science</label>
  <select class="form-control" name="ems" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="tech">Technology</label>
  <select class="form-control" name="tech" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<div class="form-group">
  <label for="ca">Creative Arts</label>
  <select class="form-control" name="ca" required="required">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select> 
</div>

<center>
  <button type="submit" name="submit" id="submit" class="btn btn-default"><b>APPLY<b></button>
</center>
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
