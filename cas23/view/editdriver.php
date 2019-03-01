<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit driver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <h2>Edit Driver</h2>
    <?php
 // var_dump($driver);
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>

    <form action="routes.php" method="get">
        <input type="hidden" name="idvozaca" value="<?php if (isset($driver['idvozaca'])) echo $driver['idvozaca']; ?>">
        <!--kao skriveni podatak saljemo id zato sto namje na controlleru bitan ali korisnik ga ne vidis-->

        <input type="text" name="ime" value="<?php if (isset($driver['ime'])) echo $driver['ime']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('ime', $errors)) echo $errors['ime'] ?>
        </span>
        <br><br>
        <input type="text" name="prezime" value="<?php if (isset($driver['prezime'])) echo $driver['prezime']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('prezime', $errors)) echo $errors['prezime'] ?>
        </span>
        <br><br>
        <input type="text" name="godiste" value="<?php if (isset($driver['godiste'])) echo $driver['godiste']; ?>"><br>
        <span style="color:red;">
            <?php if (array_key_exists('godiste', $errors)) echo $errors['godiste']; ?>
        </span>
        <br><br>
        <input type="submit" name="page" value="Edit driver"><br><br>
        <!--ovde moze da se koristi foreach petlja a moze i na ovaj nacin preko uslova if() bez {}zagradas-->
    </form>
    <?php
    echo "<span style=color:red;>$msg</span>";
    ?>

    <form action="routes.php">
        <button type="submit" name="page" value="showhome">
            <h3>Home page</h3>
        </button>
    </form>
</body>

</html> 