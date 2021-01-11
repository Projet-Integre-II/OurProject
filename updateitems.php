<?php

$db = mysqli_connect('localhost', 'root', '', 'dataprojet');
if (!$db) {
  die("Échec de la connexion : " . mysqli_connect_error());
}
if ($db -> connect_error) {
  die("connection failed".$db->connect_error);
  echo "connection failed";
}

$id = $_GET['id'];

$sql = "select * from produit where id='$id'";

$result = $db->query($sql);

if ($result->num_rows > 0){
  $row = $result->fetch_assoc();

$name = $row['nomprod'];
$prix = $row['prix'];
$desc = $row['desc'];
$gender=$row['categorie'];
$quan=$row['quantiteprod'];
$nav= include('AdminNavbar.php'); 
//<textarea class='form-control' id='exampleFormControlTextarea1' rows='3' name='desc' value='$desc'>$</textarea>
echo

"<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>EMI Shop</title>
  <!-- the icon of the head -->
  <link rel='icon' type='iamge/png' href='img\logoo.png' />
  <!-- Our Js -->
  <script src='js/javascript.js'></script>
  <!-- bootstrap css modifi -->
  <link rel='stylesheet' href='css/bootstrap.min.css'>
  <script src='js/bootstap.bundle.min.js'></script>
  <!-- Our Css -->
  <link rel='stylesheet' href='css/style.css.css'>
</head>

<body>
  <!-- we will use directly bootstrap for this front end part -->
  <!-- this is our navbar -->
<form action='updateitemsfct.php' method='post'>
<div class='form-group row'>
<label for='staticEmail' class='col-sm-2 col-form-label'>ID de produit</label>
<div class='col-sm-10'>
  <input type='text' readonly class='form-control-plaintext' id='staticEmail' name='idprod' value='$id'>
</div>
</div>


<label for='exampleFormControlSelect1'>nom de produit</label>
<br>
<div class='input-group mb-3' style='width:15cm;'>
  <div class='input-group-prepend'>
  </div>
  <input name='name' value='$name' type='text' class='form-control' aria-label='Amount (to the nearest dollar)'>
</div>

 <!--  Description :<input type='text' name='desc' value='$desc'> <br>-->

 <label for='exampleFormControlSelect1'>Prix</label></br>
<div class='input-group mb-3' style='width:15cm;'>
  <div class='input-group-prepend'>
    <span class='input-group-text'>$</span>
  </div>
  <input name='prix' value='$prix' type='text' class='form-control' aria-label='Amount (to the nearest dollar)'>
  <div class='input-group-append'>
    <span class='input-group-text'>.00</span>
  </div>
</div>
<label for='exampleFormControlSelect1'>Quantite</label></br>
<div class='input-group mb-3' style='width:15cm;'>
  <div class='input-group-prepend'>
  </div>
  <input name='quant' value='$quan' type='text' class='form-control' aria-label='Amount (to the nearest dollar)'>
</div>
<label for='exampleFormControlSelect1'>Categorie</label></br>
  <div class='input-group mb-3' style='width:15cm;'>
  <select name='gender' class='custom-select' id='inputGroupSelect02'>
  <span value='$gender' selected>$gender </span>
	<option value='vetement Homme'>vetement Homme</option>
  <option value='vetement Femme'>vetement Femme</option>
  <option value='vetement Enfant'>vetement Enfant</option>
  </select><br>
  <div class='input-group-append'>
    <label class='input-group-text' for='inputGroupSelect02'>Options</label>
  </div>
</div>

  <button type='submit' class='btn btn-danger'>Update</button>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$db->close();

?>
