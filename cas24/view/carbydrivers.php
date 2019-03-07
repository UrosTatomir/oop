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
    
        <br><br>
        <div class="container">
            <br><br>
            <h4>Choose car</h4>
            <form action="routes.php">
                <div class="form-group">

                    <select class="form-control col-4" name="idvozila">
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
                    <br><br>
                    <input type="submit" class="btn btn-primary" name="page" value="ChooseCarByDrivers">
                </div>
            </form>
            <?php echo "<span class=alert-damger>$msg</span>"; ?> <br><br>
            <form action="routes.php">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
                        <h6>Home page</h6>
                    </button>
                </div>
            </form>
        </div>
    
    
    <?php include '../includes/footer.php'; ?>


 