<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <table border="3">
        <tr style='background-color:#E7F5E1;'>
            <th>Ime Proizvodjaca</th>
            <th>Model</th>
            <th>Kategotija</th>
            <th>Godiste</th>
            <th>Cena</th>
            <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
            <?php
   //jedan od nacina stampe tabele
            foreach ($allcars as $value) {

                if (isset($car['idvozila'])) $car['idvozila'];

                if ($value['idvozila'] == $car['idvozila']) {
                    echo "<tr style=background-color:#A39D9D;>";
                } else {
                    echo "<tr>";
                }
                echo "<td>$value[imeproizvodjaca]</td>";
                echo "<td>$value[model]</td>";
                echo "<td>$value[kategorija]</td>";
                echo "<td>$value[godiste]</td>";
                echo "<td>$value[cena]</td>";
                echo "<td><a href='routes.php?page=showeditcar&idvozila=$value[idvozila]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
                echo "<td><a href='routes.php?page=deletecar&idvozila=$value[idvozila]'>Delete</a></td>";

                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    <?php
    $msg = isset($msg) ? $msg : "";
    echo "<span class=alert-danger>$msg</msg>";
    ?>
    <br><br>
    <form action="routes.php">
        <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
            <h3>Home page</h3>
        </button>
    </form>
</body>

</html> 