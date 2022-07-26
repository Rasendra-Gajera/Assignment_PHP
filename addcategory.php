
<html><center>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<h1>Add Category</h1><hr>
  <form method="post">
      <label for="cno"><b>Category Number :<b></label>
      <input type="number" id="cno" name="cno" ><br><br>
	  
      <label for="category name"><b>Category Name :<b></label>
      <input type="text" id="cname" name="cname">
  <br><hr>
    <input type="submit" value="ADD Category" name="s1">
	<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button>
  </form>
  </center>
</body>
</html>

<?php
$c=mysqli_connect('localhost','root','','dashboard');
if(isset($_POST['s1']))
{
	$cno=$_POST['cname'];
	$cname=$_POST['cname'];
 $r="insert into category (cno,cname) values ('$cno','$cname')";
 $z=mysqli_query($c,$r);
 if(mysqli_query($c,$r))
	{
		echo "<script>alert('data entered successfully...');</script>";
	}
	
}
?>
