<?php
   $c1=mysqli_connect('localhost','root','','dashboard');
    $query = "SELECT `Product_Id`, `Product_Name`, `Product_Price`, `Product_Descripition`, `Product_Category`, `Product_Compony` FROM `product` ";
    $result = mysqli_query($c1, $query);
    $num = mysqli_num_rows($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>List of Products</title>
</head>
<body>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price </th>
      <th scope="col">Product Decs</th>
      <th scope="col">Product Catagory</th>
      <th scope="col">Product Company</th> 		
    </tr>
  </thead>
  <tbody>
    <?php
        if($num > 0 )
        {
            while( $data = mysqli_fetch_array($result))
            {
                echo "<tr>
                        <td>".$data['Product_Id']."</td>
                        <td>".$data['Product_Name']."</td>
                        <td>".$data['Product_Price']."</td>
                        <td>".$data['Product_Descripition']."</td>
                        <td>".$data['Product_Category']."</td>
                        <td>".$data['Product_Compony']."</td>
                     </tr>";
            }
        }
    ?>
    <button name="back"><a href="admin1.php" style="text-decoration:none; color:black;">Back</button>
  </tbody>
</table>
</div>
</body>
</html>