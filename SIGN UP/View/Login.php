<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
</head>
<style>
div#LoginBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto}
body{min-height: 100vh;
  background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('https://i.imgur.com/Kce5BG6.gif');
	background-position: center;
  background-repeat:no-repeat; background-size:cover}
</style>
<body>

<h6 style="font-size:10px; font-family: verdana; color: white"><?php include '../Header/header.php';?></h6>

<div id="LoginBlock">

<div style="background-image: url('../Images/F2.jpg');color:black; padding:20px;">

<div style="background-color: #0A0F48;color:#00E9FF; padding:0px;">

<?php

include('../Control/Logincheck.php');

if(isset($_SESSION['fname'])){
header("location: LoginResult.php");
}
?>
</div>

<div style="background-color:#0A0F48;color:#00E9FF;padding:0px;font-family:calibri">
<h1>Login</h1>
</div>
<b>
<div style="background-image: url('../Images/F1.jpg');color:#B6FF00;padding:1px;">
<h2><marquee direction=left>No Account? Create your Account now!</marquee></h2>
</div>
<div style="background-image: url('../Images/F1.jpg');color:#00FFA8;padding:20px;font-size:18px">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
  <Label>First Name:</label><br> <?php echo $error;?>
  <input type="text" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php echo $error;?>
  <input type="text" name="lname" ><br><br>
  <Label>Password:</Label><br> <?php echo $error;?>
  <input type="password" name="password" ><br><br>
  <input type="submit" name="submit" style="background-color:red; color:white; border:2px solid white; cursor:pointer" value="Submit">

  <style>
h4{color:red}
h5{color:#00E9FF}
h6{color:white}
</style>

  <?php
  /*
  if (!(empty($fname)||(!preg_match("/^[a-zA-Z-' ]*$/",$fname))))
  {
    echo "<h4 style='color:orange'>Your Input:</h4>";
    echo "<h4>First Name:</h4>";
    echo  "<h5>$printfname</h5>";
  }

  if (!(empty($lname)||(!preg_match("/^[a-zA-Z-' ]*$/",$lname))))
  {
    echo "<h4>Last Name:</h4>";
    echo  "<h5>$printlname</h5>";
  }

  if (!(empty($password)))
  {
    echo "<h4>Password:</h4>";
    echo  "<h5>$printpassword</h5>";

  }
  */
?>

</form> 
<br>
<a href="Registration.php" style= "color:#00E9FF; font-family:calibri">Registration</a>
<a href="Account.php" style= "color:#00E9FF; font-family:calibri">Back</a><br><br>
</div>
</b>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include '../Footer/footer.php';?></h6>

</div>
</body>
</html>