<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <h2>Edit Car</h2>
    <?php 
    //var_dump($car);
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>
    <form action="routes.php" method="get">
        <input type="hidden" name="idvozila" value="<?php if (isset($car['idvozila'])) echo $car['idvozila']; ?>"><!--idvozila je sakriven jer je jedinstven u bazi i nesme da se menja-->

        <input type="text" name="imeproizvodjaca" value="<?php if (isset($car['imeproizvodjaca'])) echo $car['imeproizvodjaca']; ?>"><br>
        <span style="color:red;"><?php if (array_key_exists('imeproizvodjaca', $errors)) echo $errors['imeproizvodjaca']; ?>
        </span>
        <br><br>
        <input type="text" name="model" value="<?php if (isset($car['model'])) echo $car['model']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('model', $errors)) echo $errors['model'] ?>
        </span>
        <br><br>
        <input type="text" name="kategorija" value="<?php if (isset($car['kategorija'])) echo $car['kategorija']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('kategorija', $errors)) echo $errors['kategorija']; ?>
        </span>
        <br><br>
        <input type="text" name="godiste" value="<?php if (isset($car['godiste'])) echo $car['godiste']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('godiste', $errors)) echo $errors['godiste']; ?>
        </span>
        <br><br>
        <input type="text" name="cena" value="<?php if (isset($car['cena'])) echo $car['cena']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('cena', $errors)) echo $errors['cena']; ?>
        </span>
        <br><br>
        <input type="submit" name="page" value="Edit Car"><br>
    </form>
    <?php
    echo "<span style=color:red;>$msg</span>";
    ?>
    <br><br>

    <form action="routes.php">
        <button type="submit" name="page" value="showhome">
            <h3>Home page</h3>
        </button>
    </form>
</body>

</html> 