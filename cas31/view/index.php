<!DOCTYPE <!DOCTYPE html>
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
    $allarticles = $dao->getAllArticles();

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    //napraviti koliko articala ima u korpi
    echo "br.artikala u korpi " . count($cart);
    echo "<br>";
    $total = 0;
    foreach ($cart as $price) {
        if ($price['price']){
            $price=$price['price'];
            $total+=$price;
            // var_dump($totalsum);
            echo $total."<br>";     
        }
        //----------nije dobro reseno mora da stampa zadnju cifru------- 
    }
    echo "<br>";
    var_dump($cart);
    ?>
    <h3>Articles</h3>
    <!-- domaci prikaz artikala sa dodatkom korpe u tabeli-->
    <table border="3">
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($allarticles as $article) {
            ?>
        <tr>
            <th><?php echo $article['brand']; ?></th>
            <th><?php echo $article['model']; ?></th>
            <th><?php echo $article['description']; ?></th>
            <th><?php echo $article['price']; ?></th>
            <th><?php echo $article['image']; ?></th>
            <th><a href="routes.php?page=addtocart&idart=<?php echo $article['idart'] ?>">Add to cart</a></th>
        </tr>
        <?php 
    } ?>
    </table>
    <?php $msg = isset($msg) ? $msg : "";
    echo $msg; ?>
    <h3><a href="routes.php?page=emptycart">Empty Cart</a></h3>
    <h4><a href="routes.php?page=showinsert">Insert new articles</a></h4>
</body>
<!--nele.djordjevic@gmail.com  poslati cas29-->


</html> 