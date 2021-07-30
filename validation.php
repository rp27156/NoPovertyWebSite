<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">NO POVERTY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Access Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signin.html">Sign In (For Old users)</a>
          <a class="dropdown-item" href="signup.html">Register (For New User)</a>
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html"> About </a>
      </li>
    </ul>
  </div>
</nav>

<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if($con){
    echo "\n";
}else 
{
    echo "\n Failed";
}

mysqli_select_db($con,'userinfodb');
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$q = "select * from userinfotable where email = '$email' && pwd = '$pwd'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num ==1){
  header('location:success.php');
}else{
  echo"";
  echo "Invalid Credentials ! Try Again";
}
?> 

</body>
</html>
