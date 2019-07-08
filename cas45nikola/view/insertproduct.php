<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Insert products</h2>
<?php
$msg=isset($msg)?$msg:"";

echo $msg;

?>
<!-- za uploadovanje slika obavezno na formi dodati enctype="multipart/form-data" -->
<form action="routes.php" method="post" enctype="multipart/form-data">

<input type="text" name="brand" placeholder="Brand"><br><br>
<input type="text" name="model" placeholder="Model"><br><br>
<textarea name="description" cols="22" rows="15" placeholder="Description"></textarea><br><br>
<input type="text" name="price" placeholder="Price"><br><br>
<input type="file" name="image"/><br><br>

<input type="submit" name="page" value="Insert product">


</form>





</body>
</html>