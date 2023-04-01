<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM feedback where feedback_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:feedback.php");
}
else
{
	echo "Data is not deleted!";
}
?>