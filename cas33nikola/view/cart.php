 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prikaz korpe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<?php

session_start();
$cart=isset($_SESSION['cart'])?$_SESSION['cart']:array();

//var_dump($cart);

?>
<h2>Your cart</h2>

<table border="2">
<tr>
<th>Image</th>
<th>Brand</th>
<th>Model</th>
<th>Price</th>
<th>Count</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php
foreach($cart as $article){
echo "<tr>";
echo "<td>image</td>";
echo "<td>$article[brand]</td>";
echo "<td>$article[model]</td>";
echo "<td>$article[price]</td>";
echo "<td>1</td>";
echo "<td>0</td>";
echo "<td><a href='routes.php?page=removearticle&idart=$article[idart]'>Delete</a></td>";
echo"</tr>";
}
?>

</table>

<a href="routes.php?page=emptycart">Empty cart</a>
<br>
<br>
<a href="routes.php?page=showindex">Continue shoping</a>
    
</body>
</html>