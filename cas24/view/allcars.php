
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
    //jedan od nacina stampe tabele
                    foreach ($allcars as $value) {
                        if(isset($car['idvozila'])) $car['idvozila'];
                        if ($value['idvozila'] == $car['idvozila']) {
                            echo "<tr class=table-success>";
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
