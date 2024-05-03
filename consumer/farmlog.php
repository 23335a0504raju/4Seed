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
	$sql = "SELECT * FROM farmers WHERE pNum='$user' and pwd='$pwd'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_num_rows($result);

	if ($row==1) 
	{
	echo "Login Successfull!";
	$_SESSION['phone']= $user;
	$_SESSION['pass']=$pwd;
header("location:language.html");

	}
	else
	{
		echo "Login Failed!Invalid phone number or password!!";
	}
}
?>