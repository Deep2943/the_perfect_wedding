<?php
require("connection.php");
extract($_POST);
if(isset($btnfeed))
{
	$name = $feedname;
	$feed = $feedback;
}
// print_r($_POST);
// exit();
$q = "INSERT INTO feedback(fb_details,cust_name)
       VALUES('$feedback','$feedname')";
// print_r($q);
//exit();
$data = mysqli_query($con,$q);
//print_r($data);
//exit();
?>