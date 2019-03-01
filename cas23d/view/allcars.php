<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Cars</title>
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
    <?php include '../includes/nav.php'; ?>
    <div class="container-fluid">
    <br><br>
        <div class="container">
        <br><br>
        <h4>All Cars</h4>
            <table border="3">
                <tr class="bg-dark text-light text-center">
                    <th>Ime Proizvodjaca</th>
                    <th>Model</th>
                    <th>Kategorija</th>
                    <th>Godiste</th>
                    <th>Cena</th>
                    <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
                    <?php
   //jedan od nacina stampe tabele
                    foreach ($allcars as $car) {
                        echo "<tr>";
                        echo "<td>$car[imeproizvodjaca]</td>";
                        echo "<td>$car[model]</td>";
                        echo "<td>$car[kategorija]</td>";
                        echo "<td>$car[godiste]</td>";
                        echo "<td>$car[cena]</td>";
                        echo "<td><a href='routes.php?page=showeditcar&idvozila=$car[idvozila]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
                        echo "<td><a href='routes.php?page=deletecar&idvozila=$car[idvozila]'>Delete</a></td>";

                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <?php
            $msg = isset($msg) ? $msg : "";
            echo "<span style=color:blue;>$msg</msg>";
            ?>
            <br><br>
            <form action="routes.php">
                <button type="submit" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </form>
        </div>
    </div>
    <!--end container-fluid-->
    <?php include '../includes/footer.php'; ?>
</body>

</html> 