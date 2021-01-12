
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Shop</title>
    <!-- the icon of the head -->
  <link rel="icon" type="iamge/png" href="img\logoo.png" />
    <!-- Our Js -->
    <script src="js/javascript.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="js/bootstap.bundle.min.js"></script>
    <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
session_start();
$nom="";
$email="";
$errors=array();
$errors1=array();

$db=mysqli_connect('localhost','root','','user');
if (!$db) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

if(isset($_POST['register'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$passeword=$_POST['passeword'];
$adress=$_POST['adress'];
$ville=$_POST['ville'];
$pays=$_POST['pays'];
$tele=$_POST['tele'];

if(empty($nom)){
    array_push($errors,"le nom est requis");
}
if(empty($prenom)){
    array_push($errors,"le prenom est requis");
}
if(empty($email)){
    array_push($errors,"le email est requis");
}
if(empty($passeword)){
    array_push($errors,"le passeword est requis");
}
if(empty($adress)){
    array_push($errors,"l'adress' est requis");
}
if(empty($ville)){
    array_push($errors,"la ville' est requis");
}
if(empty($pays)){
    array_push($errors,"le pays' est requis");
}
if(empty($tele)){
    array_push($errors,"tele est requis");

}
if(count($errors) == 0){

    $sql="INSERT INTO connexion ( nom, prenom, email, passeword, adress, telephone, ville, pays)
     VALUES ('$nom','$prenom','$email','$passeword','$adress','$tele','$ville', '$pays') ";
     mysqli_query($db,$sql);
     $_SESSION['nom']=$nom;
    // $_SESSION['success']="inscription avec success";

    //

   // <div class="alert alert-warning" style="width: 700px; marging-left:300px ;">
    //<strong> welcom </strong>-->

    //</div>
    //<?php
    array_push($errors,"inscription avec succes");



}

}

if (!$db) {

    die("Échec de la connexion : " . mysqli_connect_error());
}
if(isset($_POST['con'])){

   $email=$_POST['email'];
   $passeword=$_POST['passeword'];

    if(empty($email)){
        array_push($errors,"email est requis");
    }
    if(empty($passeword)){
        array_push($errors,"mot de passe est requis");
    }
    if($email=="admin@admin.com" && $passeword=="admin"){
        header('location:adminindex.php');
    }

        $query="SELECT * FROM connexion WHERE email='$email' AND passeword='$passeword' ";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$email;
            $_SESSION['nom']=$nom;
            $_SESSION['success']="you are loged now ";
            header('location:index.php');

        }
        else{
            array_push($errors,"mot de passe/email est incorrect");
        }

}






?>
</body>
</html>
