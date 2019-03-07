
    <?php
     include '../includes/header.php';
     include '../includes/nav.php';
     require_once '../model/DAO.php';
    $dao = new DAO();
    $allproducers = $dao->getAllProducers();
    $allcategories = $dao->getAllCategories();

    //kupljenje msg sa kontrolera
    $msg = isset($msg) ? $msg : "";

    //kupljenje niza gresaka ukoliko dodje do jedne ili vise 
    $errors = isset($errors) ? $errors : array();
    //  var_dump($errors);
    ?>
    
        <br><br>
        <div class="container">
            <br><br>
            <h4>Insert Car</h4>
            <form action="routes.php">
                <div class="form-group">
                    <label for="imepro">Odaberite proizvodjaca</label>
                    <br>
                    <select class="form-control col-2" name="imepro">
                        <option value=""></option>
                        <?php
                        foreach ($allproducers as $p) {
                          echo "<option value='$p[imeproizvodjaca]'>$p[imeproizvodjaca]</option>";
                        }
                        ?>
                    </select>
                    <span class="alert-danger">
                        <?php if (array_key_exists('imeproizvodjaca', $errors)) {
                          echo $errors['imeproizvodjaca'];
                        } ?></span>
                    <br><br>
                    <input type="text" name="model" placeholder="Unesite model"><br>
                    <span class="alert-danger">
                        <?php if (array_key_exists('model', $errors)) {
                          echo $errors['model'];
                        } ?></span>
                    <br><br>
                    <label>Odaberite kategoriju</label>
                    <br>
                    <select class="form-control col-1" name="kategorija">
                        <option value=""></option>
                        <?php
                        foreach ($allcategories as $p) {
                          echo "<option value='$p[kategorija]'>$p[kategorija]</option>";
                        }
                        ?>
                    </select>
                    <span class="alert-danger">
                        <?php if (array_key_exists('kategorija', $errors)) {
                          echo $errors['kategorija'];
                        } ?></span>
                    <br><br>
                    <input type="number" name="godiste" placeholder="Unesite godiste">
                    <br>
                    <span class="alert-danger">
                        <?php if (array_key_exists('godiste', $errors)) {
                          echo $errors['godiste'];
                        } ?></span>

                    <br><br>
                    <input type="number" name="cena" placeholder="Unesite cenu">
                    <br>
                    <span class="alert-danger">
                        <?php if (array_key_exists('cena', $errors)) {
                          echo $errors['cena'];
                        }
                        ?></span>
                    <br><br>
                    <input type="submit" class="btn btn-warning" name="page" value="insert">
                </div>
            </form>
            <?php
            echo "<span class=alert-danger >$msg</span>";
            ?>

            <br>
            <form action="routes.php">
                <button type="submit" class="btn btn-outline-primary" name="page" value="showhome">
                    <h6>Home page</h6>
                </button>
            </form>
            <br>
        </div>
    

    <?php include '../includes/footer.php'; ?>
