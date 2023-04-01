<?php
require("../config/connection.php");
extract($_GET);
$q="DELETE FROM budget where budget_id='$id'";
$q1 = mysqli_query($con,$q);
if($q1 > 0)
{
	header("Location:budget.php");
}
else
{
	echo "Data is not deleted!";
}
?>