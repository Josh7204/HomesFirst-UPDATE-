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

        <h1>Login</h1>
        <p1 style ="font-size: 25px"> You have now logged out  </p1>

      </div>
    </div>




<?php
session_start();
session_destroy(); 
// Check if the session is set and return the appropriate message
if (isset($_SESSION['username'])) { 
        $msg = "You are now logged out";
} else {
	$msg = "<h2>Could not log you out</h2>";
} 
?> 
<html>
<body>
<?php echo $msg; ?><br>
<div class="container text-center">
            <a href="home.php" class="btn btn-info" role="button">Home</a>
</div>

</body>
</html>