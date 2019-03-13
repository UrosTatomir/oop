
    <?php
    include '../includes/header.php';
    include '../includes/nav.php';
    require_once '../model/DAO.php';
    $dao = new DAO();
    $alldrivers = $dao->getAllDrivers();
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>
    
        <br><br>
        <div class="container">
            <br><br>
            <h4>Choose driver</h4>
            <form action="routes.php">
                <div class="form-group">
                    <select class="form-control col-3" name="idvozaca">
                        <option value=""></option>
                        <?php
                        foreach ($alldrivers as $driver) {
                            echo "<option value='$driver[idvozaca]'>$driver[ime] ,$driver[prezime] ,$driver[godiste]</option>";
                        }
                        ?>
                    </select>
                    <span class="alert-danger">
                        <?php
                        if (array_key_exists('idvozaca', $errors)) {
                            echo $errors['idvozaca'];
                        }
                        ?>
                    </span>
                    <br><br>
                    <input type="submit" class="btn btn-primary" name="page" value="ChooseDriverByCars">
                </div>
            </form>
            <?php echo "<span class=alert-danger >$msg</span>";  ?> <br><br>
            <form action="routes.php">
                <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            
            </form>
            <br>
        </div>

    
    <?php include '../includes/footer.php'; ?>
 