<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <?php
        if(isset($_SESSION['user'])){

    ?>

<h4>User:<?php echo $_SESSION['user']['name'];?></h4>


<?php
$user=$_SESSION['user'];

// za prikaz podataka iz korpe


$cart=isset($_SESSION['cart'])?$_SESSION['cart']:array();
$total=isset($_SESSION['total'])?$_SESSION['total']:array();
$amount=isset($_SESSION['amount'])?$_SESSION['amount']:array();


?>

<h2>Your cart</h2>

<form action="routes.php" method="post">
<table border="2">
<tr>
<th>Image</th>
<th>Brand</th>
<th>Model</th>
<th>Price</th>
<th>Count</th>
<th>Total</th>

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
}  ?>" readonly="readonly"></td>


<td><?php if(!empty($_SESSION['total'])&&!empty($total[$i])){echo $total[$i];}else{echo $article['price'];} ?></td>
<?php


$i++;
}

?>
</table>
<br>
<br>


<input type="text" name="name" value="<?php echo $user['name'];?>"><br><br>
<input type="text" name="surname" value="<?php echo $user['surname'];?>"><br><br>
<input type="text" name="email" value="<?php echo $user['email'];?>"><br><br>
<input type="text" name="phone" value="<?php echo $user['phone'];?>"><br><br>
<textarea name="adress"><?php echo $user['adress'];?></textarea><br><br>
<input type="hidden" name="iduser" value="<?php echo $user['user_id'];?>"><br><br>


<input type="submit" name="page" value="Order">

</form>




<?php
  }else{
      header('Location:login.php');
  }

?>
</body>
</html>