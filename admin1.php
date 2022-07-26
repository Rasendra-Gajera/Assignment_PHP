<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  height:200px;
  width:200px;
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#Product detail">Product detail</a>
  <a href="#contact">Contact</a>
  <a href="#about the Product">About the product</a>
</div>


  <center><h2>Product Management</h2></center>
  <hr>
</div><center>
 <button class="btn success" role="button"><a href="addproduct.php" style="text-decoration:none; color:white;">Add Product</button></a>
  <button class="btn success" role="button"><a href="updateproduct.php" style="text-decoration:none; color:white;">Update Product</button></a>
   <button class="btn success" role="button"><a href="deleteproduct.php" style="text-decoration:none; color:white;">Delete Product</button></a><br><hr>
  <button class="btn success" role="button"><a href="addcategory.php" style="text-decoration:none; color:white;">Add Category</button></a> 
  <button class="btn success" role="button"><a href="updatecategory.php" style="text-decoration:none; color:white;">Update Catgory</button></a>
  <button class="btn success" role="button"><a href="deletecategory.php" style="text-decoration:none; color:white;">Delete Catogery</button></a> <br><hr>
  <button class="btn success" role="button"><a href="usermanagement.php" style="text-decoration:none; color:white;">User Management</button></a>
  <button class="btn success" role="button"><a href="viewproduct.php" style="text-decoration:none; color:white;">View Products</button></a> 
  <button class="btn success" role="button"><a href="billingdetails.php" style="text-decoration:none; color:white;">Billing Details</button></a><br><hr>




</body>
</html>