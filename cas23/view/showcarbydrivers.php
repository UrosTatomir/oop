<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show car by Drivers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
    require_once '../model/DAO.php';
    $dao = new DAO();
    $allcardrivers = $dao->getAllDriversByCar($idvozila);
    // var_dump($allcardrivers);
    ?>
 <table border="3">
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
 <?php
   //jedan od nacina stampe tabele
foreach ($allcardrivers as $value){
    echo "<tr>";
    echo "<td>$value[ime]</td>";
    echo "<td>$value[prezime]</td>";
    echo "<td>$value[3]</td>";
    echo "<td>$value[imeproizvodjaca]</td>";
    echo "<td>$value[model]</td>";
    echo "<td>$value[kategorija]</td>";
    echo "<td>$value[godiste]</td>";
    echo "<td>$value[cena]</td>";
    echo "<td><a href='#'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
    echo "<td><a href='routes.php?page=deletedriver&idvozaca=$value[idvozaca]'>Delete</a></td>";
    echo "</tr>";
}
?>
 </table>
 <br><br>
 <form action="routes.php">
 <button  type="submit" name="page" value="showhome"><h3>Home page</h3></button>
 </form>   
</body>
</html>