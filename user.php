<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
  <meta name = google-signin-client_id" content="645698245666-kvstpa97caglv38lrrfkbbd578ub77qo.apps.googleusercontent.com">
	<title> Login/SignUp</title>
	<link href="stylesheet.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <
</head>

<body>
      <div class="topnav">
        <ul class="nav navbar-nav navbar-inner navbar-center">
          <li> <a  href="Home.php">Home</a> </li>
          <li>  <a href="whatWeCanDoForYou.php">What we can do for you</a> </li>
          <li>  <a href="properties.php">Properties for sale/let</a> </li>
      

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>  <a class="active" href="Login.php">Login/SignUp</a> </li>
           <li> <a href="contactUs.php">Contact Us</a> </li>
        </ul> 
      </div>
		</div>

<div class = "Banner">

       <div class = "BannerIncText">

        <h1>You are now logged in</h1>
        <p1 style ="font-size: 25px"> we're here to help! </p1>

      </div>
    </div>









<?php
session_start();
if (isset($_SESSION['id'])) {
	// Put stored session variables into local PHP variable
	$uid = $_SESSION['id'];
	$usname = $_SESSION['username'];
	$result = "

	 <br /> Welcome: ".$usname. "<br /> Id: ".$uid;
} else {
	$result = "You are not logged in yet";
}
echo $result;
?>


<div class="container text-center">
<a href="Logout.php" class="btn btn-info" role="button">Click here to logout</a>
</div>






