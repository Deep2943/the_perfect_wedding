<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM decoration where decor_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:decoration.php");
}
else
{
	echo "Data is not deleted!";
}
?>