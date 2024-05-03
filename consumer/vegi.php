
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


$sql="INSERT INTO product(filename,proname,quant,pric,discoun,addres,addre,selle) values ('$filename','$proname','$Quant','$pric','$discoun','$addres','$addre','$selle')";

mysqli_query($con, $sql);
if(move_uploaded_file($tmpname, $folder)){
  echo "image uploaded";
}
else{
  echo "fail to upload"; 
}
}else{

}
 $result = mysqli_query($con, "SELECT * FROM product");  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <script src="jquery-3.6.1.min.js"></script>

  <link rel="stylesheet" href="bootstrap-3.4.1-dist\css\bootstrap.min.css">

    <script src="jquery-2.2.4.min.js"> </script>
<script src="cart.js"></script>
    <script src="jquery.mycart1.js"> </script>
<script src="bootstrap-3.4.1-dist\js\bootstrap.js"></script>
 
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
.cta {
  display: inline-block;
  padding: 10px 30px;
  color: white;
  background-color: transparent;
  border: 2px solid crimson;
  font-size: 2rem;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  margin-top: 30px;
  transition: 0.3s ease;
  transition-property: background-color, color;
  text-align: center;
}
.cta:hover {
  color: ghostwhite;
  background-color: #363636;
  text-decoration: none;
}

#product h1{
  text-align: center;
  margin-bottom: 100px;
  margin-top: 100px;
  text-transform: uppercase;
  color: #48494b;
  font-size: 30px;
  font-weight: 50px;
} 
#product span{
  color: #01796f;
  text-transform: uppercase;
}

#start .badge-notify{
color: red;
position: relative;
top: -20px;
right: 20px;

cursor: pointer;


}



.product .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}
#product .cnn{

 display: inline-block;
  padding: 10px 30px;
  color: black;
  background-color: transparent;
  border: 2px solid crimson;
  font-size: 2rem;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  margin-top: 70px;
  transition: 0.3s ease;
  transition-property: background-color, color;
  text-align: center;


}
#product .cnn:hover {
  color: ghostwhite;
  background-color: #363636;
}


.product .box-container .box{
  flex:1 1 30rem;
  text-align: center;
  padding:2rem;
  border:.2rem solid rgba(0,0,0,.3);
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  box-shadow: 0px 0px 18px 0 #0000002c;
}

.product .box-container .box img{
  height: 250px;
  width:250px;
}

.product .box-container .box .discount{
  position: absolute;
  top:1rem; left: 1rem;
  background:rgba(0,255,0,.1);
  color:black;
  padding:.7rem 1rem;
  font-size: 2rem;
}

.product .box-container .box .icons{
  position: absolute;
  top:.5rem; right:-6rem;
}

.product .box-container .box:hover .icons{
  right:1rem;
}

.product .box-container .box .icons a{
  display: block;
  height:4.5rem;
  width:4.5rem;
  line-height: 4.5rem;
  font-size: 1.7rem;
  color:black;
  background:rgba(0,0,0,.05);
  border-radius: 50%;
  margin-top: .7rem;
}

.product .box-container .box .icons a:hover{
  background:var(--green);
  color:#fff;
}

.product .box-container .box h3{
  color: #222021;
  font-size: 2.5rem;
  text-transform: uppercase;
  font-weight: 20px;
}

/*.product .box-container .box .stars i{
  padding:1rem .1rem;
  font-size: 8.7rem;
  color:black;
}
*/

.product .btn{

    padding: 8px  15px;
   
    border: 2.5px solid black;
    color: black;
    background-color: transparent;
    text-transform: uppercase;
    font-weight: 10rem;
  }
.product  .btn-info{
background-color: transparent;
    
    padding: 8px 15px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
  }
.product  .btn-danger{
border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    background-color: transparent;
  }

.product .box-container .box .price{
  font-size: 2rem;
  color:#333;
  padding:.5rem 0;
}

.product .box-container .box .price span{
  font-size: 1.5rem;
  color:#999;
  text-decoration: line-through;
}

.product .box-container .box .quantity{
  display: flex;
  align-items: center;
  justify-content: center;
  padding-top: 1rem;
  padding-bottom: .5rem;
}

.product .box-container .box .quantity span{
  padding:0 .7rem;
  font-size: 1.7rem;
}

.product .box-container .box .quantity input{
  border:.1rem solid rgba(0,0,0,.3);
  font-size: 1.5rem;
  font-weight: bolder;
  color:black;
  padding:.5rem;
  background:rgba(0,0,0,.05);
}

#start{
  background-size: cover;
  background-position: top center;
  position: relative;
  z-index: 1;
  height: 250px;
  width: 100%;
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
#start span{
  color: crimson;
}

#start.search-box-container{
  display: flex;
  height:5rem;

}

#start .search-box-container #search-box{
  height: 100%;
  position: center;
  width:500px;
  padding:1rem;
  font-size: 2rem;
  color:#333;
  display: flex;
  border:.1rem solid rgba(0,0,0,.3);
  text-transform: none;
  align-items: center;
  margin-top: 50px;
  margin-bottom: 150px;
  border-radius: 10px;
 
  
}
#start .cart {

  margin-left: 55rem;
   margin-top: -40px; 
    font-size: 25px;
  cursor: pointer;

}
#start h4{
 display: flex;
margin-left: 25%;
  width: fit-content;
  font-size: 46px;
  position: relative;
  color: floralwhite;
  font-weight:30px;
  text-transform: uppercase;
  text-align: center;

}

.wrapper{
  max-width: 400px;
 margin: 50px ;
}

.wrapper .search-input{
  background: #fff;
  width: 100%;
  border-radius: 5px;
  position: relative;
  box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);
}

.search-input input{
  height: 55px;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 5px;
  padding: 0 60px 0 20px;
  font-size: 18px;
  box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}

.search-input.active input{
  border-radius: 5px 5px 0 0;
}

.search-input .autocom-box{
  padding: 0;
  opacity: 0;
  pointer-events: none;
  max-height: 280px;
  overflow-y: auto;
}

.search-input.active .autocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}

.autocom-box li{
  list-style: none;
  padding: 8px 12px;
  display: none;
  width: 100%;
  cursor: default;
  border-radius: 3px;
}

.search-input.active .autocom-box li{
  display: block;
}
.autocom-box li:hover{
  background: #efefef;
}

.search-input{
  position: absolute;
  right: 0px;
  height: 56spx;
  width: 55px;
  text-align: center;
  line-height: 56px;
  font-size: 20px;
  color: #363945;
  cursor: pointer;
}




</style>


</head>
<body>
<section id="start">
<h4> vege<span>tables</span></h4>

<form action="" class="search-box-container">
            <div class="wrapper">
              <div class="search-input">
                <input type="search" placeholder="Type to search.." value="" id="search">
                <div class="autocom-box">
                  <!-- here list are inserted from javascript -->
                </div>
              </div>
            </div>
        </form>

      <div id="" style= " cursor: pointer;margin-top:-10rem ; margin-left: 55rem; font-size: 20px;">

                <span class="glyphicon glyphicon-shopping-cart my-cart-icon">
                    <span class="badge badge-notify my-cart-badge"></span>
                </span>
            
        </div>
      </section>
 <!--products-->
<section class="product" id="product">





         <div class="box-container">

        <div class="box">
            <span class="discount">0%</span>
            
            <img src="images/product1.jpeg" alt="">
            <h3>tomata</h3>
            
            <div class="price"> 0rs <span> 0rs </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <button onclick="alert
            ('added');" class="btn btn-danger my-cart-btn" data-id="1" data-name="tomata" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product1.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
  
        </div>

        <div class="box">
            <span class="discount">0%</span>
            
            <img src="images/product2.jpeg" alt="">
            <h3>brinjal</h3>
            
            <div class="price"> 0/- <span> 0/- </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
             <button class="btn btn-danger my-cart-btn" data-id="2" data-name="brinjal" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product2.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
        </div>

        <div class="box">
            <span class="discount">0%</span>
            
            <img src="images/product3.jpeg" alt="">
            <h3>carrot</h3>
            
            <div class="price"> 0/- <span> 0/- </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <button class="btn btn-danger my-cart-btn" data-id="3" data-name="carrot" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product3.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
        </div>

        <div class="box">
            <span class="discount">0%</span>
           
            <img src="images/product4.jpeg" alt="">
            <h3>potato</h3>
            
            <div class="price"> 0/- <span> 0/- </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <button class="btn btn-danger my-cart-btn" data-id="4" data-name="potato" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product4.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
        </div>


        <div class="box">
            <span class="discount">0%</span>
          
            <img src="images/product9.jpeg" alt="">
            <h3>onion</h3>
           
            <div class="price"> 0/- <span> 0/- </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
           <button class="btn btn-danger my-cart-btn" data-id="9" data-name="onion" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product9.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
        </div>

        <div class="box">
            <span class="discount">0%</span>
            
            <img src="images/product10.jpeg" alt="">
            <h3>cabbage</h3>
            
            <div class="price"> 0/- <span> 0/- </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <button class="btn btn-danger my-cart-btn" data-id="10" data-name="cabbage" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product10.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
           </div>
           <div class="box">
            <span class="discount">0%</span>
            
            <img src="images/product.jpeg" alt="">
            <h3>cabbage</h3>
            
            <div class="price"> 0/- <span> 0/- </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <button class="btn btn-danger my-cart-btn" data-id="10" data-name="cabbage" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/product.jpeg">
        add to cart
      </button>
      <a href="" class="btn btn-info">details</a>
           </div>


         <?php
    while ($row = mysqli_fetch_array($result)) {
      if($row['farmname']){
      echo ' <div class="box">';
      echo ' <span class="discount">'.$row['discoun'].'</span>';
      echo "<img src='farmers/produdetail/product/".$row['filename']."' >";
        echo '<h3>'.$row['proname'].'</h3>';
        echo ' <div class="price">'.$row['pric'].'rs </div>';
        echo '<div class="quantity">
                <span>quantity :1kg</span>
               </div>';



              echo '<button class="btn btn-danger my-cart-btn" data-id="10" data-name="'.$row["proname"].'" data-summary= "summary 1" data-price="'.$row["pric"].'" data-quantity="1" data-image="'.$row["filename"].'"> add to cart';
      echo'</button>';
      echo'<a href="" class="btn btn-info">details</a>';

      echo ' </div>';




      
    }
    }
  
        
           
            
            
            
           
           
            
        echo"</div>";?>
        </div>
</section>



       <script src="search.js"></script>


        </body>
</html>