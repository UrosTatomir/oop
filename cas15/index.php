
<?php
require_once 'DAO.php';

// kreiranje objekta od DAO klase
$dao = new DAO();

$cars = $dao->getAllCarsByProducer("Audi");

$carsbycountry = $dao->getAllCarsByCountry("Nemacka");

$carsbycategorytime = $dao->getAllCarsByCatTime(5);



echo "<h3>Prikaz svih automobila po unetom nazivu proizvodjaca</h3>";

foreach ($cars as $car) {

    echo "<table>
      $car[imeproizvodjaca] $car[model] $car[godiste] $car[cena] $car[kategorija]<br>";
}

echo "<h3>Prikaz svih automobila po trazenoj zemlji porekla</h3>";
echo "<table style= background-color:#F35DD8; border=1px>
           <tr>
             <td width=120>ime proizvodjaca</td>
             <td width=100>model</td>
             <td width=100>godiste vozila</td>
             <td width=100>kategorija</td>
             <td width=100>zemlja porekla</td>
           </tr>
      </table>";

foreach ($carsbycountry as $car) {

    echo "<table height=30 border=1px>
          <tr>
             <td width=120>$car[imeproizvodjaca]</td> 
             <td width=100>$car[model]</td> 
             <td width=100>$car[godiste]</td>
             <td width=100>$car[kategorija]</td> 
             <td width=100>$car[zemljaporekla]</td>
          </tr>
          </table>";
}

echo "<h3>Prikaz svih vozila po unetom trajanju kategorije</h3>";
echo "<table style= background-color:#25C8E6;   border=1px>
           <tr>
             <td width=120>ime proizvodjaca</td>
             <td width=100>model</td>
             <td width=100>godiste vozila</td>
             <td width=100>kategorija</td>
             <td width=100>trajanje</td>
           </tr>
     </table>";

foreach ($carsbycategorytime as $car) {

    echo "<table height=30 border=1px>
          <tr>
             <td width=120>$car[imeproizvodjaca]</td>
             <td width=100>$car[model]</td>
             <td width=100>$car[godiste]</td> 
             <td width=100>$car[kategorija]</td>
             <td width=100>$car[trajanje]</td>
          </tr>
          </table>";
          
}
echo "<br>";

$cars = $dao->getAllCarsByDriverId(10);

echo "<h3>prikaz svih automobila koje vozi jedan vozac</h3>";
echo "<table style= background-color:#0f0;   border=1px>
           <tr>
             <td width=120>ime proizvodjaca</td>
             <td width=100>model</td>
             <td width=100>kategorija</td>
             <td width=100>godiste vozila</td>
             <td width=100>ime </td>
             <td width=100>prezime</td>
             <td width=100>godiste</td>
           </tr>
     </table>";
   foreach ($cars as $car) {
//  var_dump($car);   
echo "<table height=30 border=1px>
          <tr>
             
             <td width=120>$car[imeproizvodjaca]</td> <td width=100>$car[model]</td> 
             <td width=100>$car[kategorija]</td> 
             <td width=100>$car[4]</td>  
             <td width=100>$car[ime]</td>
             <td width=100>$car[prezime]</td> 
             <td width=100>$car[godiste]</td>
          </tr>
      </table>";
}

echo"<br>";
$cars=$dao->getAllDriversByCar(1);
echo"<h3>Prikaz svih vozaca koji voze jedno vozilo</h3><br>";
echo "<table style= background-color:#F5EC0C;   border=1px>
           <tr>
             <td width=100>ime</td>
             <td width=100>prezime</td>
             <td width=100>godiste</td>
             <td width=100>ime proizvodjaca</td>
             <td width=100>model</td>
             <td width=100>kategorija</td>
             <td width=100>godiste vozila</td>        
           </tr>
     </table>";
foreach($cars as $car){
    echo "<table height=30 border=1px>
          <tr>
             <td width=100>$car[ime]</td>
             <td width=100>$car[prezime]</td>
             <td width=100>$car[3]</td> 
             <td width=100>$car[imeproizvodjaca]</td> <td width=100>$car[model]</td> 
             <td width=100>$car[kategorija]</td> 
             <td width=100>$car[godiste]</td>      
          </tr>
      </table>";
}










//komplet tabela developre mozzila probati sajt
?>



 