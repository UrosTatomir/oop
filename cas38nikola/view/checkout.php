<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <?php
        if(isset($_SESSION['user'])){

    ?>

<h4>Ulogovan korisnik:<?php echo $_SESSION['user']['name'];?></h4>


<?php
$user=$_SESSION['user'];
?>
<form action="routes.php" method="post">

<input type="text" name="name" value="<?php echo $user['name'];?>"><br><br>
<input type="text" name="surname" value="<?php echo $user['surname'];?>"><br><br>
<input type="text" name="email" value="<?php echo $user['email'];?>"><br><br>
<input type="text" name="phone" value="<?php echo $user['phone'];?>"><br><br>
<textarea name="adress"><?php echo $user['adress'];?></textarea><br><br>
<input type="submit" name="page" value="Order">

</form>






<?php
  }else{
      header('Location:login.php');
  }

?>
</body>
</html>