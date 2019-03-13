<?php
include '../includes/header.php';
include '../includes/nav.php'; ?>

<br><br>
<div class="container">
    <br><br>
    <h4>All Cars</h4>
    <table class="table" border="3">
        <thead class="table-dark text-center">
            <tr>
                <th>Ime Proizvodjaca</th>
                <th>Model</th>
                <th>Kategorija</th>
                <th>Godiste</th>
                <th>Cena</th>
                <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
        </thead>
        <tbody>
            <?php
            // if (isset($car['idvozila'])) $car['idvozila'];
            $caredit=isset($car['idvozila'])?$car['idvozila']:"";
            //jedan od nacina stampe tabele
            foreach ($allcars as $car) {

                if ($caredit == $car['idvozila']) {
                    echo "<tr class=table-success>";
                } else {
                    echo "<tr>";
                }

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
        </tbody>
    </table>
    <?php
    $msg = isset($msg) ? $msg : "";
    echo "<span style=color:blue;>$msg</msg>";
    ?>
    <br><br>
    <form class="form-group" action="routes.php">
        <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
            <h6>Home page</h6>
        </button>
    </form>
</div>


<?php include '../includes/footer.php'; ?> 