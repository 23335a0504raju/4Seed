<?php
error_reporting(0);
 $msg="";

$con=mysqli_connect("localhost","root","","4seed");
if(!$con){
	die('error'.mysqli_error($con));
} 
$result = mysqli_query($con, "SELECT * FROM landlorddetails");
?>
<html>
<head>
<style>
body
{
background-color:  #363945;
font-family:Arial;
}
table
{
width: 700px;
border: 1px solid  #A0DAA9;
margin: 0 auto;
}
tr
{
background: pink;
}
td{
font-weight: lighter;
text-align: center;
font-size: 15px;
}
h1
{
font-size: 3rem;
text-align: center;
color:  #A0DAA9;
}
th
{
font-size: 18px;
font-weight: 200px;
background-color: pink;
border-color: red;
}
</style>
</head>
<body>
<h1>FARMER DETAILS</h1>
<table  cellpadding=4>
<tr>
<th>Name</th>
<th>Phone Number</th>
<th> acres</th>
<th>pincode</th>
<th>State</th>
<th>City</th>
<th>house_building</th>
<th>area</th>
</tr>
<?php while ($row = mysqli_fetch_array($result)) 

{
	

echo "<tr>";
echo"<td>".$row['l_name'];echo"</td>";
echo"<td>".$row['pnum'];echo"</td>";
echo"<td>".$row['lands'];echo"</td>";
echo"<td>".$row['pincode'];echo"</td>";
echo"<td>".$row['stat'];echo"</td>";
echo"<td>".$row['city'];echo"</td>";
echo"<td>".$row['home'];echo"</td>";
echo"<td>".$row['AREA'];echo"</td>";
/*<td><?php echo $row['acres'];?></td>
<td><?php echo $row['Pincode'];?></td>
<td><?php echo $rows['State'];?></td>
<td><?php echo $rows['City'];?></td>
<td><?php echo $rows['house_building'];?></td>
<td><?php echo $rows['area'];?></td>*/
echo"</tr>";

}
?>
</table>
</body>
</html>