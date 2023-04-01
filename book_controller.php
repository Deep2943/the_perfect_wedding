<?php
require("connection.php");
extract($_POST);
session_start();
if(isset($btnbook))
{
	$email = $uemail;
	$function = $ufunction;
	$time = $utime;
	$guests = $uguests;
	//$i = $_SESSION['email_id'];
	$sql = "SELECT * FROM booking";
    $q = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($q);
	$checkvenue = $data['venue'];
	$checkdecor = $data['decor'];
	$checkcateror = $data['cateror'];
	$checkdj = $data['music'];
	$checkdate = $data['date_of'];
	/*echo $checkvenue;
	exit();
	echo $checkdate;
	exit();*/
	if($checkvenue!=$uvenue)
	{
		if($checkdecor!=$udecor)
		{
			if($checkcateror!=$ucateror)
			{
				if($checkdj!=$usound)
				{
					if($checkdate!=$udate)
					{
						//print_r($_POST);
						//exit();
						$q = "INSERT INTO booking(email_id,venue,decor,cateror,music,function,date_of,time_of,guests)
						       VALUES('$email','$uvenue','$udecor','$ucateror','$usound','$function','$udate','$time','$guests')";
						//sprint_r($q);
						//exit();
						$data = mysqli_query($con,$q);
						//print_r($data);
						//exit();
						header("location:booking_facility.php");
					}
					else
					{
						header("location:booking_form.php");
						$_SESSION['error']="At this date there is already a booking!";
					}
				}
				else
				{
					header("location:booking_form.php");
				}
			}
			else
			{
				header("location:booking_form.php");
			}
		}
		else
		{
			header("location:booking_form.php");
		}	
	}
	else
	{
		header("location:booking_form.php");
	}
}
?>