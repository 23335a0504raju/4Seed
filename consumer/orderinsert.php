<?php
session_start();

            $con=mysqli_connect("localhost","root","","4seed");
if(!$con){
  die('error'.mysqli_error($con));
} 

 $co=$_SESSION["conname"];
   $on=$_SESSION["ordername"];
       $op= $_SESSION["orderprice"];
        $od=$_SESSION["orderdiscount"];
        $ode= $_SESSION["orederdetail"];

$sql="INSERT INTO orders(consumername, ordername, orderprice, orderdiscount, orderdetail) VALUES('$co','$on','$op','$od','$ode')";

if(mysqli_query($con,$sql)){

	echo"done";
}else{
echo"nope";

}
?>