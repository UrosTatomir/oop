<?php
include '../includes/header.php';
include '../includes/nav.php';
require_once '../model/DAO.php';
$dao = new DAO();
$alldrivers = $dao->getAllDrivers();
$errors = isset($errors) ? $errors : array();
$msg = isset($msg) ? $msg : "";
?>

<div class="container mt-5 p-5">
    <div class="container mt-5 mb-5 p-5  text-center col-5 bg-dark text-white">

        <h4>Choose driver</h4>
        <form action="routes.php">
            <div class="form-group">
                <select class="form-control" name="idvozaca">
                    <option value=""></option>
                    <?php
                    foreach ($alldrivers as $driver) {
                        echo "<option value='$driver[idvozaca]'>$driver[ime] ,$driver[prezime] ,$driver[godiste]</option>";
                    }
                    ?>
                </select>
                <br>
                <span class="alert-danger">
                    <?php
                    if (array_key_exists('idvozaca', $errors)) {
                        echo $errors['idvozaca'];
                    }
                    ?>
                </span>
                <div class="p-3">
                    <input type="submit" class="btn btn-warning " name="page" value="ChooseDriverByCars">
                </div>
            </div>
        </form>
        <?php if (!empty($msg)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $msg; ?>
        </div>
        <?php  } ?>
        <form action="routes.php">
            <div class="form-group p-3">
                <button type="submit" class="btn btn-outline-warning" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </div>
        </form>

    </div>
</div>

<?php include '../includes/footer1.php'; ?> 