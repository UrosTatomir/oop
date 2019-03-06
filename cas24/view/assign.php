<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assign</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <?php
    include '../includes/nav.php';
    require_once '../model/DAO.php';
    $dao = new DAO();
    $allcars = $dao->getAllCars();
    $alldrivers = $dao->getAllDrivers();
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>
    <div class="container-fluid">
        <br><br>
        <div class="container">
            <br><br>
            <h4>Choose car </h4>

            <form action="routes.php">
                <div class="form-group">
                    <select class="form-control col-3" name="idvozila">
                        <option value=""></option>
                        <?php
                        foreach ($allcars as $car) {
                            echo "<option value='$car[idvozila]'>$car[imeproizvodjaca] ,$car[model], $car[godiste]</option>";
                        }
                        //value saljemo upisujemo tabelu vozila vozaci  baze  ostalo se ispisuje u formi
                        ?>
                    </select>
                    <span class="alert-danger">
                        <?php if (array_key_exists('idvozila', $errors)) {
                            echo $errors['idvozila'];
                        } ?></span>
                    <br><br>
                    <h4>Choose driver </h4>
                    <select class="form-control col-3" name="idvozaca">
                        <option value=""></option>
                        <?php
                        foreach ($alldrivers as $driver) {
                            echo "<option value='$driver[idvozaca]'>$driver[ime]  $driver[prezime] ,$driver[godiste]</option>";
                        }
                        ?>
                    </select>
                    <span class="alert-danger">
                        <?php if (array_key_exists('idvozaca', $errors)) {
                            echo $errors['idvozaca'];
                        } ?></span>
                    <br><br>
                    <input type="submit" class="btn btn-primary" name="page" value="assign">
                </div>
            </form>
            <?php
            echo "<span class=alert-danger>$msg</span>";
            ?>
            <br><br>
            <form action="routes.php">
                <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </form>
        </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html> 