<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    
<h3>Please log in</h3>

<form action="routes.php" method="post">
<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="submit" name="page" value="Log in"><br><br>
</form>

<h3>Don't have an account?</h3>
<h4>Please <a href="routes.php?page=showregister">REGISTER</a></h4>



<?php
if(isset($register)&&$register==1){
?>
<h3>Registration</h3>
<form action="routes.php" method="post">
<input type="text" name="name" placeholder="Name"><br><br>
<input type="text" name="surname" placeholder="Surname"><br><br>
<input type="text" name="email" placeholder="Email"><br><br>
<textarea name="adress" cols="22" rows="10" placeholder="Adress"></textarea><br><br>
<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="submit" name="page" value="Register"><br><br>
</form>

<?php
$error=isset($_GET['error'])?$_GET['error']:"";
echo $error;
}
?>




</body>
</html>