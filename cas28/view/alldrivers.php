<?php
include '../includes/header.php';
include '../includes/nav.php';
//   var_dump($alldrivers); //test da li radi
?>

<div class="container">
    <div class="container mt-5 p-5 col-8">

        <h4>All Drivers</h4>
        <table class="table table-dark text-center table-sm">
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Godiste</th>
                    <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($driver['idvozaca'])) $driver['idvozaca'];

                //jedan od nacina stampe tabele

                foreach ($alldrivers as $value) {
                    // if(isset($driver['idvozaca']))$driver['idvozaca'];
                    if ($value['idvozaca'] == $driver['idvozaca']) {

                        echo "<tr class='bg-light text-dark'>"; //moze da se ubaci i cela tabela,a moze ired <tr>
                    } else {
                        echo "<tr>";
                    }
                    echo "<td>$value[ime]</td>";
                    echo "<td>$value[prezime]</td>";
                    echo "<td>$value[godiste]</td>";
                    echo "<td><a class='btn btn-info btn-sm btn-block' href='routes.php?page=showeditdriver&idvozaca=$value[idvozaca]'>&check;</a></td>";  //pod navodnicima "" mogu navodnici ''
                    echo "<td><a class='btn btn-danger btn-sm btn-block' href='routes.php?page=deletedriver&idvozaca=$value[idvozaca]'>&cross;</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        $msg = isset($msg) ? $msg : "";
        echo "<span class=alert-danger>$msg</span>";
        ?>

        <form class="form-group p-3" action="routes.php">
            <button type="submit" class="btn btn-outline-dark" name="page" value="showhome" 4>
                <h6>Home page</h6>
            </button>
        </form>


        <!-- zadatak vozila vozaci odnosno da pokaze sva zaduzena vozila i koji vozaci su zaduzili  razlicita vozila-->
    </div>
</div>

<?php include '../includes/footer1.php'; ?> 