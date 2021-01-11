<?php
//echo "ok" .$_GET['$id']; //.$_GET['$id'].
if (isset($_GET['id'])) {
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
}
if (isset($_POST['delete']) and isset($_GET['id'])){

  $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);



  $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');

  $req=$bdd->prepare("delete from produit where id='$id'");
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/

   //$req->bindValue(':pr',$p);


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
    <!--<link rel="stylesheet" href="css/style.css">-->
</head>
<body>
    <!-- we will use directly bootstrap for this front end part -->
        <?php include("menu.php"); ?>
    <!-- this is the section for items -->
                    <!-- Carousel part -->
    <main role="main">

<!-- Our carousel -->



  <!-- Our three categories -->

 <?php
            $connexion=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connexion,'dataprojet');
            $query="select * from produit where id= '$id'";
            $query_run=mysqli_query($connexion,$query);
            while($row=mysqli_fetch_array($query_run))
            {
              ?>



        <!-- START THE detail of the product -->
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>produit: <?php echo $row['nomprod']; ?></span>
                            <h2>id produit: <?php echo $id ?></h2>
                        </div>
                    </div>
                </div>
        <div class="row">


              <!--<div class="row">-->
              		<div class="col-sm-4 col-xs-6">
                          <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100%;">'; ?>
                     </div>

                    <div class="col-md-6 col-xs-12">
                    <form action="" method="POST" class="form" enctype="multipart/form-data">
                      <p class="lead">prix:
                      <?php echo $row['prix']; ?>
                    </p>
                    <p class="lead">quantite disponible:<?php echo $row['quantiteprod']; ?></p>


                      <p class="lead">
                      description: <?php echo $row['desc'] ; ?>
                      </p>
                      <p class="lead">
                        categorie: <?php echo $row['categorie'] ; ?>
                      </p>

                      <br>

                      <div class="row">
                        <div class="col-sm-4">



                        </div>
                      </div>

                          <button type="submit" class="btn btn-primary" name="delete" >supprimer produit</button>
                        <button type="submit" class="btn btn-primary" name="submit">modifier produit</button>
                        </div>

                       <!-- <button type="submit" class="btn btn-primary" name="submit">enregistrer</button> -->
                    </form>
                  </div>



              <?php

            }
      ?>
      </div>
        </section>

                <br>
                <br>
                <br>
                <br>


        <!-- /END THE FEATURETTES class="blue-button"-->









      <!-- FOOTER -->
      <?php include("footer.php"); ?>

    </main>


    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
