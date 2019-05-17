    <!DOCTYPE HTML>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>Properties</title>
      <link href="stylesheet.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>


  <div class="topnav">
    <ul class="nav navbar-nav navbar-inner navbar-center">
      <li> <a href="Home.php">Home</a> </li>
      <li>  <a href="whatWeCanDoForYou.php">What we can do for you</a> </li>
      <li> <a class="active" href="Properties.php">Properties for sale/let</a> </li>
    </ul>

      <ul class="nav navbar-nav navbar-right">
        <li>  <a href="Login.php">Login / SignUp</a> </li>
        <li> <a href="ContactUs.php">Contact Us</a> </li>
      </ul> 


    </div>
 <div class = "Banner">

       <div class = "BannerIncText">

        <h1>Properties</h1>
        <p1 style ="font-size: 25px"> we're here to help! </p1>

      </div>

    </div>
<div class="col-md-12" style="margin-top: 25px;">

  <div class="col-md-4" style="text-align: center; background-color: grey; border-color: black; border-style: solid; width: 450px;">
    <h1> Properties to Buy </h1>

<P> Property Type </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>

<P> No. Bedrooms </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>


<P> Location </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>


<P> Price  </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>

<p> Submit to view </p>
<input class="btn btn-primary" type="Submit" name="Submit">
</div>


<div class="col-md-4" style="text-align: center; background-color: grey; border-color: black; border-style: solid; width: 500px; margin-left: 10px;">
  <h1>  Properties to let </h1>

<P>  Property type </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>


<P> No. Bedrooms </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>


<P> Location </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>


<P> Price pcp </P>
  <select>
  <option value="volvo">Semi detached </option>
  <option value="saab">Detached</option>
  <option value="mercedes">Bunglaow</option>
  <option value="audi">Terrece</option>
</select>


<p> Submit to view </p>
<input class="btn btn-primary" type="Submit" name="Submit">
</div>


<form action="Enquiry.php" method="POST">
<div class="col-md-4" style="text-align: center; background-color: grey; border-color: black; border-style: solid; width: 500px; margin-left: 10px;">
  
<h1> Make an enquiry </h1>

  <label for="name">Customer Name</label>
  <input type="text" id="name" name="name" placeholder="Your name..." required>

  <label for="conversiontype">Conversion Type</label>
  <input type="text" id="conversiontype" name="conversiontype" placeholder="Example: Office Block-to apartments, house into flat apartments" required>

  <label for="propertytype">Property Type</label>
  <input type="text" id="propertytype" name="propertytype" placeholder="The best number to contact you on..." required>

  <label for="phonenumber">Phone Number*</label>
  <input type="text" id="phonenumber" name="phonenumber" placeholder="The best number to contact you on..." required> 

<p> Submit to view </p>
<input class="btn btn-primary" type="Submit" name="Submit">
</div>
</div>
</form>

  </body>
  </html>
