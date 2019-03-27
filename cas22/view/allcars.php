<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
 <table border="3">
   <tr>
       <th>Ime Proizvodjaca</th>
       <th>Model</th>
       <th>Kategotija</th>
       <th>Godiste</th>
       <th>Cena</th>
       <th colspan="2">Akcija</th> <!-- spajamo kolone colspan-->
       <?php
   //jedan od nacina stampe tabele
        foreach ($allcars as $car) {
            echo "<tr>";
            echo "<td>$car[imeproizvodjaca]</td>";
            echo "<td>$car[model]</td>";
            echo "<td>$car[kategorija]</td>";
            echo "<td>$car[godiste]</td>";
            echo "<td>$car[cena]</td>";
            echo "<td><a href='#'>Edit</a></td>";  //pod navodnicima "" mogu navodnici ''
            echo "<td><a href='routes.php?page=deletecar&idvozila=$car[idvozila]'>Delete</a></td>";

            echo "</tr>";
        }
        ?>
   </tr>
 </table>
 <?php
  $msg=isset($msg)?$msg:"";
  echo"<span style=color:blue;>$msg</span>";
 ?>
 <br><br>
 <form action="routes.php">
 <button  type="submit" name="page" value="showhome"><h3>Home page</h3></button>
 </form>  
</body>
</html>