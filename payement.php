<?php
//echo "ok" .$_GET['$id']; //.$_GET['$id'].
if (isset($_GET['prix'])) {
    $total = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['prix']);
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
    <!-- Our Css ok -->
    <link rel="stylesheet" href="css/style.css.css">
    <!--<link rel="stylesheet" href="css/style.css">-->
</head>
<body>
    <!-- we will use directly bootstrap for this front end part -->
        <?php include("menu.php"); ?>
    <!-- this is the section for items -->
                    <!-- Carousel part -->
   <style type="text/css">
.payment{width: 500px; min-height: 200px; text-align: center; border: 1px solid #ddd; margin: 0 auto; padding:50px;}
.payment h2{border-bottom: 1px solid #ddd; margin-bottom: 40px; padding-bottom: 10px;}
.payment a{background: #4883ff; border-radius: 3px; color:#fff; font-size:22px; padding:5px 30px;}
.back a{width:150px; margin: 5px auto 0; padding: 7px 0; text-align: center; display: block; background: #4883ff; border:1px solid #333; color: #fff; border-radius: 3px; font-size: 25px; }
</style>

<div class="main">
  <div class="content">
    <div class="section group">

    <div class="payment">
      <div ><h5>le montant total à payer = <?php echo $total;
      ?> dh</h5></div>
      <h2>Option Payement</h2>
      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>

  <label class="form-check-label" for="exampleRadios1">
  <form action="https://www.paypal.com/cgi-bin/webscr/" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="D64Z5FDKQJFD8">
<input type="image" src="https://www.paypalobjects.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
</form>
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
  <br><a href="payementStripe.php?prix= <?php echo $total;?>">Payement par carte banquaire</a>
  </label>

<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
  <br><a href="payementeffectue.php">payement à livraison</a>
  </label>
</div>
      <!-- <a href="payementeffectue.php">payement à livraison</a> -->
    

    </div>
  <br>
    <div class="back">
      <a href="panier.php">précedent</a>
    </div>
    </div>
  </div>

<br>
<br>

      <!-- FOOTER -->
      <?php include("footer.php"); ?>

    </main>


    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
