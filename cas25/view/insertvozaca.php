<?php
include '../includes/header.php';
include '../includes/nav.php';
?>
<br><br>
<div class="container">
    <br><br>
    <?php

    $msg = isset($msg) ? $msg : "";
    $errors = isset($errors) ? $errors : array();
    //provera da li postoji niz sa greskama
    ?>
    <h4>Insert Driver</h4>
    <form action="routes.php">
        <div class="form-group">
            <label for="ime">Ime</label>
            <br>
            <input type="text" name="ime" placeholder="Unesite Ime">

            <span class="alert-danger">
                <?php if (array_key_exists('ime', $errors)) {
                    echo $errors['ime'];
                } ?>
            </span>
            <br><br>
            <label for=" prezime">Prezime</label>
            <br>
            <input type="text" name="prezime" placeholder="Unesite Prezime">

            <span class="alert-danger">
                <?php if (array_key_exists('prezime', $errors)) {
                    echo $errors['prezime'];
                } ?>
            </span>
            <br><br>
            <label for="godiste">Godiste</label>
            <br>
            <input type="number" name="godiste" placeholder="Unesite Godiste">
            <span class="alert-danger">
                <?php if (array_key_exists('godiste', $errors)) {
                    echo $errors['godiste'];
                } ?>
            </span>

            <br><br>
            <input type="submit" class="btn btn-warning" name="page" value="insertvozaca">
        </div>
    </form>
    <?php
    echo "<span class=alert-warning>$msg</span>";
    ?>
    <br><br>
    <form class="form-group" action="routes.php">
        <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
            <h6>Home page</h6>
        </button>

    </form>
</div>
<!--end container-->


<?php include '../includes/footer.php'; ?>
 