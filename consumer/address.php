<?php

$msg="";

$con=mysqli_connect('localhost','root','','4seed');
if(!$con){
  die("error".mysqli_error($con));
  }
  if(isset($_POST['submit'])){
  	
$fname=$_POST['fname'];

$pnumber=$_POST['pnumber'];

$pcode=$_POST['pcode'];

$stt=$_POST['stt'];

$cty=$_POST['cty'];

$dno=$_POST['dno'];

$col=$_POST['col'];

$radio=$_POST['radio'];


$sql="INSERT INTO consaddress(firname,phnumb,pincod,statt,citt,dono,colo,user) values('$fname','$pnumber','$pcode','$stt','$cty','$dno','$col','$radio')";

$res=mysqli_query($con, $sql);
if($res==true){
  echo "details uploaded";
  header("location:payment.html");
}
else{
  echo "fail to upload"; 
}
}else{
echo"not set";
}
?>