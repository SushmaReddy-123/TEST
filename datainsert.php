<?php

$con= mysqli_connect('localhost','root','');

if (!$con) 
{
	echo 'Not Connected To database';
}

if(!mysqli_select_db($con,'aura'))
	{
        echo 'Database Not Selected';
	}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$country = $_POST['country'];

$sql = "INSERT INTO members(first_name,last_name,dob,email,phone,gender,address,city,pincode,state,country) VALUES ('$first_name','$last_name','$dob','$email','$phone','$gender','$address','$city','$pincode','$state','$country')";

if (!mysqli_query($con,$sql)) 
{
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
}
else
{
	echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
}	
header("refresh:1; url=register.html");
?>