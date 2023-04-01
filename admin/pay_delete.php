<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM payment where pay_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:payment.php");
}
else
{
	echo "Data is not deleted!";
}
?>