<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Car</title>
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
    <!-- <script src="main.js"></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <?php include '../includes/nav.php'; ?>
    <?php require_once '../model/DAO.php';
    $dao = new DAO();
    $allproducers = $dao->getAllProducers();
    $allcategories = $dao->getAllCategories();

    //kupljenje msg sa kontrolera
    $msg = isset($msg) ? $msg : "";

    //kupljenje niza gresaka ukoliko dodje do jedne ili vise 
    $errors = isset($errors) ? $errors : array();
    //  var_dump($errors);
    ?>
    <div class="container-fluid">
        <br><br>
        <div class="container">
         <br><br>
            <h4>Insert Car</h4>
            <form action="routes.php">
                <label>Odaberite proizvodjaca</label>
                 <br>
                <select name="imepro">
                    <option value=""></option>
                    <?php
                    foreach ($allproducers as $p) {
                      echo "<option value='$p[imeproizvodjaca]'>$p[imeproizvodjaca]</option>";
                    }
                    ?>
                </select>
                <span style="color:red;">
                    <?php if (array_key_exists('imeproizvodjaca', $errors)) {
                      echo $errors['imeproizvodjaca'];
                    } ?></span>
                <br><br>
                <input type="text" name="model" placeholder="Unesite model">
                <span style="color:red;">
                    <?php if (array_key_exists('model', $errors)) {
                      echo $errors['model'];
                    } ?></span>
                <br><br>
                <label>Odaberite kategoriju</label>
                <br>
                <select name="kategorija">
                    <option value=""></option>
                    <?php
                    foreach ($allcategories as $p) {
                      echo "<option value='$p[kategorija]'>$p[kategorija]</option>";
                    }
                    ?>
                </select>
                <span style="color:red;">
                    <?php if (array_key_exists('kategorija', $errors)) {
                      echo $errors['kategorija'];
                    } ?></span>
                <br><br>
                <input type="number" name="godiste" placeholder="Unesite godiste">
                <span style="color:red;">
                    <?php if (array_key_exists('godiste', $errors)) {
                      echo $errors['godiste'];
                    } ?></span>

                <br><br>
                <input type="number" name="cena" placeholder="Unesite cenu">
                <span style="color:red;">
                    <?php if (array_key_exists('cena', $errors)) {
                      echo $errors['cena'];
                    }
                    ?></span>
                <br><br>
                <input type="submit" name="page" value="insert">

            </form>
            <?php
            echo "<span style=color:red;>$msg</span>";
            ?>

            <br><br>
            <form action="routes.php">
                <button type="submit" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </form>
            <br>
        </div>
    </div>
    <!--end container-fluid-->
    <?php include '../includes/footer.php'; ?>
</body>

</html> 