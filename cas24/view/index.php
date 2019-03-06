<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</head>

<body>
    <?php include '../includes/nav.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-md">
            <!-- <div class="row justify-content-md shadow-lg p-3 mb-5"> -->
            <img src="../images/johanunsplash.jpg" class="card-img" width="1280"  alt="card image" />
            <div class="card-img-overlay  ">
                <hr>
                <div class=" col-4 bg-light" style="opacity:0.5;">
                    <br>
                    <h3 class="font-weight-bold"><a class="text-body" href="routes.php?page=showinsert">Insert Car</a></h3>

                    <h3 class="font-weight-bold"> <a class="text-body" href="routes.php?page=showinsertvozaca">Insert Driver</a></h3>

                    <h3 class="font-weight-bold"><a class="text-body" href="routes.php?page=showassign">Assigning a vehicle to the driver</a></h3>
                
                    <h3 class="font-weight-bold"><a class="text-body" href="routes.php?page=showdrivers">Show Drivers</a></h3>

                    <h3 class="font-weight-bold"><a class="text-body" href="routes.php?page=showcars">Show Cars</a></h3>

                    <h3 class="font-weight-bold"><a class="text-body" href="routes.php?page=showdriverbycars">Show driver by cars</a></h3>

                    <h3 class="font-weight-bold"><a class="text-body" href="routes.php?page=showcarbydrivers">Show car by drivers</a></h3>
                    <br>
                </div>
            </div>


        </div>
        <!--end row-->
    </div>
    <!--end container-fluid-->
    <?php include '../includes/footer.php'; ?>

    <!--1 probati bootstrap 2 zadatak nakon izmene vracanje nastranu  alldrivers programirati sencenje izmenjenog reda-->
</body>

</html> 