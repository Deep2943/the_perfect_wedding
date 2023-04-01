<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM venue where venue_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:venue.php");
}
else
{
	echo "Data is not deleted!";
}
?>