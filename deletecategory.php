
<html>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<h1>Delete Category</h1><hr>
  <form method="post">
      <label for="cno">Category Number</label>
      <input type="number" id="cno" name="cno" >
  <br><br><hr>
    <input type="submit" value="Delete Category" name="s1">
	<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button>
  </form>
</body></center>
</html>

<?php
$c=mysqli_connect('localhost','root','','dashboard');
if(isset($_POST['s1']))
{
	$cno=$_POST['cno'];
	$d="delete from `category` where `cno`='$cno'";
	mysqli_query($c,$d);
}
mysqli_close($c);
?>
