<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM catering where catering_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:catering.php");
}
else
{
	echo "Data is not deleted!";
}
?>