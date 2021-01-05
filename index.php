<<<<<<< HEAD
      <!-- FOOTER -->
      <?php include("menu.php"); ?>

  <!-- this is the section for items -->
  <!-- Carousel part -->
 <!-- Our carousel -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
=======
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- we will use directly bootstrap for this front end part -->
        <?php include("menu.php"); ?>
    <!-- this is the section for items -->
                    <!-- Carousel part -->
    <main role="main">

<!-- Our carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-left">
<<<<<<< HEAD
               
=======

>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93
                <h4> Soyez le Bienvenue dans notre shop </h4>
                <p><a class="btn btn-lg btn-primary" href="Inscription.php" role="button">S'inscrire aujourd'hui</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" >
            <svg class="bd-placeholder-img" width="100%" height="10%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption">
                <h4> Ne rattez pas les promotion de black friday ! </h4>
                <p><a class="btn btn-lg btn-primary" href="promotion.html" role="button">savoir plus</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-right">
                <h4> Si vous voulez nous contacter , n'hesitez pas ! </h4>
                <p><a class="btn btn-lg btn-primary" href="Contact.php" role="button">Contactez nous</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<<<<<<< HEAD
    
    
  <!-- Our three categories -->
    
      <div class="container-marketing">
    
=======


  <!-- Our three categories -->

      <div class="container-marketing">

>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93
        <!-- Three columns of text below the carousel -->
        <div class="row firstIMG" >
          <div class="col-lg-4 ">
            <img src=" img\children1.png" width="80%" alt="Avatar">
            <h2>Les enfants</h2>
            <p>Trouvez des produits de haute avec un tres bon prix pour vos enfants </p>
            <p><a class="btn btn-secondary" href="childrenCatalogue.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src=" img\man.png" width="40%" alt="Avatar">
            <h2>Les Hommes</h2>
            <p>c'est l'hiver , il fait froid , ne rattez pas la promotion </p>
            <p><a class="btn btn-secondary" href="MenCatalogue.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src=" img\women1.png" width="40%" alt="Avatar">
            <h2>Les femmes</h2>
            <p>les meilleurs produit de maquillage , la beaute  </p>
            <p><a class="btn btn-secondary" href="WomensCatalogues.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
<<<<<<< HEAD
    
        <!-- la visualisation de certaines produit dans l'accueil  -->
       
=======

        <!-- la visualisation de certaines produit dans l'accueil  -->

>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93





        <!-- START THE FEATURETTES -->
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Produits en vedette</span>
                            <h2>les produits les plus recommandés.</h2>
                        </div>
<<<<<<< HEAD
                    </div> 
                </div> 
=======
                    </div>
                </div>
>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93
        <div class="row">
        <?php
            $connexion=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connexion,'dataprojet');
            $query="select * from produit";
            $query_run=mysqli_query($connexion,$query);
            while($row=mysqli_fetch_array($query_run))
            {
              ?>

              <!--<div class="row">-->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100%; height: 150px">'; ?>
                            </div>
                            <div class="down-content">
                                <h4><?php $id=$row['nomprod']; echo $row['nomprod']; ?></h4>

                                <span> <strong><sup>$</sup><?php echo $row['prix']; ?></strong></span>

                                <p><?php echo $row['desc']; ?></p>

                                <div class="text-button">
                                    <a class="detail" href="product-details.php?id= <?php echo $row['nomprod'];?>">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

<<<<<<< HEAD
                
=======

>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93

              <?php

            }
      ?>
      </div>
           </section>

<<<<<<< HEAD
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
  </main>
  <!-- bootstap Js -->
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <!-- Dark Mode Option -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->
  <script src="js/darkmode-js.min.js"></script>
  <script src="js/darkmode.js">

  </script>


</body>

=======










      <!-- FOOTER -->
      <?php include("footer.php"); ?>

    </main>


    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
>>>>>>> 5434f166f5ff766957de75c960d05d0a599b2d93
</html>
