<?php
require("connection.php");
extract($_POST);

if(isset($btnfbook))
{
	$email = $uemail;
	$cake = $ucake;
	$function = $ufunction;
    //$i = $_SESSION['email_id'];
	$sql = "SELECT * FROM extra_facility";
    $q = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($q);
    $checkmakeup = $data['makeup'];
	$checkphoto = $data['photo'];
	$checkmehandi = $data['mehandi'];
	$checkdate = $data['date_of'];
	/*echo $checkvenue;
	exit();
	echo $checkdate;
	exit();*/
	if($checkmakeup!=$umakeup)
	{
		if($checkphoto!=$uphoto)
		{
			if($checkmehandi!=$umehandi)
			{
				if($checkdate!=$udate)
				{
					//print_r($_POST);
					//exit();
					$q = "INSERT INTO extra_facility(email_id,makeup,photo,mehandi,cake,function,date_of)
	       				VALUES('$email','$umakeup','$uphoto','$umehandi','$cake','$function','$udate')";
					//sprint_r($q);
					//exit();
					$data = mysqli_query($con,$q);
					//print_r($data);
					//exit();
					header("location:pay_form.php");
				}
				else
				{
					header("location:booking_facility.php");
					$_SESSION['error']="At this date there is already a booking!";
				}
			}
			else
			{
				header("location:booking_facility.php");
			}
		}
		else
		{
			header("location:booking_facility.php");
		}	
	}
	else
	{
		header("location:booking_facility.php");
	}
}
?>