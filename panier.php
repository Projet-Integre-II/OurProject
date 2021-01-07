<?php
//echo "ok" .$_GET['$id']; //.$_GET['$id'].
if (isset($_GET['id'])) {
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
}
if (isset($_POST['submit'])){





  $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');

  $req=$bdd->prepare('insert into panier values(:ident)');
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/
  $req->bindValue(':ident',$id);


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




                <br>
                <br>
                <br>
                <br>

              <h2>          Votre panier    :</h2>

        <center>
      <form action="" method="POST" enctype="multipart/form-data">
        <table width="50%" border="3" cellpadding="10"  cellspacing="12">
          <thead>
            <tr>
              <th> image de produit</th>
              <th> intitulé produit</th>
              <th> prix</th>
              <th> quantité disponible</th>
              <th> description</th>


            </tr>
          </thead>
          <?php
            $connexion=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connexion,'dataprojet');


            $query1="select * from panier";
            $query_run1=mysqli_query($connexion,$query1);

            while($row1=mysqli_fetch_array($query_run1))
            {


              $ok=$row1['id'];
            $query="select * from produit where produit.id='$ok'";
            $query_run=mysqli_query($connexion,$query);
            while($row=mysqli_fetch_array($query_run))
            {
              ?>

              <tr>
                <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 200px;">'; ?>
                </td>

                <td> <?php echo $row['nomprod']; ?></td>
                <td> <?php echo $row['prix']; ?></td>
                <td> <?php echo $row['quantiteprod']; ?></td>
                <td> <?php echo $row['desc']; ?></td>
              </tr>
              <br>

              <?php

            }



          }
           ?>


        </table>
        <br>
        <br>
        <br>


    </center>


        <!-- /END THE FEATURETTES -->




    <div class="blue-button">
                            <a href="new index.php">retourner au catalogue</a>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">enregistrer</button>

 </form>



      <!-- FOOTER -->
      <?php include("footer.php"); ?>

    </main>


    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
