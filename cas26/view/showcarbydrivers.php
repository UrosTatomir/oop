<?php
include '../includes/header.php';
include '../includes/nav.php';
require_once '../model/DAO.php';
$dao = new DAO();
$allcardrivers = $dao->getAllDriversByCar($idvozila);
// var_dump($allcardrivers);
?>

<div class="container" style="background-color:#E4E1C7">
    <div class="container mt-5 p-5 col-8">

        <h4>Show car by drivers</h4>
        <table class="table table-dark text-center table-sm">
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Godiste</th>
                    <th>Ime Proizvodjaca</th>
                    <th>Model</th>
                    <th>Kategorija</th>
                    <th>Godiste</th>
                    <th>Cena</th>
                    <th colspan="2">Akcija</th>
                </tr>
            </thead>
            <tbody>
                <?php
   //jedan od nacina stampe tabele
                foreach ($allcardrivers as $value) {
                    echo "<tr>";
                    echo "<td>$value[ime]</td>";
                    echo "<td>$value[prezime]</td>";
                    echo "<td>$value[3]</td>";
                    echo "<td>$value[imeproizvodjaca]</td>";
                    echo "<td>$value[model]</td>";
                    echo "<td>$value[kategorija]</td>";
                    echo "<td>$value[godiste]</td>";
                    echo "<td>$value[cena]</td>";
                    echo "<td><a class=text-warning href='routes.php?page=showeditdriver&idvozaca=$value[idvozaca]'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
                    echo "<td><a class=text-danger href='routes.php?page=deletedriver&idvozaca=$value[idvozaca]'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        
        <form class="form-group" action="routes.php">
            <button type="submit" class="btn btn-outline-dark" name="page" value="showhome">
                <h6>Home page</h6>
            </button>
        </form>
    </div>
</div>
<?php include '../includes/footer1.php'; ?> 