<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnedit))
	{
		$q = "UPDATE customer SET
				name = '$username',
				address = '$uaddress',
				phone_no = '$uphone',
				email_id = '$uemail',
				password = '$upassword' WHERE email_id = '$editID'";
		$data = mysqli_query($con,$q);
		if($data > 0)
		{
			header("Location:profile.php");
		}
		else
		{
			echo "Data is not Updated.";
		}
	}
?>