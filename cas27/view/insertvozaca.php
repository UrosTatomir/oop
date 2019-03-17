<?php
include '../includes/header.php';
include '../includes/nav.php';
?>
<div class="container p-4">
    <div class="container mt-5 mb-5 p-4 text-center col-5 bg-dark text-white">

        <?php

        $msg = isset($msg) ? $msg : "";
        $errors = isset($errors) ? $errors : array();
        //provera da li postoji niz sa greskama
        ?>
        <h4>Insert Driver</h4>
        <form action="routes.php">
            <div class="form-group p-3">
                <label for="ime">Ime</label>

                <input type="text" name="ime" class="form-control" placeholder="Unesite Ime">

                <span class="alert-danger">
                    <?php if (array_key_exists('ime', $errors)) {
                        echo $errors['ime'];
                    } ?>
                </span>
                <br>
                <label for=" prezime">Prezime</label>
                <br>
                <input type="text" name="prezime" class="form-control" placeholder="Unesite Prezime">

                <span class="alert-danger">
                    <?php if (array_key_exists('prezime', $errors)) {
                        echo $errors['prezime'];
                    } ?>
                </span>
                <br>
                <label for="godiste">Godiste</label>
                <br>
                <input type="number" name="godiste" class="form-control" placeholder="Unesite Godiste">
                <span class="alert-danger">
                    <?php if (array_key_exists('godiste', $errors)) {
                        echo $errors['godiste'];
                    } ?>
                </span>

                <br>
                <input type="submit" class="btn btn-warning" name="page" value="insertvozaca">
            </div>
        </form>
        <?php
        // echo "<span class=alert-warning>$msg</span>";
        if (!empty($msg)) {
            ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $msg  ?>
        </div>
        <?php   } ?>  <!--super fora zapamtiti-->
        <br>
        <form class="form-group" action="routes.php">
            <button type="submit" class="btn btn-outline-warning" name="page" value="showhome">
                <h6>Home page</h6>
            </button>

        </form>
    </div>
</div>
<!--end container-->


<?php include '../includes/footer1.php'; ?> 