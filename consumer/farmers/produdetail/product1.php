<?php  
 error_reporting(0);
 $msg="";

$con=mysqli_connect("localhost","root","","4seed");
if(!$con){
	die('error'.mysqli_error($con));
} 
if(isset($_POST['submit'])){

$filename=$_FILES["uploadfile"]['name'];
$tmpname=$_FILES["uploadfile"]['tmp_name'];
$folder='./product/' .$filename;
$proname=$_POST['ProductName'];
$Quant=$_POST['Quantity'];
$pric=$_POST['price'];
$discoun=$_POST['discount'];
$addres=$_POST['address'];


$sql="INSERT INTO qucikadd(prname,quat,pri,discou,addrs) values ('$filename','$proname','$Quant','$pric','$discoun','$addres')";

mysqli_query($con, $sql);
if(move_uploaded_file($tmpname, $folder)){
	echo "image uploaded";
}
else{
	echo "fail to upload"; 
}
}else{
echo"not set";
}
?>