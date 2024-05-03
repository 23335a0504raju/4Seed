<?php
session_start();
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
$radio=$_POST['radio'];
$pass = $_POST['pwd'];
$cnfpass = $_POST['cnf_pwd'];

if ($_POST['pwd'] != $_POST['cnf_pwd']) 
{
	echo "password doesnt match!";
}
else
{

$exist = "SELECT * FROM farmers WHERE pNum='$phone'";
$res = mysqli_query($con, $exist);
$re = mysqli_num_rows($res);

if ($re>0) 
{
echo "Account already exists!Try to login.";
}
else
{

$sql = "INSERT INTO farmers (f_name,l_name,type,pNum,pwd,cnf_pwd) VALUES ('$firstName','$lastName','$radio','$phone','$pass','$cnfpass')";
$result = mysqli_query($con, $sql);
echo "Registered!";
$_SESSION['Name']= $firstName;
header("location:farmlog.php");


} 
}
}

?>