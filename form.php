<html>
<center>
<body style="background-image:url(c.jpg)";>
  <form method="post" >
    <h1>Login Form...</h2><hr><b>
	Name: <input type="text" name="n1"><br>
	email : <input type="text" name="e1"><br>
	Phone : <input type="contact" name="p1"><br><hr>
	<input type="submit" name="s1" value="submit"></b></center>
  </form>
</center>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','dashboard');
if(isset($_POST['s1']))
{
 $name=$_POST['n1'];
 $email=$_POST['e1'];
 $phone=$_POST['p1'];
 $a=mysqli_query($con,"insert into stud (name,email,phone) values('$name','$email','$phone')");
mysqli_query($con,$a);
	header("location:admin1.php");
}
?>


