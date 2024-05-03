<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  

    <style> 
 * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html {
    font-size: 10px;
    font-family:sans-serif;
    scroll-behavior: smooth;
}
a {
    text-decoration: none;
}
.container {
    min-height: 100vh;
    width: 100%;
    padding: 0px;
    padding-right: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
}
img {
    height: 100vh;
    width: 100%;
    object-fit: cover;
}
p {
    color: black;
    font-size: 1.4rem;
    margin-top: 5px;
    line-height: 2.5rem;
    font-weight: 300;
    letter-spacing: 0.05rem;
}
.section-title {
    font-size: 4rem;
    font-weight: 300;
    color: black;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    text-align: center;
}
.section-title span {
    color: #8d021f;
    
}


#start {
    background-image: url("images/veg.jpeg");
    background-size: cover;
    background-position: top center;
    position: relative;
    z-index: 1;
}
#start::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.7;
    z-index: -1;
}
#start h2
{
    color: white;
    font-size: 3rem;
    display: flex;
    margin-left: 300px; 
    margin-bottom: 10px;
    text-transform: uppercase;
    font-weight: 30rem;
}
.box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}
.box-container .box h1{
    color: white;
    font-size: 1rem;
    display: flex;
    flex-direction:row;
    text-transform: uppercase;
    padding: 10px;
    margin-right: 300px;

}

.box-container .box{
  flex:1 1 30rem;
  text-align: center;
  padding:5rem;
  border:.2rem solid rgba(0,0,0,.3);
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  box-shadow: 0px 0px 18px 0 #0000002c;
}

#start h1{
    color: white;
}
</style>
</head>

<body>

  <section id="start">
    <div class="home container">
        <div>
<h2>ORDERS</h2>
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
    
      $nam=$row["first_name"];
         break;
    }
    }

 $result = mysqli_query($con, "SELECT * FROM orders");


while ($row = mysqli_fetch_array($result)) {
      if($row["consumername"]==$nam){

       echo'  <div class="box-container">';

       echo' <div class="box">';
echo'<h1>Product-name: '.$row["ordername"].'</h1>';
echo'<h1>Product-price: '.$row["orderprice"].'</h1>';
echo'<h1>Product-discount: '.$row["orderdiscount"].'</h1>';
echo'<h1>address: '.$row["orderdetail"].'</h1>';

echo"</div>";
echo"</div>";
}

}
/*<h1>Product-address</h1>
<h1>Product-price</h1>
<h1>Ready to dispatch<h1>
       </div>
</div>*/
   
  ?>
        </div>
           </div>
       </section>
   </body>
   </html>