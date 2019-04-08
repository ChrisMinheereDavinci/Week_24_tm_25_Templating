<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Chris Minheere">

    <title>Portfolio Chris</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- Include the Navbar -->
    <?php
    include "navbar.php";
    ?>

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="profilepic">
                        <img src="img/profielpic01.jpg" name="aboutme" width="150" height="150" class="img-circle"></a>
                        <!-- <h3>Chris Minheere</h3> -->
                    </div>
                    <h1 class="display-4 text-white mt-5 mb-2">Portfolio Chris Minheere</h1>
                    <h2>Applicatie en Mediaontwikkelaar</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Wie ben ik.</h2>
                <hr>
                Ik ben chris, 20 jaar en doe een opleiding applicatie en media ontwikkelaar.<p>
                    Het is al vanaf kinds af aan een droom geweest om iets met computers te doen, maar wist nooit exact wat. Tot dat ik op het MBO in aanraking kwam met Arduino’s. Hier leerde ik zowel met hardware als software omgaan. Zo begon het onschuldig met een weerstation, maar groeide het uit tot het zelf bouwen en programmeren van een geautomatiseerd buiten verlichting dat zich zelf regelt.<p>
                        <a class="btn btn-primary btn-lg" href="overmij.php">Over Mij. &raquo;</a>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Contact</h2>
                <hr>
                <address>
                    <strong>Contact Informatie</strong>
                    <br>Van Damstoep 16
                    <br>Hardinxveld-Giessendam 3371CZ
                    <br>
                </address>
                <address>
                    <abbr title="Phone">Phone:</abbr>
                    06-46747471
                    <br>
                    <abbr title="Email">Mail:</abbr>
                    <a href="mailto:#">minheerechris@gmail.com</a>
                </address>
            </div>
        </div>
        <!-- /.row -->
        <h2>Mijn werk</h2>
        <hr>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="img/mijn_werk_zorrow.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Zorrow.nl</h4>
                        <p class="card-text">Deze website heb ik gemaakt voor een band. Het doel was om de oude niet mobiele website om te toveren tot en website die goed functioneert op mobiele apparaten.</p>
                    </div>
                    <div class="card-footer">
                        <a href="zorrow.php" class="btn btn-primary">Live preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="img/school_projecten.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">School</h4>
                        <p class="card-text">Hier vind je al mijn school projecten. ook te bekijken op <a href="https://github.com/ChrisMinheereDavinci">GitHub</a></p>
                    </div>
                    <div class="card-footer">
                        <a href="school.php" class="btn btn-primary">Meer Info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="img/pic (4).jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Projecten</h4>
                        <p class="card-text">hier wat projecten die mij geinspireerd hebben om te gaan programeeren.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container -->
    </div>

    <!-- Include the footer -->
    <?php 
    include "footer.php";
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html> 