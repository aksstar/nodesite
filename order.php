
<form method="POST" action="display.php" >
<input type="submit"  class="theButtons"  name="NAME_ASC" value="NAME ASC">
<input type="submit"  class="theButtons"  name="NAME_DSC" value="NAME DSC">
<input type="submit"  class="theButtons"  name="PRICE_ASC" value="PRICE ASC">
<input type="submit"  class="theButtons"  name="PRICE_DSC" value="PRICE DSC">
<input type="submit"  class="theButtons"  name="BRAND_ASC" value="BRAND ASC">
<input type="submit"  class="theButtons"  name="BRAND_DSC"  value="BRAND DSC">

<table style="border-spacing:30px;">
<thead>
<tr>
<th>NAME</th>
<th>Price</th>
<th>BRAND</th>
<th>Image</th>
<th>View</th>
</tr>
</thead>
<tr>
<td>ASD</td>
<td>123</td>
<td>This product is awesome</td>
<td><img src="images/cover.jpg" width="200" height="300"></td>
<td><a href="#">View</a>
</tr>
<tbody>
<?php
include('connect.php');
     $sql="SELECT * FROM productDetails ORDER BY productId ASC";
//$sql="SELECT * FROM mobile ORDER BY price ASC";
$res=mysqli_query($con,$sql);
if($res === FALSE) {
    die(mysqli_error("query error")); // TODO: better error handling
}

while($row=mysqli_fetch_array($res))
{
	echo '<tr>';
	echo '<td>';
	echo $row['productId'];
	echo '</td>';
	echo '<td>';
	echo $row['productName'];
	echo '</td>';
	echo '<td>';
	echo $row['productPrice'];
	echo '</td>';
  echo '<td>';
	echo $row['productDescription'];
	echo '</td>';
//	echo '</tr>.<br>';
	/* $name=$row['pname'];
	echo $name.'<br>'; */
}
?>
</tbody>
</table>
