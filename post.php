<?php
//var_dump($_POST)
$bdd=new PDO ('mysql:host=localhost;dbname=dataemi;charset=utf8','root','');
//preparation de la requete d'insertion sql
$requete=$bdd->prepare('insert into user values(:email,:pwd,:ad,:tel)');
//on lie chaque marqueur a une valeur
$requete->bindValue(':email',$_POST['inemail']);
$requete->bindValue(':pwd',$_POST['inpassword']);//,PDO::PARAN_STR
$requete->bindValue(':ad',$_POST['inadresse']);
$requete->bindValue(':tel',$_POST['intel']);
//$requete->bindValue(':vil',$_POST['ville']);
//$requete->bindValue(':pa',$_POST['pays']);



//execution d requete prepare
$insertISok=$requete->execute();
if($insertISok){
	$message='le contact a été ajouté dans la bdd';
}
else{
	$message='echec d"insertion';
}

?>
