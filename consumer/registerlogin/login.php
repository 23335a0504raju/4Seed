<?php
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
	$result = mysqli_query($con, $sql);
	$row = mysqli_num_rows($result);

	if ($row==1) 
	{
	echo "Login Successfull!";
	header("location:consumers.html");

	}
	else
	{
		echo "Login Failed!Invalid phone number or password!!";
	}
}
?>