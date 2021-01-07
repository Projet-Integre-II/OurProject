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
      <div ><h5>le montant total à payer = <?php echo $total ?> dh</h5></div>
      <h2>Option Payement</h2>
      <a href="payementeffectue.php">payement à livraison</a>
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
