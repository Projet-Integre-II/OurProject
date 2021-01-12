<?php

$db = mysqli_connect('localhost', 'root', '', 'dataprojet');
if (!$db) {
  die("Échec de la connexion : " . mysqli_connect_error());
}
if ($db -> connect_error) {
  die("connection failed".$db->connect_error);
  echo "connection failed";
}

$id = $_GET['id'];echo $id;
$sql = "DELETE FROM panier WHERE id = $id"; 
if (mysqli_query($db, $sql)) {
    mysqli_close($db);
    header('Location: panier.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>