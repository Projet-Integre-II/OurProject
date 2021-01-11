
<?php include("adminNavbar.php"); ?>


<h1>
  HI ADMIN
</h1>

      <!-- la visualisation de certaines produit dans l'accueil  -->
      <div id="acceuilProducts">
        <!-- START THE FEATURETTES -->

        <!-- START THE FEATURETTES -->
        <section class="featured-places">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-heading">
                  <span>Produits ajoutés</span>
                  <h2>les produits disponibles dans les catalogues</h2>
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
                      <?php echo '<img src="data:image;base64,' . base64_encode($row['image']) . '" alt="Image" style="width: 100%;height: 150px">'; ?>
                    </div>
                    <div class="down-content">
                      <h4><?php echo $row['nomprod']; ?></h4>

                      <span> <strong><sup>$</sup><?php echo $row['prix']; ?></strong></span>

                      <p><?php echo $row['desc']; ?></p>

                      <div class="text-button">
                        <a href="product-edition.php?id=<?php echo $row['id'];?>">modifier produit</a>
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
