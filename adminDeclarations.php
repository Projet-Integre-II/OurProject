<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="iamge/png" href="img\logoo.png" />
    <!-- Our Js -->
    <script src="js/javascript.js"></script>
    <!-- bootstrap css modifi -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="js/bootstap.bundle.min.js"></script>
    <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css.css">
<body style="background-color:#e5fac0;">
<?php include("adminNavbar.php"); ?>

<h1 style="

font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
color:cadetblue;
margin:100px;
/* background-color:#d4b2f7; */
">
        Les messages des Utilisateurs avec des informations supplementaires :
    </h1>
    <h6 style="

font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
color:indigo;
margin:10px;
">
    <?php
       $myfile = fopen("resultatForum.txt", "r") or die("Unable to open file!");
       // Output one line untggga il end-of-file
       while(!feof($myfile)) {
         echo fgets($myfile) . "<br>";
       }
       fclose($myfile);
?>
    </h6>

<?php include("footer.php"); ?>
</body>
</html>
