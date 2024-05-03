<html>
<head>
<link rel="stylesheet" href="pay.css"/>
</head>
<body>
<div class="pay-details">










 <?php  
session_start();
      
            $con=mysqli_connect("localhost","root","","4seed");
if(!$con){
  die('error'.mysqli_error($con));
} 


//for name
   $result = mysqli_query($con, "SELECT * FROM consumers");



while ($row = mysqli_fetch_array($result)) {
      if($row['phone']==$_SESSION['phonenumber']){
    
      $_SESSION["nam"]=$row["first_name"];

      $nam=$row["first_name"];
       $phone=$row["phone"];

         break;
    }
    }

 $result = mysqli_query($con, "SELECT * FROM orders");



while ($row = mysqli_fetch_array($result)) {
      if($row["consumername"]==$nam){

   $_SESSION["conname"]=$row["consumername"];
   $_SESSION["ordername"]= $row["ordername"];
        $_SESSION["orderprice"]=  $row["orderprice"];
        $_SESSION["orderdiscount"]= $row["orderdiscount"];
         $_SESSION["orederdetail"]=$row["orderdetail"];

}

}



   $result = mysqli_query($con, "SELECT * FROM address");



while ($row = mysqli_fetch_array($result)) {
      if($row['fname']==$nam){
    $city=$row["city"];
    $state=$row["state"];
    $house=$row["house"];
     $area=$row["area"];
     
         break;
    }
    }

?>



    <form action="" method="post">
        <h3 class="heading">Order details</h3>
        <br>
        <br>
        <div class="form-input">
        <input type="text" class="no-outline" name="oname" placeholder="Order Name : <?php echo $_SESSION["ordername"];?>" readonly><br>
        </div>
    
        <br>
        <div class="form-input">
        <input type="text" class="no-outline"  name="oquan" placeholder="Quantity :<?php echo $_SESSION["orederdetail"];?>" readonly><br>
        </div>
        <br>
        <div class="form-input">
        <input type="text" class="no-outline" name="oprice" placeholder="Price :<?php echo $_SESSION["orderprice"];?> " readonly><br>
        </div>
        <br>
        
        <div class="form-input">
        <input type="text" class="no-outline" name="odisc" placeholder="Discount : <?php echo $_SESSION["orderdiscount"];?>" readonly><br>
        </div>
        <br>
        </div>
        

       
</form>













    
<form>
<h3 class="heading">Contact details</h3>
<br>
<br>
<div class="form-input">
<input type="text" class="no-outline" name="fullname" placeholder="Name :<?php echo $nam;?>" readonly><br>
</div>

<br>
<div class="form-input">
<input type="text" class="no-outline"  name="mobile" placeholder="mobile Number :<?php echo $phone;?>" readonly><br>
</div>
<br>


<div class="form-input">
<h3 class="heading"><i class="fa fa-address-card-o"></i>Address</h3>
<br><br>
<input type="text" class="no-outline" name="houseNo" placeholder="House no./Building name :<?php echo $house;?> " readonly><br>
</div>
<br>

<div class="form-input">
<input type="text" class="no-outline" name="area" placeholder="Roadname/Area/Colony :<?php echo $area;?>" readonly><br>

</div>
<br>

<br>
<div class="form-input">
<input type="text" class="no-outline" name="city" placeholder="City :<?php echo $city;?>" readonly><br>

</div>
<br>
<div class="form-input">
<input type="text"class="no-outline"  name="state" placeholder="State :<?php echo $state;?> " readonly><br>
</div>
<br>
</div>
<a href="orderinsert.php">  <input type="button" class="button" onclick="" name="continue" value="Continue"></a>
</form>
</body>
</html>

