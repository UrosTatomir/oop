<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit driver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="main.js"></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <?php include '../includes/nav.php'; ?>
    <div class="container-fluid">
        <br><br>
        <div class="container">
            <br><br>
            <h4>Edit Driver</h4>
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
                    <h6>Home page</h6>
                </button>
            </form>
        </div>
    </div>
    <!--end container-fluid-->
    <?php include '../includes/footer.php'; ?>
</body>

</html> 