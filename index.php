      <!-- FOOTER -->
      <?php include("menu.php"); ?>

  <!-- this is the section for items -->
  <!-- Carousel part -->
  <main role="main">

    <!-- Our carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            <rect width="100%" height="100%" fill="#777" /></svg>
          <div class="container">
            <div class="carousel-caption text-left">

              <h4> Soyez le Bienvenue dans notre shop </h4>
              <p><a class="btn btn-lg btn-primary" href="Inscription.php" role="button">S'inscrire aujourd'hui</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="10%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            <rect width="100%" height="100%" fill="#777" /></svg>
          <div class="container">
            <div class="carousel-caption">
              <h4> Ne rattez pas les promotion de black friday ! </h4>
              <p><a class="btn btn-lg btn-primary" href="promotion.html" role="button">savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            <rect width="100%" height="100%" fill="#777" /></svg>
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


   <!-- Our three categories -->

   <div class="container-marketing">

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


      <!-- la visualisation de certaines produit dans l'accueil  -->
      <div id="acceuilProducts">
        <!-- START THE FEATURETTES -->

        <!-- START THE FEATURETTES -->
        <section class="featured-places">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-heading">
                  <span>Produits en vedette</span>
                  <h2>les produits les plus recommandés.</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <?php
              $connexion = mysqli_connect("localhost", "root", "");
              $db = mysqli_select_db($connexion, 'dataprojet');
              $query = "select * from produit";
              $query_run = mysqli_query($connexion, $query);
              while ($row = mysqli_fetch_array($query_run)) {
              ?>

                <!--<div class="row">-->

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="featured-item">
                    <div class="thumb">
                      <?php echo '<img src="data:image;base64,' . base64_encode($row['image']) . '" alt="Image" style="width: 100%;">'; ?>
                    </div>
                    <div class="down-content">
                      <h4><?php echo $row['nomprod']; ?></h4>

                      <span> <strong><sup>$</sup><?php echo $row['prix']; ?></strong></span>

                      <p><?php echo $row['desc']; ?></p>

                      <div class="text-button">
                        <a href="product-details.html">View More</a>
                      </div>
                    </div>
                  </div>
                </div>



              <?php

              }
              ?>
            </div>
        </section>



        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
          <div class="inner">
            <div class="section-heading">
              <span>Contact Us</span>
              <h2>Vivamus nec vehicula felis</h2>
            </div>
            <!-- Modal button -->

            <div class="blue-button">
              <a href="#">Talk to us</a>
            </div>
          </div>
        </div>
      </section>
      <!-- FOOTER -->
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
