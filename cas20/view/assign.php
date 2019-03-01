<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assign</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
 require_once '../model/DAO.php';
 $dao = new DAO();
 $allcars=$dao->getAllCars();
 $alldrivers=$dao->getAllDrivers();
 $errors=isset($errors)?$errors:array();
 $msg=isset($msg)?$msg:"";
?>
<h3>Choose car </h3>

<form action="routes.php">

  <select name="idvozila">
  <option value=""></option>
  <?php
  foreach($allcars as $car){
      echo"<option value='$car[idvozila]'>$car[imeproizvodjaca] ,$car[model], $car[godiste]</option>";
  } 
  //value saljemo upisujemo tabelu vozila vozaci  baze  ostalo se ispisuje u formi
  ?>
  </select>
  <span style="color:red;"> <?php if (array_key_exists('idvozila', $errors)) {
   echo $errors['idvozila'];
  } ?></span>
<br><br>
<h3>Choose driver </h3>
<select name="idvozaca">
<option value=""></option>
<?php
foreach ($alldrivers as $driver) {
    echo "<option value='$driver[idvozaca]'>$driver[ime]  $driver[prezime] ,$driver[godiste]</option>";
}
?>
</select>
<span style="color:red;"> <?php if (array_key_exists('idvozaca', $errors)) {
echo $errors['idvozaca'];
} ?></span>
<br><br>
<input type="submit" name="page" value="dodeli"> 

</form>
<?php
echo "<span style=color:red;>$msg</span>";
?>

</body>
</html>