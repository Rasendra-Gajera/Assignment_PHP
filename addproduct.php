<html>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<form method="post"><b>
<h1>ADD PRODUCT</h1><hr>
Product Name :<input type="text" name="Product_Name" placeholder="Enter Product Name"><br><br>
Product Price :<input type="text" name="Product_Price" placeholder="Enter Price"><br><br>
Product Descripition :<input type="text" name="Product_Descripition" placeholder="Enter Descripition"><br><br>
Product Category :  <?php
		$c=mysqli_connect('localhost','root','','dashboard');
			$query="SELECT cname FROM category ";
			if($r_set=$c->query($query)){
			echo "<SELECT name='Product_Category'>";
			while($row=$r_set->fetch_assoc()){
			echo "<option value=$row[cname]>$row[cname]</option>";
			}
			echo "</select>";
			}
			else{
			echo $c->error;
			}
?><br><br>
Product Compony :<input type="text" name="Product_Compony" size="25" placeholder="Enter Product Compony Name"><br><br><hr>
<button name="insert">Add Product</button>
<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button></b>
<?php
$c1=mysqli_connect('localhost','root','','dashboard');

	if ($c1->connect_error)	
	{
		die("Connection failed: " . $c->connect_error);	
	}
if(isset($_POST['insert']))
{
/* 	$a=$_POST['Product_Id']; */
	$b=$_POST['Product_Name'];
	$c=$_POST['Product_Price'];
	$d=$_POST['Product_Descripition'];
	$e=$_POST['Product_Category'];
	//$f=$_POST['pimage'];
	$g=$_POST['Product_Compony'];
	$q="insert into product (Product_Name,Product_Price,Product_Descripition,Product_Category,Product_Compony) values ('$b','$c','$d','$e','$g')";
    if(mysqli_query($c1,$q))
	{
		echo "<script>alert('data entered successfully...');</script>";
	}
	
}

?>
