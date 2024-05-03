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
$addre=$_POST['address1'];
$selle=$_POST['seller'];
session_start();
      
         

//for name
   $result = mysqli_query($con, "SELECT * FROM farmers");



while ($row = mysqli_fetch_array($result)) {
      if($row['pNum']==$_SESSION['phone']){
    
      $nam=$row["f_name"];
         break;
    }
    }



$sql="INSERT INTO product(filename,proname,quant,pric,discoun,addres,addre,selle,farmname) values ('$filename','$proname','$Quant','$pric','$discoun','$addres','$addre','$selle','$nam')";

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
 $result = mysqli_query($con, "SELECT * FROM product");
?>
 
  
