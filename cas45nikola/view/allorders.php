<?php
$allorders=isset($allorders)?$allorders:array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($param)&&$param==1){
  echo "<h2>Order deleted</h2>";
}
?>


<table border="3">
<tr>
  <th>Order number</th>
  <th>Name</th>
  <th>Surname</th>
  <th>Email</th>
  <th>Phone</th>
  <th>Address</th>
  <th>Brand</th>
  <th>Model</th>
  <th>Price</th>
  <th>Count</th>
  <th>Total</th>
  <th colspan="2">Action</th>
</tr>

<?php
foreach ($allorders as $pom){
?>

<tr>
<td><?php echo $pom['order_number'] ?></td>
<td><?php echo $pom['name'] ?></td>
<td><?php echo $pom['surname'] ?></td>
<td><?php echo $pom['email'] ?></td>
<td><?php echo $pom['phone'] ?></td>
<td><?php echo $pom['adress'] ?></td>
<td><?php echo $pom['brand'] ?></td>
<td><?php echo $pom['model'] ?></td>
<td><?php echo $pom['price'] ?></td>
<td><?php echo $pom['count'] ?></td>
<td><?php echo $pom['total'] ?></td>
<td><a href="routes.php?page=sent&order_number=<?php echo $pom['order_number'];?>">Sent</a></td>
<td><a href="routes.php?page=cancel&order_number=<?php echo $pom['order_number'];?>">Delete</a></td>

</tr>

<?php
}
?>

</table>
    
</body>
</html>


