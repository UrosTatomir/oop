<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CarsAndFreeRoads</title>
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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</head>

<body style="background:linear-gradient(to top,gray,white) no-repeat fixed center;">
    <div class="container mt-5">
        <?php
        $errors = isset($errors) ? $errors : array();
        $msg = isset($msg) ? $msg : "";
        ?>
        <div class="container col-4 text-center">
            <h4>Registracija</h4>
            <form action="routes.php" method="post">
                <input class="form-control" type="text" name="ime" placeholder="Unesite Ime">
                <span class="alert-danger">
                    <?php if (array_key_exists('ime', $errors)) {
                        echo $errors['ime'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="text" name="prezime" placeholder="Unesite Prezime">
                <span class="alert-danger">
                    <?php if (array_key_exists('prezime', $errors)) {
                        echo $errors['prezime'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="text" name="email" placeholder="Unesite email">
                <span class="alert-danger">
                    <?php if (array_key_exists('email', $errors)) {
                        echo $errors['email'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="text" name="username" placeholder="Unesite username">
                <span class="alert-danger">
                    <?php if (array_key_exists('username', $errors)) {
                        echo $errors['username'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="password" name="password" placeholder="Unesite password">
                <span class="alert-danger">
                    <?php if (array_key_exists('password', $errors)) {
                        echo $errors['password'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm  password">
                <span class="alert-danger">
                    <?php if (array_key_exists('confirmpassword', $errors)) {
                        echo $errors['confirmpassword'];
                    } ?>
                </span>
                <br>
                <input class="btn btn-primary" type="submit" name="page" value="Registrujte se">
            </form>
            <?php
        // echo "<span class=alert-warning>$msg</span>";
            if (!empty($msg)) {
                ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $msg;  ?>
            </div>
            <?php 
        } ?>
            <!--super fora zapamtiti-->
    </div>
    <!-- symbol x  &#88; &cross; &check; &checkmark;-->
</div>
    <!--end container fluid-->
    <footer class=" bg-dark fixed-bottom">
        <div class="container text-center">

            <p><a class="text-white" href="#">Copyright by PHP DEVLOPERS 2019</a></p>

        </div>
    </footer>

</body>

</html> 