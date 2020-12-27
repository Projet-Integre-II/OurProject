
<?php
  if (isset($_POST['submit'])){
    $nomprod=$_POST['innomprod'];
    $quantite=$_POST['inquantite'];
    $prix=$_POST['inprix'];
    $description=$_POST['indescription'];
    $gender=$_POST['gender'];//categorie des produits (genre)
    $image=$_FILES["image"]["tmp_name"];


  

  $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');

  $req=$bdd->prepare('insert into produit values(:nom,:q,:pr,:d,:genre,:img)');
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/
  $req->bindValue(':nom',$nomprod);
$req->bindValue(':q',$quantite);
$req->bindValue(':pr',$prix);
$req->bindValue(':d',$description);
$req->bindValue(':genre',$gender);//categorie
$req->bindValue(':img',file_get_contents($image));

  $req->execute();
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Shop</title>

    <!-- Our Js -->
    <script src="js/javascript.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="js/bootstap.bundle.min.js"></script>
    <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css.css">
</head>
<body>
    <!-- we will use directly bootstrap for this front end part -->
        <!-- this is our navbar -->
        
        <!-- this is our navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="index.html" target="_self"><img src="img\logo11.png"></a>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
    <li class="nav-item">
      <a class="nav-link" href="ajouterproduit.php">
        <span class="glyphicon glyphicon-log-out">ADD ITEMS </span>
      </a>
    </li>

  </ul>

  <form class="form-inline mt-2 mt-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

</div>
</nav>

<!-- Inscription Section -->


<form action="" method="POST" enctype="multipart/form-data"id="Sing">

<h1>Ajouter produit</h1>
    <div class="form-group">
      <label for="exampleFormControlInput1">intitulé du produit</label>
      <input type="text" class="form-control" name="innomprod">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">quantité du produit</label>
      <input type="text" class="form-control" name="inquantite">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">prix du produit</label>
      <input type="text" class="form-control" name="inprix">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description du produit</label>
      <input type="text" class="form-control" name="indescription">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">categorie du produit</label>

      <select name='gender'>
        <option value=""> --select--</option>
        <option value="vetement Homme"> vetement homme</option>
        <option value="vetement Femme">vetement femme</option>
        <option value="vetement Enfant">vetement enfant</option>

      </select><br>

      
    </div>
    <br>
    <br>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="image">
      <label class="custom-file-label" for="customFile">Veuillez Choisir une photo reel de votre produit </label>
    </div>

 <br>
<br>

      <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      <a href="CGU.html">j'accepte Les Conditions Generale d'Utilisation(CGU)<br></a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
        

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> 
<br>
<br>
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
    </main>
   
    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>

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
</body>
</html>