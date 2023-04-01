<?php
include "connection.php";
session_start();
extract($_POST);

if(isset($_POST['uploadFileBTN']))
{
	$count=0;
	/*echo $_FILES["imgFile"]["name"];
	exit();*/
	$errors = array();
	$extension = array("jpg","jpeg","png");
	$ext = pathinfo($_FILES["imgFile"]["name"], PATHINFO_EXTENSION);
	if(!in_array($ext, $extension))
	{
		$count++;
		$_SESSION['errorFile']="File type is invalid, Please select jpg, jpeg or png only.";
	}
	if($count == 0)
	{
		$temp = $_FILES["imgFile"]["name"];
		$imgFile = round(microtime(true)).".".$temp;

		move_uploaded_file($_FILES["imgFile"]["tmp_name"], "img/" . $imgFile); 
		//$m->set_data("definationName",$definationName);
		
		$q = "INSERT INTO photo(name) VALUES('$imgFile')";

		$data = mysqli_query($con,$q);
		$_SESSION['success']="Image is inserted";

		header("Location:gallery.php");
	}
	else
	{    			
		header("Location:file_upload.php");
	}
}

?>