<!DOCTYPE html>
<html lang="en">

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
          <h1 class="display-4 text-white mt-5 mb-2">Portfolio Chris</h1>
          <p class="lead mb-5 text-white-50">text over mij zelfdfsdfdfd.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact</h2>
        <hr>
        <address>
          <strong>Contact Informatie</strong>
          <br>Van Damstoep 16 
          <br>Hardinxveld 3371CZ
          <br>
        </address>
        <address>
          <abbr title="Phone">Phone:</abbr>
           0646747471
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
            <p class="card-text">Deze website heb ik gemaakt voor een band. Het doel was om de oude niet mobiele website om te teoveren tot en website die goed functioneert op mobiele apparaten.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Meer Info</a>
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
            <a href="#" class="btn btn-primary">Meer Info</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

     <!-- Include the footer -->
     <?php 
    include "footer.php";
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
