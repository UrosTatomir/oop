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
    <?php 
    session_start();
    if (isset($_SESSION['ulogovan'])) {
      $ulogovan = $_SESSION['ulogovan']; ?>

    <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="../view/routes.php?page=showhome" style="font-family: cursive, sans-serif; font-size:18px; color: #FDE600;">
            CarsAndFreeRoads</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../view/routes.php?page=showhome">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/routes.php?page=showlogin">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?page=showinsert">Insert Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?page=showinsertvozaca">InsertDriver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?page=showassign">Assigning Vehicle-Driver</a>
                </li>
                <li>
                    <a class="nav-link" href="../view/routes.php?page=showdrivers">ShowDrivers</a>
                </li>
                <li>
                    <a class="nav-link" href="../view/routes.php?page=showcars">ShowCars</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Show-Action
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="../view/routes.php?page=showdriverbycars">ShowDriverByCars</a>
                        <a class="dropdown-item" href="../view/routes.php?page=showcarbydrivers">ShowCarByDrivers</a>

                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <span class="text-white"><?php echo $ulogovan['ime']; ?>&nbsp;&nbsp;</span>
                <input class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="page" value="Izloguj se">
            </form>

        </div>
    </nav>
    <div class="container-fluid">

        <?php
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
    </div>
    <!--end container fluid-->
    <footer class=" bg-dark fixed-bottom">
        <div class="container text-center">

            <p><a class="text-white" href="#">Copyright by PHP DEVLOPERS 2019</a></p>

        </div>
    </footer>
    <?php 
  } else {
    header('Location:login.php?msg=Morate se ulogovati da bi pristupili aplikaciji');
  }
  ?>
</body>

</html> 