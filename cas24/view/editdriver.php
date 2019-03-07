
    <?php
     include '../includes/header.php';
     include '../includes/nav.php';
      ?>
    
        <br><br>
        <div class="container">
            <br><br>
            <h4>Edit Driver</h4>
            <?php
 // var_dump($driver);
            $errors = isset($errors) ? $errors : array();
            $msg = isset($msg) ? $msg : "";
            ?>

            <form action="routes.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="idvozaca" value="<?php if (isset($driver['idvozaca'])) echo $driver['idvozaca']; ?>">
                    <!--kao skriveni podatak saljemo id zato sto namje na controlleru bitan ali korisnik ga ne vidis-->

                    <input type="text" name="ime" value="<?php if (isset($driver['ime'])) echo $driver['ime']; ?>"><br>
                    <span class="alert-danger">
                        <?php if (array_key_exists('ime', $errors)) echo $errors['ime'] ?>
                    </span>
                    <br><br>
                    <input type="text" name="prezime" value="<?php if (isset($driver['prezime'])) echo $driver['prezime']; ?>"><br>
                    <span class="alert-danger">
                        <?php if (array_key_exists('prezime', $errors)) echo $errors['prezime'] ?>
                    </span>
                    <br><br>
                    <input type="text" name="godiste" value="<?php if (isset($driver['godiste'])) echo $driver['godiste']; ?>"><br>
                    <span class="alert-danger">
                        <?php if (array_key_exists('godiste', $errors)) echo $errors['godiste']; ?>
                    </span>
                    <br><br>
                    <input type="submit" class="btn btn-primary" class="btn btn-primary" name="page" value="Edit driver"><br><br>
                    <!--ovde moze da se koristi foreach petlja a moze i na ovaj nacin preko uslova if() bez {}zagradas-->
                </div>
            </form>
            <?php
            echo "<span class=alert-dangers>$msg</span>";
            ?>

            <form action="routes.php">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
                        <h6>Home page</h6>
                    </button>
                </div>
            </form>
        </div>
    
    
    <?php include '../includes/footer.php'; ?>
 