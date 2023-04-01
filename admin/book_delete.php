<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM booking where booking_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:booking.php");
}
else
{
	echo "Data is not deleted!";
}
?>