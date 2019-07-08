 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
require_once '../model/DAO.php';

$dao = new DAO();

$allarticles=$dao->getAllArticles();

$cart=isset($_SESSION['cart'])?$_SESSION['cart']:array();

//var_dump($cart);

//echo count($cart);
if(!empty($_SESSION['cart'])){

  $counter=count($_SESSION['cart']);
  echo "Number of articles in cart: ". $counter;
}


?>
<table border="5">
<tr>
<th>Brand</th>
<th>Model</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php 
  foreach($allarticles as $article){
?>
<tr>
<td><?php echo $article['brand']?></td>
<td><?php echo $article['model']?></td>
<td><?php echo $article['description']?></td>
<td><?php echo $article['price']?></td>
<td><?php echo $article['image']?></td>
<td><a href="routes.php?page=addtocart&idart=<?php echo $article['idart'] ?>">Add to cart</a></td>
</tr>


  <?php } ?>
</table>
<br><br>
<a href="routes.php?page=showcart">View cart</a>
<br>
<br>
<?php

$msg=isset($msg)?$msg:"";
echo $msg;

?>
    
</body>
</html>