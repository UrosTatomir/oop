<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Vozaca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$msg=isset($msg)?$msg:"";
$errors=isset($errors)?$errors:array();
?>
<h1>Unos Vozaca</h1>
<form action="routes.php">
  <input type="text" name="ime" placeholder="Unesite Ime">
  <span style="color:red;"><?php if(array_key_exists('ime',$errors)){
   echo $errors['ime'];
  } ?>
  </span>
  <br><br>
  <input type="text" name="prezime" placeholder="Unesite Prezime">
  <span style="color:red;"><?php if (array_key_exists('prezime', $errors)) {
  echo $errors['prezime'];
  } ?>
  </span>
  <br><br>
  <input type="number" name="godiste" placeholder="Unesite Godiste">
  <span style="color:red;"><?php if (array_key_exists('godiste', $errors)) {
  echo $errors['godiste'];
  } ?>
  </span>
 <br><br>
  <input type="submit" name="page" value="insertvozaca"> 
</form>
<?php
echo "<span style=color:red;>$msg</span>";
?>    
</body>
</html>