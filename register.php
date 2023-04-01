<?php
require("connection.php");
extract($_POST);

if(isset($btnsubmit))
{
	$name = $username;
	$address = $uaddress;
	$phone = $uphone;
	$email = $uemail;
	$password = $upassword;

// print_r($_POST);
// exit();
$q = "INSERT INTO customer(name,address,phone_no,email_id,password)
       VALUES('$name','$address','$phone','$email','$password')";
//sprint_r($q);
//exit();
$data = mysqli_query($con,$q);
//print_r($data);
//exit();
header("location:login1.php");
}
?>