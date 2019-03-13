<!DOCTYPE <!DOCTYPE html>
<html>


<?php
include '../includes/header.php';
include '../includes/nav.php';
require_once '../model/DAO.php';
$dao = new DAO();
$allcars = $dao->getAllCars();
$errors = isset($errors) ? $errors : array();
$msg = isset($msg) ? $msg : "";
?>

<div class="container mt-5 p-5" style="background-color:#E4E1C7">
    <div class="container mt-5 mb-5 p-5 text-center col-5 bg-dark text-white ">
        
        <h4>Choose car</h4>
        <form action="routes.php">
            <div class="form-group">

                <select class="form-control" name="idvozila">
                    <option value=""></option>
                    <?php
                    foreach ($allcars as $car) {
                        echo "<option value='$car[idvozila]'>$car[imeproizvodjaca] ,$car[model] ,$car[kategorija],$car[godiste]</option>";
                    }
                    ?>
                </select>
                <span class="alert-danger">
                    <?php
                    if (array_key_exists('idvozila', $errors)) {
                        echo $errors['idvozila'];
                    }
                    ?>
                </span>
                <div class="p-4">
                <input type="submit" class="btn btn-warning" name="page" value="ChooseCarByDrivers">
                </div>
            </div>
        </form>
        <?php echo "<span class=alert-damger>$msg</span>"; ?> 
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