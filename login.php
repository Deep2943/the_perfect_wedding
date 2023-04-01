<?php
require("connection.php");
session_start(); 
extract($_POST);
if(isset($btnlogin))
{
	$error="";
    $nameErr="";
    $passErr="";
	$uemail="";
	$upassword="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["uemail"]))
        {
            $nameErr = "email is required";
        }
        else
        {
            $email_id=$_POST["uemail"];
        }
        if(empty($_POST["upassword"]))
        {
            $passErr = "password is required";
        }
        else
        {
            $password=$_POST["upassword"];
        }
        if(isset($_POST["uemail"]) && isset($_POST["upassword"]))
        {
            $email_id = $_POST["uemail"];
            $password = $_POST["upassword"];        
            if($email_id != '' && $password != '')
            {
                $sql="select * from customer where email_id='".$email_id."' && password='".$password."'";
				$data=mysqli_query($con,$sql) or die(mysqli_error($con));
				$row=mysqli_fetch_array($data);   
				//$_SESSION['Id']=$row['Id'];
				//$id=$row['Id'];                 
                if($row['email_id']==$email_id && $row['password']==$password)
                {
                    $_SESSION['id']=$row['id'];
        			$_SESSION['email_id']=$row['email_id'];
        			$_SESSION['password']=$row['password'];
        			header("location:index.php");
                }
                else
                {
                 	$_SESSION['error']='Invalid username or password';
                    header("Location:login1.php");
                }                    
            }
            else
            {
                //echo "value is null";
            }
        }
        else
        {
            //echo "null value";
        }
    }
}
?>
        