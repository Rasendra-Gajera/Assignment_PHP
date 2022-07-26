
<html>
<body style="background-image:url(c.jpg)"><center><br><br><br><br>
<center>
<h1>User Management</h1><hr>

</center>
</body>
</html>

<?php
$c=mysqli_connect('localhost','root','','dashboard');
$b=mysqli_query($c,'select * from stud');
	echo"<form method='post'>
      <label>Enter User No</label><br>
      <input type='number' id='no' name='no'>
	  <input type='submit' value='Delete User' name='s1'>
	  <table border=3>
<tr>
<th>NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr> ";		  
		  while($result=mysqli_fetch_assoc($b))
		  { 
				echo "<tr>";
			//	echo "<th>".$result['no']."</th>";
				echo "<th>".$result['no']."</th>";
				echo "<th>".$result['name']."</th>";
				echo "<th>".$result['email']."</th>";
				echo"<th>".$result['phone']."</th>";
				echo "</tr>";
		  }
echo"</table></form>";
if(isset($_POST['s1']))
{
	$no=$_POST['no'];
	$d="delete from stud where `no`='$no'";
	mysqli_query($c,$d);
}


?>
<button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button></b>