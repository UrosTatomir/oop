<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php require_once '../model/DAO.php';
   $dao=new DAO();
   $allproducers=$dao->getAllProducers();
   $allcategories=$dao->getAllCategories();
 ?>
     
   <h1>Unos vozilo</h1>

<form action="routes.php">
  <label>Odaberite proizvodjaca</label>
  
  <select name="imepro">
  <option value=""></option>
   <?php
  foreach ($allproducers as $p) {
    echo "<option value='$p[imeproizvodjaca]'>$p[imeproizvodjaca]</option>";
  }

  ?>
  </select>
  <br><br>
  <input type="text" name="model" placeholder="Unesite model">
  <br><br>
  <label>Odaberite kategoriju</label>
  <select name="kategorija">
  <option value=""></option>
  <?php
  foreach($allcategories as $p){
    echo"<option value='$p[kategorija]'>$p[kategorija]</option>";
  }
  ?>
 
  </select>
  <br><br>
  <input type="number" name="godiste" placeholder="Unesite godiste">
  <br><br>
  <input type="number" name="cena" placeholder="Unesite cenu">
  <br><br>
  <input type="submit" name="page" value="insert">

</form>



</body>
</html>