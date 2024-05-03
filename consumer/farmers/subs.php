<?php
$con = mysqli_connect("localhost","root","","4seed");
if (!$con) 
{
die("Error".mysqli_error($con));
}


if (isset($_POST['submit'])) 
{
	$phn = $_POST['subscribe'];

	$sql="INSERT INTO farmers (subs) VALUES('$phn')"; 
	$q = mysqli_query($con, $sql);

	if($q==true){
		header("location:farmer.html");
	}
}
?>