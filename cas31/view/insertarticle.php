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
    $msg = isset($msg) ? $msg : "";
    $errors = isset($errors) ? $errors : array();
    //provera da li postoji niz sa greskama
    ?>
    <form action="routes.php" method="get">
        <input type="text" name="brand" placeholder="Brand">
        <br>
        <span style="background-color:#F2F846;">
            <?php if (array_key_exists('brand', $errors)) {
                echo $errors['brand'];
            }
            ?>
        </span>
        <br>
        <input type="text" name="model" placeholder="Model">
        <br>
        <span style="background-color:#F2F846;">
            <?php if (array_key_exists('model', $errors)) {
                echo $errors['model'];
            }
            ?>
        </span>
        <br>
        <input type="text" name="description" placeholder="Description">
        <br>
        <span style="background-color:#F2F846;">
            <?php if (array_key_exists('description', $errors)) {
                echo $errors['description'];
            }
            ?>
        </span>
        <br>
        <input type="number" name="price" placeholder="Price">
        <br>
        <span style="background-color:#F2F846;">
            <?php if (array_key_exists('price', $errors)) {
                echo $errors['price'];
            }
            ?>
        </span>
        <br>
        <input type="file" name="image" accept="image/*">
        <br>
        <span style="background-color:#F2F846;">
            <?php if (array_key_exists('image', $errors)) {
                echo $errors['image'];
            }
            ?>
        </span>
        <br><br>
        <input type="submit" name="page" value="insert article">
    </form>

    <?php
    if (!empty($msg)) {

        echo "<span style='background-color:red';>$msg</span>";
    } ?>
    <br><br>
    <form action="routes.php" method="get">
        <input type="submit" name="page" value="showhome">
    </form>
</body>

</html> 