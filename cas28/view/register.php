<?php 
include '../includes/header.php';
include '../includes/nav.php';
?>
<div class="container mt-5 p-5">
    <?php
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>
    <div class="container mt-5 col-4 text-center">
        <h4>Register</h4>
        <form action="routes.php" method="post">
            <input class="form-control" type="text" name="ime" placeholder="Unesite Ime">
            <span class="alert-danger">
                <?php if (array_key_exists('ime', $errors)) {
                    echo $errors['ime'];
                } ?>
            </span>
            <br>
            <input class="form-control" type="text" name="prezime" placeholder="Unesite Prezime">
            <span class="alert-danger">
                <?php if (array_key_exists('prezime', $errors)) {
                    echo $errors['prezime'];
                } ?>
            </span>
            <br>
            <input class="form-control" type="text" name="email" placeholder="Unesite email">
            <span class="alert-danger">
                <?php if (array_key_exists('email', $errors)) {
                    echo $errors['email'];
                } ?>
            </span>
            <br>
            <input class="form-control" type="text" name="username" placeholder="Unesite username">
            <span class="alert-danger">
                <?php if (array_key_exists('username', $errors)) {
                    echo $errors['username'];
                } ?>
            </span>
            <br>
            <input class="form-control" type="password" name="password" placeholder="Unesite password">
            <span class="alert-danger">
                <?php if (array_key_exists('password', $errors)) {
                    echo $errors['password'];
                } ?>
            </span>
            <br>
            <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm  password">
            <span class="alert-danger">
                <?php if (array_key_exists('confirmpassword', $errors)) {
                    echo $errors['confirmpassword'];
                } ?>
            </span>
            <br>
            <input class="btn btn-primary" type="submit" name="page" value="Registrujte se">
        </form>
        <?php
        // echo "<span class=alert-warning>$msg</span>";
        if (!empty($msg)) {
            ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $msg;  ?>
        </div>
        <?php 
    } ?>
        <!--super fora zapamtiti-->
    </div>




</div>

<?php
include '../includes/footer1.php';
?> 