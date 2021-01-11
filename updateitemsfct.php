<?php

$id = $_POST["idprod"];
$name = $_POST["name"];
// $desc = $_POST["desc"]; //TO DO
$prix = $_POST["prix"];
$quant = $_POST["quant"];
$gender = $_POST["gender"];

$conn = mysqli_connect('localhost', 'root', '', 'dataprojet');
if (!$conn) {
  die("Échec de la connexion : " . mysqli_connect_error());
}

if ($conn -> connect_error) {
  die("connection failed".$conn->connect_error);
  echo "connection failed";
}
//UPDATE `produit` SET `nomprod` = 'chemise A', `quantiteprod` = '131', `prix` = '50',
// `desc` = 'CHEMISE de mode bien demandée avec prix convenable !' WHERE `produit`.`id` = 1;
//To Do": description est non modifiable pour le moment
$sql = "update produit SET nomprod='$name', quantiteprod='$quant'  ,categorie='$gender' , prix='$prix'  where id='$id' ";

if ($conn->query($sql) === TRUE) {
	echo "<script type='text/javascript'>alert('Update succedded');</script>";
} else {
  echo  "<script type='text/javascript'>alert('Error: '+'$sql'+'='+'$conn->error');
  
  </script>";
}

$conn->close();

?>
<script type="text/javascript">location.href = 'adminindex.php';</script>