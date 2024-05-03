<?php

$con = mysqli_connect("localhost","root","","4seed");
if (!$con) 
{
 	die("Error.Couldn't connect!".mysqli_error($con));
}

if (isset($_POST['submit'])) 
{

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['phone'];
$pass = $_POST['pwd'];
$cnfpass = $_POST['cnf_pwd'];

if ($_POST['pwd'] != $_POST['cnf_pwd']) 
{
	echo "password doesnt match!";
}
else
{

$exist = "SELECT phone FROM consumers WHERE phone='$phone'";
$res = mysqli_query($con, $exist);
$re = mysqli_num_rows($res);

if ($re>0) 
{
echo "Account already exists!Try to login.";
}
else
{

$sql = "INSERT INTO consumers (first_name,last_name,phone,password,cnf_password) VALUES ('$firstName','$lastName','$phone','$pass','$cnfpass')";
$result = mysqli_query($con, $sql);
header("Location:pro/consumer/consumers.html");
echo "Registered!";

} 
}
}

?>