

<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');


if(isset($_POST['email'])&&isset($_POST['passeword'])){
    $mail = $_POST['email'];
    $paseword=$_POST['passeword'];
    $s="select*from connexion where email='$mail'&& passeword='$passeword'";
    $resul=mysqli_query($con, $s);
    $num =mysqli_num_rows($result);
    if($mail==1){
        header('location:index.html');
    }else{
    
    }
}
?>