<?php
  include('connect.php');
  $sql="SELECT * FROM productDetails ORDER BY productId ASC";
  $res=mysqli_query($con,$sql);
  echo "<html>";
 echo "<body>";
 echo "<select name='id'>";

 while ($row = $res->fetch_assoc()) {
               unset($id, $name);
               $id = $row['productId'];
               $name = $row['productName'];
               echo '<option value="'.$id.'">'.$name.'</option>';

}

 echo "</select>";
 echo "</body>";
 echo "</html>";


?>
<label>Name</label>
<input type="text" name="firstName" placeholder="first name..." value="John" required>
</br><label>Last Name</label>
<input type="text" name="lastName" placeholder="last name..." required>
<label>Product Name</label><br>
<input type="text" name="Product" placeholder="Product name..." required>
<label>Product Price</label><br>
<input type="text" id="Price" name="Price" placeholder=" Price ..." value="1000" required>
<label>Revised Product Price</label><br>
<input type="text" id="RPrice" name="RPrice" placeholder=" Price name..." required>
<input type="submit" value="Place Order">
