
    <?php
    include '../includes/header.php';
    include '../includes/nav.php';
    //   var_dump($alldrivers); //test da li radi
    ?>
    
        <br><br>
        <div class="container">
            <br><br>
            <h4>All Drivers</h4>
            <table class="table" border="3">
                <thead class="table-info text-center">
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Godiste</th>
                        <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
                    </tr>
                </thead>
                <tbody>
                    <?php
   //jedan od nacina stampe tabele

                    foreach ($alldrivers as $value) {
                        if (isset($driver['idvozaca']))$driver['idvozaca'];
                        if ($value['idvozaca'] == $driver['idvozaca']) {
                            echo "<tr class=table-success>";
                        } else {
                            echo "<tr>";
                        }
                        echo "<td>$value[ime]</td>";
                        echo "<td>$value[prezime]</td>";
                        echo "<td>$value[godiste]</td>";
                        echo "<td><a href='routes.php?page=showeditdriver&idvozaca=$value[idvozaca]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
                        echo "<td><a href='routes.php?page=deletedriver&idvozaca=$value[idvozaca]'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
            $msg = isset($msg) ? $msg : "";
            echo "<span class=alert-danger>$msg</span>";
            ?>
            <br><br>
            <form action="routes.php">
                <button type="submit" class="btn btn-outline-primary" name="page" value="showhome" 4>
                    <h6>Home page</h6>
                </button>
            </form>
            <br>

            <!-- zadatak vozila vozaci odnosno da pokaze sva zaduzena vozila i koji vozaci su zaduzili  razlicita vozila-->
        </div>
    

    <?php include '../includes/footer.php'; ?>
 