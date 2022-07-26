
<html>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<br>
<h1>Update Category<hr></h1>
  <form method="post">
      <label for="cno"><b>Category Orignal Number  :</b>&nbsp;</label>
      <input type="number" id="cno" name="cno" ><br><br>
 
 <label for="category name"><b>Category New Name  :</b></label>&nbsp;
      <input type="text" id="cname" name="cname">
  <br><br><hr>
    <input type="submit" value="Update Category" name="s1">
	<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button>
  </form>
</body></center>
</html>

<?php
$c=mysqli_connect('localhost','root','','dashboard');
if(isset($_POST['s1']))
{
	$cno=$_POST['cno'];
	$cname=$_POST['cname'];
	$u=mysqli_query($c,"update category set cname='$cname' where cno='$cno'");
}
mysqli_close($c);
?>
