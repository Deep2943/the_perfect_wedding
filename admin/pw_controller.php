<?php
require("../config/connection.php");
session_start();
extract($_POST);
$email = $_SESSION['email'];
if($changepassword)
{
	$sql = "SELECT * FROM admin WHERE email_id='$email'";
    $q = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($q);
	$datOldPassword = $data['password'];
	/*echo $oldpassword;
	exit();*/
	if($datOldPassword==$oldpassword)
	{
		if($password==$cpassword)
		{

			$sql = "UPDATE admin SET password='$password' WHERE email_id='$email'";
			$q = mysqli_query($con, $sql);
			if($q==true)
			{
			    header("location:admin.php");
			}
			else
			{
				header("location:changepw.php");
			}
		}
		else
		{
            $_SESSION['success']="confirmed password!";
		}
	}
	else
	{
		$_SESSION['error']="wrong password";
	}
}
?>