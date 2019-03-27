<?php 
// include '../includes/header.php';
// include '../includes/nav.php';
?>
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

    <div class="container-fluid">
        <div class="container mt-5 p-5">

            <div class="container mt-5 col-4 text-center">
                    <h4>Login</h4>
                <form action="routes.php" method="post">
                    <input class="form-control" type="text" name="username" placeholder="username">
                    <br>
                    <input class="form-control" type="password" name="password" placeholder=" password">
                    <br>
                    <input class="btn btn-primary" type="submit" name="page" value="Ulogujte se">
                </form>
                &nbsp;
                <!-- skracenica za razmak ili <br>-->
                <h5>Ako niste registrovani molimo Vas da to ucinite preko linka - <a class="text-right" href="routes.php?page=showregister">registracija</a></h5>
                <?php
                if (!empty($msg)) {   //sve sto saljemo includom $msg ide ovako
                    ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>

                </div>
                <?php 
            } ?>
                <!--posto message sa index strane ide na ovu stranu saljemo preko header Location taj podatak ide get METODOM PA JE OVDE POTREBNO DA GA POKUPIM IZ GET-a -->
                <?php if (!empty($_GET['msg'])) {
                    // $msg = $_GET['msg'];
                    ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    // $msg = $_GET['msg'];
                    echo $_GET['msg'];
                    ?>
                </div>
                <?php 
            } ?>
            </div>

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