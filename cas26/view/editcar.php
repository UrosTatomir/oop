<?php 
include '../includes/header.php';
include '../includes/nav.php';
?>

<div class="container p-4" style="background-color:#E4E1C7">
    <div class="container  mt-5 mb-5 p-4 text-center col-4 bg-dark text-white">

        <h4>Edit Car</h4>
        <?php 
        //var_dump($car);
        $errors = isset($errors) ? $errors : array();
        $msg = isset($msg) ? $msg : "";
        ?>
        <form action="routes.php" method="get">
            <div class="form-group">
                <input type="hidden" class="form-control" name="idvozila" value="<?php if (isset($car['idvozila'])) echo $car['idvozila']; ?>">
                <!--idvozila je sakriven jer je jedinstven u bazi i nesme da se menja-->
                <!--U ovom slucaju posto kupimo prosti niz, a ne niz nizova mozemo koristiti uslov if ,a ne foreach petlju za hvatanje vrednosti  -->
                <input type="text" class="form-control" name="imeproizvodjaca" value="<?php if (isset($car['imeproizvodjaca'])) echo $car['imeproizvodjaca']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('imeproizvodjaca', $errors)) echo $errors['imeproizvodjaca']; ?>
                </span>
                <br>
                <input type="text" class="form-control" name="model" value="<?php if (isset($car['model'])) echo $car['model']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('model', $errors)) echo $errors['model'] ?>
                </span>
                <br>
                <input type="text" class="form-control" name="kategorija" value="<?php if (isset($car['kategorija'])) echo $car['kategorija']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('kategorija', $errors)) echo $errors['kategorija']; ?>
                </span>
                <br>
                <input type="text" class="form-control" name="godiste" value="<?php if (isset($car['godiste'])) echo $car['godiste']; ?>"><br>
                <span class="alert-danger">
                    <?php if (array_key_exists('godiste', $errors)) echo $errors['godiste']; ?>
                </span>
                <br>

                <input type="text" class="form-control" name="cena" value="
            <?php if (isset($car['cena'])) echo $car['cena']; ?>">
                <span class="alert-danger">
                    <?php if (array_key_exists('cena', $errors)) echo $errors['cena']; ?>
                </span>
                <br><br>
                <input type="submit" class="btn btn-warning" name="page" value="Edit Car"><br>
            </div>
        </form>
        <?php
        echo "<span class=alert-danger>$msg</span>";
        ?>
        <br><br>

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