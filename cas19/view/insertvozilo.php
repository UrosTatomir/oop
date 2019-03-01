<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Vozilo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php require_once '../model/DAO.php';
   $dao=new DAO();
   $allproducers=$dao->getAllProducers();
   $allcategories=$dao->getAllCategories();

   //kupljenje msg sa kontrolera
   $msg=isset($msg)?$msg:"";

   //kupljenje niza gresaka ukoliko dodje do jedne ili vise gresaka
   $errors=isset($errors)?$errors:array();
  //  var_dump($errors);
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
  <span style="color:red;"> <?php if (array_key_exists('imeproizvodjaca', $errors)) {
  echo $errors['imeproizvodjaca'];
  } ?></span>
  <br><br>
  <input type="text" name="model" placeholder="Unesite model">
  <span style="color:red;"> <?php if (array_key_exists('model', $errors)) {
  echo $errors['model'];
  } ?></span>
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
  <span style="color:red;"> <?php if (array_key_exists('kategorija', $errors)) {
  echo $errors['kategorija'];
   } ?></span>
  <br><br>
  <input type="number" name="godiste" placeholder="Unesite godiste">
  <span style="color:red;"> <?php if (array_key_exists('godiste', $errors)){
   echo $errors['godiste'];
   } ?></span>

  <br><br>
  <input type="number" name="cena" placeholder="Unesite cenu">
  <span style="color:red;"> <?php if(array_key_exists('cena',$errors)){
    echo $errors['cena'];
  }
  ?></span>
  <br><br>
  <input type="submit" name="page" value="insert">

</form>
<?php
echo"<span style=color:red;>$msg</span>";
?>


</body>
</html>