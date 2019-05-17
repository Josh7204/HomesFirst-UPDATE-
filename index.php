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

        <h1>that username or password combination was incorrect.
    <br /> Please try again.</h1>
        <p1 style ="font-size: 25px"> we're here to help! </p1>

      </div>
    </div>


      <div class ="MainBodyText">
      <div class="col-md-12">


<?php
session_start();
 
if (isset($_POST['username'])) {
        
        // Include the databas connection script
  include_once("dbConnect.php");
  
  // Set the posted data from the form into local variables
        $usname = strip_tags($_POST['username']);
  $paswd = strip_tags($_POST['password']);
  
  $usname = mysqli_real_escape_string($dbCon, $usname);
  $paswd = mysqli_real_escape_string($dbCon, $paswd);
  
  $paswd = md5($paswd); // using md5 just for testing purposes
  
  $sql = "SELECT id, username, password FROM login_systerm WHERE username = '$usname' AND activated = '1' LIMIT 1";
  $query = mysqli_query($dbCon, $sql);
  $row = mysqli_fetch_row($query);
  $uid = $row[0];
  $dbUsname = $row[1];
  $dbPassword = $row[2];
  
  // Check if the username and the password they entered was correct
  if ($usname == $dbUsname && $paswd == $dbPassword) {
    // Set session 
    $_SESSION['username'] = $usname;
    $_SESSION['id'] = $uid;
    // Now direct to users feed
    header("Location: user.php");
  } else {
    echo "Try Again";
  }
  
}
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HomesFirst</title>
<style type="text/css">
html {
  font-family: Verdana, Geneva, sans-serif;
}
h1 {
  font-size: 24px;
  text-align: center;
}
#wrapper {
  position: absolute;
  width: 100%;
  top: 30%;
  margin-top: -50px;/* half of #content height*/
}
#form {
  margin: auto;
  width: 200px;
  height: 100px;
}
</style>
</head>
 
<body>
<div id="wrapper">

<form id="form" action="index.php" method="post" enctype="multipart/form-data">
Username: <input type="text" name="username" /> <br />
Password: <input type="password" name="password" /> <br />
<input type="submit" value="Login" name="Submit" />
</form>
</body>
</html>