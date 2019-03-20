<?php
include '../includes/header.php';
include '../includes/nav.php';
require_once '../model/DAO.php';
$dao = new DAO();
$allproducers = $dao->getAllProducers();
$allcategories = $dao->getAllCategories();

//kupljenje msg sa kontrolera
$msg = isset($msg) ? $msg : "";

//kupljenje niza gresaka ukoliko dodje do jedne ili vise 
$errors = isset($errors) ? $errors : array();
//  var_dump($errors);
?>

<div class="container p-4">
    <div class="container mt-5 mb-5 p-5 text-center bg-dark text-white col-5">


        <h4>Insert Car</h4>
        <form action="routes.php">
            <div class="form-group">
                <label for="imepro">Odaberite proizvodjaca</label>
                <br>
                <select class="form-control" name="imepro">
                    <option value=""></option>
                    <?php
                    foreach ($allproducers as $p) {
                      echo "<option value='$p[imeproizvodjaca]'>$p[imeproizvodjaca]</option>";
                    }
                    ?>
                </select>
                <span class="alert-danger">
                    <?php if (array_key_exists('imeproizvodjaca', $errors)) {
                      echo $errors['imeproizvodjaca'];
                    } ?></span>
                <br>
                <input type="text" name="model" class="form-control" placeholder="Unesite model">
                <span class="alert-danger">
                    <?php if (array_key_exists('model', $errors)) {
                      echo $errors['model'];
                    } ?></span>
                <br>
                <label>Odaberite kategoriju</label>

                <select class="form-control col-2" name="kategorija">
                    <option value=""></option>
                    <?php
                    foreach ($allcategories as $p) {
                      echo "<option value='$p[kategorija]'>$p[kategorija]</option>";
                    }
                    ?>
                </select>

                <span class="alert-danger">
                    <?php if (array_key_exists('kategorija', $errors)) {
                      echo $errors['kategorija'];
                    } ?></span>
                <br>
                <input type="number" name="godiste" class="form-control" placeholder=" Unesite godiste">
                <br>
                <span class="alert-danger">
                    <?php if (array_key_exists('godiste', $errors)) {
                      echo $errors['godiste'];
                    } ?></span>

                <br>
                <input type="number" name="cena" class="form-control" placeholder=" Unesite cenu">
                <br>
                <span class="alert-danger">
                    <?php if (array_key_exists('cena', $errors)) {
                      echo $errors['cena'];
                    }
                    ?></span>
                <br>
                <input type="submit" class="btn btn-warning" name="page" value="insert">
            </div>
        </form>
        <?php
        // echo "<span class=alert-danger >$msg</span>";
        if (!empty($msg)) {
          ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $msg; ?>
        </div>
        <?php 
      } ?>
        <form action="routes.php">
            <button type="submit" class="btn btn-outline-warning" name="page" value="showhome">
                <h6>Home page</h6>
            </button>
        </form>

    </div>
</div>
<!--end container-->


<?php include '../includes/footer1.php'; ?> 