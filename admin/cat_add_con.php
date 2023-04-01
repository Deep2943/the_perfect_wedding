<?php
require("../config/connection.php");
extract($_POST);

if(isset($btnsubmit))
{
    $name = $username;
    $address = $caddress;
    $phone = $cphone;

// print_r($_POST);
// exit();
$q = "INSERT INTO catering(catering_name,address,phone)
       VALUES('$name','$address','$phone')";

//sprint_r($q);
//exit();

$data = mysqli_query($con,$q);
//print_r($data);
//exit();
}
?>