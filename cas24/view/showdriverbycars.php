<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Showdriverbycars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
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
    $dao = new DAO();
    $allcarsdriver = $dao->getAllCarsByDriverId($idvozaca);
    // var_dump($allcarsdriver);
    ?>
    <div class="container-fluid">
        <br><br>
        <div class="container">
            <br><br>
            <h4>Show driver by cars</h4>
            <table class="table" border="3">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Ime Proizvodjaca</th>
                        <th>Model</th>
                        <th>Kategorija</th>
                        <th>Godiste</th>
                        <th>Cena</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Godiste</th>
                        <th colspan="2">Akcija</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
   //jedan od nacina stampe tabele
                    foreach ($allcarsdriver as $value) {
        
                        echo "<tr>";
                        echo "<td>$value[imeproizvodjaca]</td>";
                        echo "<td>$value[model]</td>";
                        echo "<td>$value[kategorija]</td>";
                        echo "<td>$value[4]</td>";
                        echo "<td>$value[cena]</td>";
                        echo "<td>$value[ime]</td>";
                        echo "<td>$value[prezime]</td>";
                        echo "<td>$value[godiste]</td>";
                        echo "<td><a href='routes.php?page=showeditcar&idvozila=$value[idvozila]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
                        echo "<td><a href='routes.php?page=deletecar&idvozila=$value[idvozila]'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <br><br>
            <form action="routes.php">
                <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </form>
        </div>
    </div>
    <!--end container-fluid-->
    <?php include '../includes/footer.php'; ?>
</body>

</html> 