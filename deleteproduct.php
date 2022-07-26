<html>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<form method="post">
<h1>DELETE PRODUCT</h1><hr>
<b>
Enter Product Id :  </b>
<input type="text" name="Product_Id" placeholder="Enter Product Id"><br><br><hr>
<button name="delete">Delete Product</button>
<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button>
</form>
</html>
<?php
$c1=mysqli_connect('localhost','root','','dashboard');
if(isset($_POST['delete']))
{
if($c1)
{
$a=$_POST['Product_Id'];
$q="delete FROM product WHERE Product_Id=$a";
if(mysqli_query($c1,$q))
{
echo "<br> rows deleted=".mysqli_affected_rows($c1);

}
else
{
echo "<br> record not found";
}
}
}
{
echo "<br>".mysqli_connect_error();
}
?>