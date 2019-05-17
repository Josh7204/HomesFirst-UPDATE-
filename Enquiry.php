<?php

include_once 'hf.php';

	$name = $_POST['name'];
	$conversion = $_POST['conversiontype'];
	$property = $_POST['propertytype'];
	$phone = $_POST['phonenumber'];


$sql = "Insert INTO enquire_about_a_develeopment (Customer_name, Type_Of_Conversion, Commercial_Or_Residential_property, Location) VALUES ('$name', '$conversion', '$property', '$phone');";

mysqli_query($conn, $sql);

?>