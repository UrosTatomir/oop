<?php 
include '../includes/header.php';
include '../includes/nav.php';
?>
<div class="container mt-5 p-5">

    <div class="container mt-5 col-4 text-center">
           <div class="row">
                <div class="col-xs-5">
                    <h4 class="active" id="login-form-link">Login</h4>
                </div>
                <hr>
                <div class="col-xs-5 ">
                    <h4><a class="text-right" href="routes.php?page=showregister" id="">Register</a></h4>
                </div>
            </div>
            <form action="routes.php" method="post">
                <input class="form-control" type="text" name="username" placeholder="username">
                <br>
                <input class="form-control" type="password" name="password" placeholder=" password">
                <br>
                <input class="btn btn-primary" type="submit" name="page" value="Ulogujte se">
            </form>
            &nbsp;
            <!-- skracenica za razmak ili <br>-->
            <?php
            if (!empty($msg)) {
                ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $msg; ?>
            </div>
            <?php 
        } ?>
        </div>

    </div>
    <!-- symbol x  &#88; &cross; &check; &checkmark;-->


    <?php
    include '../includes/footer1.php';
    ?> 