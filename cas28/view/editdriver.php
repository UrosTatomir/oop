<?php
include '../includes/header.php';
include '../includes/nav.php';
?>

<div class="container p-4">
    <div class="container col-5 mt-5 mb-5 p-4 text-center bg-dark text-white">
        <br><br>
        <h4>Edit Driver</h4>
        <?php
 // var_dump($driver);
        $errors = isset($errors) ? $errors : array();
        $msg = isset($msg) ? $msg : "";
        ?>

        <form action="routes.php" method="get">
            <div class="form-group">
                <input type="hidden" class="form-control" name="idvozaca" value="<?php if (isset($driver['idvozaca'])) echo $driver['idvozaca']; ?>">
                <!--kao skriveni podatak saljemo id zato sto namje na controlleru bitan ali korisnik ga ne vidis-->

                <input type="text" class="form-control" name="ime" value="<?php if (isset($driver['ime'])) echo $driver['ime']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('ime', $errors)) echo $errors['ime'] ?>
                </span>
                <br><br>
                <input type="text" class="form-control" name="prezime" value="<?php if (isset($driver['prezime'])) echo $driver['prezime']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('prezime', $errors)) echo $errors['prezime'] ?>
                </span>
                <br><br>
                <input type="text" class="form-control" name="godiste" value="<?php if (isset($driver['godiste'])) echo $driver['godiste']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('godiste', $errors)) echo $errors['godiste']; ?>
                </span>
                <br><br>
                <input type="submit" class="btn btn-warning" name="page" value="Edit driver"><br><br>
                <!--ovde moze da se koristi foreach petlja a moze i na ovaj nacin preko uslova if() bez {}zagradas-->
            </div>
        </form>
        <?php if (!empty($msg)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $msg; ?>
        </div>
        <?php } ?>

        <form action="routes.php">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-warning" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include '../includes/footer1.php'; ?> 