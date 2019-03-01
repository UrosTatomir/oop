<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Driver by Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php 
  require_once '../model/DAO.php';
  $dao = new DAO();
  $alldrivers=$dao->getAllDrivers();
  $errors=isset($errors)?$errors:array();
  $msg = isset($msg) ? $msg : "";
?>
<form action="routes.php">
<h3>Choose driver</h3>
<select name="idvozaca">
<option value=""></option>
<?php
foreach($alldrivers as $driver){
  echo"<option value='$driver[idvozaca]'>$driver[ime] ,$driver[prezime] ,$driver[godiste]</option>";
}
?>
</select>
<span style="color:red;">
<?php
  if(array_key_exists('idvozaca',$errors)){
      echo $errors['idvozaca'];
  }
?>
</span>
<br><br>
<input type="submit" name="page" value="ChooseDriverByCars">
</form>
 <?php echo "<span style=color:red;>$msg</span>";  ?>  <br><br>
 <form action="routes.php">
 <button  type="submit" name="page" value="showhome"><h3>Home page</h3></button>
 </form> 
</body>
</html>