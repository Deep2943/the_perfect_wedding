<?php
	require("../config/connection.php");
	extract($_POST);

	if(isset($btnupdate))
	{
		$sql = "UPDATE customer SET
				name = '$username',
				address = '$uaddress',
				phone_no = '$uphone',
				email_id = '$uemail',
				password = '$upassword' WHERE cust_id = '$editID'";
		$q1 = mysqli_query($con, $sql);
		if($q1 > 0)
		{
			header("Location:users.php");
		}
		else
		{
			echo "Data is not Updated.";
		}
	}
?>