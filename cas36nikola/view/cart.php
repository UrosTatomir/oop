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
$total=isset($_SESSION['total'])?$_SESSION['total']:array();

$amount=isset($_SESSION['amount'])?$_SESSION['amount']:array();

//var_dump($total);

//echo "<h2>Prikaz kolicina iz sesije</h2>";
var_dump($amount);

?>
<h2>Your cart</h2>

<form action="routes.php" method="get">
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
$i=0;
foreach($cart as $article){
echo "<tr>";
echo "<td>image</td>";
echo "<td>$article[brand]</td>";
echo "<td>$article[model]</td>";
echo "<td>$article[price]</td>";

?>
<td><input type='text' name='amount[]' value="

<?php if(!empty($amount[$i])&&!empty($amount)){
echo $amount[$i];
}else{
echo '1';
}  ?>"></td>


<td><?php if(!empty($_SESSION['total'])&&!empty($total[$i])){echo $total[$i];}else{echo $article['price'];} ?></td>
<?php
echo "<td><a href='routes.php?page=removearticle&idart=$article[idart]'>Delete</a></td>";
echo"</tr>";
echo"<input type='hidden' name='idart[]' value='$article[idart]'>";

$i++;
}

?>
</table>
<br>
<br>

<input type="submit" name="page" value="Refresh cart">

</form>
<br>
<br>
<a href="routes.php?page=emptycart">Empty cart</a>
<br>
<br>
<a href="routes.php?page=showindex">Continue shoping</a>
    
<br>
<br>
<a href="routes.php?page=showorder">Order</a>

</body>
</html>