<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Drivers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <?php
 //   var_dump($alldrivers); //test da li radi
    ?>

    <table border="3">
        <tr style='background-color:#E7F5E1;'>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godiste</th>
            <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
        </tr>
        <?php
   //jedan od nacina stampe tabele
        foreach ($alldrivers as $value) {

            if (isset($driver['idvozaca']))$driver['idvozaca'];
            
            if ($value['idvozaca'] == $driver['idvozaca']) {
                echo "<tr style=background-color:#A39D9D;>";
            } else {
                echo "<tr>";
            }

            echo "<td>$value[ime]</td>";
            echo "<td>$value[prezime]</td>";
            echo "<td>$driver[godiste]</td>";
            echo "<td><a href='routes.php?page=showeditdriver&idvozaca=$value[idvozaca]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
            echo "<td><a href='routes.php?page=deletedriver&idvozaca=$value[idvozaca]'>Delete</a></td>";

            echo "</tr>";
        }
        ?>

    </table>
    <?php
    $msg = isset($msg) ? $msg : "";
    echo "<span style=color:blue;>$msg</span>";
    ?>
    <br><br>
    <form action="routes.php">
        <button type="submit" name="page" value="showhome" 4>
            <h3>Home page</h3>
        </button>
    </form>

    <!-- zadatak vozila vozaci odnosno da pokaze sva zaduzena vozila i koji vozaci su zaduzili  razlicita vozila-->
</body>

</html> 