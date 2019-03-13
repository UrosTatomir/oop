<?php
include '../includes/header.php';
include '../includes/nav.php';
$dao = new DAO();
$allcarsdriver = $dao->getAllCarsByDriverId($idvozaca);
// var_dump($allcarsdriver);
?>

<div class="container p-5" style="background-color:#E4E1C7">
    <div class="container col-8 mt-5 mb-5 p-4 text-center bg-dark text-white">

        <h4>Show driver by cars</h4>
        <table class="table table-dark text-center table-sm">
            <thead>
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
                    echo "<td><a class=text-warning href='routes.php?page=showeditcar&idvozila=$value[idvozila]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
                    echo "<td><a class=text-danger  href='routes.php?page=deletecar&idvozila=$value[idvozila]'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <form action="routes.php">
            <button type="submit" class="btn btn-outline-warning" name="page" value="showhome">
                <h6>Home page</h6>
            </button>
        </form>  
    </div>
</div>

<?php include '../includes/footer1.php'; ?> 