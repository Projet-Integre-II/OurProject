
<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EMI Shop</title>
  <!-- the icon of the head -->
<link rel="icon" type="iamge/png" href="img\logoo.png" />

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstap.bundle.min.js"></script>
  <!-- Our Css -->
  <link rel="stylesheet" href="css/style.css.css">
  <link rel="stylesheet" href="css/style.css">

    <!-- Our Js -->
    <script src="js/javascript.js"></script>
</head>

<body>
  <!-- we will use directly bootstrap for this front end part -->
  <!-- this is our navbar -->
  <?php
  if (isset($_SESSION['email'])) {
  ?><nav class="navbar navbar-expand-lg navbar-light bg-light">

      <a class="navbar-brand" href="index.php" target="_self"><img src="img\logo11.png"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="childrenCatalogue.php">Les enfants</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="WomensCatalogues.php">Les femmes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="MenCatalogue.php">Les Hommes</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span class="glyphicon glyphicon-log-out">Se deconnecter </span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              A propos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="AboutUs.php">A propos de nous</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="CGU.php">Conditions Generaux d'Utilisation (CGU)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Contact.php">Contactez nous</a>
            </div>
          </li>

        </ul>

        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
    </nav>
  <?php
  } else {
  ?><nav class="navbar navbar-expand-lg navbar-light bg-light">

      <a class="navbar-brand" href="index.php" target="_self"><img src="img\logo11.png"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="childrenCatalogue.php">Les enfants</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="WomensCatalogues.php">Les femmes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="MenCatalogue.php">Les Hommes</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Inscription.php">
              S'inscrire
            </a>
          </li>
          <a class="nav-link" href="Connexion.php">
            Se Connecter
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              A propos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="AboutUs.php">A propos de nous</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="CGU.php">Conditions Generaux d'Utilisation (CGU)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Contact.php">Contactez nous</a>
            </div>
          </li>
          <a class="nav-link" href="Vendre.php">
            vendre des produits
          </a>
        </ul>

        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
    </nav>
  <?php
  }

  ?>
  <!-- Dark Mode Option -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->
  <script src="js/darkmode-js.min.js"></script>
  <script>
    const options = {
    bottom: '64px', // default: '32px'
    right: 'unset', // default: '32px'
    left: '32px', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff', // default: '#fff'
    buttonColorDark: '#100f2c', // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: true, // default: true,
    label: '🌓', // default: ''
    autoMatchOsTheme: true // default: true
  }
     const darkmode = new Darkmode(options);
  darkmode.showWidget();
      function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
      window.addEventListener('load', addDarkmodeWidget);
  </script>

<!-- this is our navbar
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
      
        <a class="navbar-brand" href="index.php" target="_self"><img src="img\logo2.png"></a>

      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="childrenCatalogue.php">Les enfants</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="WomensCatalogues.php">Les femmes</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="MenCatalogue.php">Les Hommes</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Inscription.php" >
              S'inscrire
              </a>
            </li>
            <a class="nav-link" href="Connexion.php" >
              Se Connecter
              </a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                A propos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="AboutUs.php">A propos de nous</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="CGU.php">Conditions Generaux d'Utilisation (CGU)</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Contact.php">Contactez nous</a>
              </div>
            </li>
            <a class="nav-link" href="Vendre.php" >
              vendre des produits
              </a>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
       -->