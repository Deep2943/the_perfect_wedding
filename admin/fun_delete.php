<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM function where function_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:function.php");
}
else
{
	echo "Data is not deleted!";
}
?>