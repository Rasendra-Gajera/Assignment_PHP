<html>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<form method="post">
<h1>UPDATE PRODUCT</h1><hr><b>
Enter Product Id :<input type="text" name="Product_Id" placeholder="Enter Product Id"><br><br>
Enter Product Name :<input type="text" name="Product_Name" placeholder="Enter Product Name"><br><br>
Enter Product Price :<input type="text" name="Product_Price" placeholder="Enter Price"><br><br>
Enter Product Descripition :<input type="text" name="Product_Descripition" placeholder="Enter Descripition"><br><br>
Enter Product Category :<?php
		$c=mysqli_connect('localhost','root','','dashboard');
			$query="SELECT cname FROM category ";
			if($r_set=$c->query($query)){
			echo "<SELECT name='pcat'>";
			while($row=$r_set->fetch_assoc()){
			echo "<option value=$row[cname]>$row[cname]</option>";
			}
			echo "</select>";
			}
			else{
			echo $c->error;
			}
?><br><br>
Enter Product Compony :<input type="text" name="Product_Compony" size="25" placeholder="Enter Product Compony Name"><br><br><hr>
<button name="update">Update Product</button>
<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button>
</body>
</html>
<?php
if(isset($_POST['update']))
{

$c1=mysqli_connect('localhost','root','','dashboard');
if($c1)
{
	$a=$_POST['Product_Id'];
	$b=$_POST['Product_Name'];
	$c=$_POST['Product_Price'];
	$d=$_POST['Product_Descripition'];
	$e=$_POST['pcat'];
	$g=$_POST['Product_Compony'];
$q="update product set Product_Name='$b',Product_Price=$c,Product_Descripition='$d',Product_Category='$e',Product_Compony='$g'
 where Product_Id=$a";

if(mysqli_query($c1,$q))
{
echo "<br> rows update=".mysqli_affected_rows($c1);

}
else
{
echo "<br> record not found";
}
}
}
else
{
echo "<br>".mysqli_connect_error();
}
?>