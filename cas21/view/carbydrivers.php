<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car by Drivers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
require_once '../model/DAO.php';
 $dao= new DAO();
 $allcars=$dao->getAllCars();
 $errors = isset($errors) ? $errors : array();
 $msg = isset($msg) ? $msg : "";
?>
<form action="routes.php">
<h3>Choose car</h3>
<select name="idvozila">
<option value=""></option>
<?php
foreach ($allcars as $car) {
    echo "<option value='$car[idvozila]'>$car[imeproizvodjaca] ,$car[model] ,$car[kategorija],$car[godiste]</option>";
}
?>
</select>
<span style="color:red;">
<?php
if (array_key_exists('idvozila', $errors)) {
    echo $errors['idvozila'];
}
?>
</span>
<br><br>
<input type="submit" name="page" value="ChooseCarByDrivers">
</form>
 <?php echo "<span style=color:red;>$msg</span>"; ?>  <br><br>
 <form action="routes.php">
 <button  type="submit" name="page" value="showhome"><h3>Home page</h3></button>
 </form>    
</body>
</html>