<?php
session_start();
$con = mysqli_connect("localhost","root","","4seed");
if (!$con) 
{
	die("Error!".mysqli_error($con));
}

$user=$_POST['phone'];
$pwd=$_POST['pass'];

if (isset($_POST['login'])) 
{
	$sql = "SELECT * FROM consumers WHERE phone='$user' and password='$pwd'";
	$resut = mysqli_query($con, $sql);
	$row = mysqli_num_rows($resut);

	if ($row==1) 
	{
	echo "Login Successfull!";
	$_SESSION['phonenumber']=$user;
	header("location:consumers.html");
    
	}
	else
	{
		echo "Login Failed!Invalid phone number or password!!";
	}
}
?>