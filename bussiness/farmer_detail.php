<?php
error_reporting(0);
 $msg="";

$con=mysqli_connect("localhost","root","","4seed");
if(!$con){
	die('error'.mysqli_error($con));
} 
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$phone=$_POST['Phone'];
$pincode=$_POST['Pincode'];
$state=$_POST['State'];
$city=$_POST['City'];
$house=$_POST['House'];
$area=$_POST['Road'];
$acres=$_POST['Cultivate'];
$query= "INSERT into farmer_details (f_name,phnum,pincode,state,city,house,Area,land) VALUES ('$name','$phone','$pincode','$state','$city','$house','$area','$acres')";
}
$run=mysqli_query($con,$query);
if($run==true)
{
echo"Form submitted successfully";
header("location:landlords.php");

}
else
{
echo"Form not submitted";
}
?>