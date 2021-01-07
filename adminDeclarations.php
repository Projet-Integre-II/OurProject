<!DOCTYPE html>
<html lang="en">

<body>
<?php include("adminNavbar.php"); ?>

<h1>
        Les messages des Utilisateurs avec des informations supplementaires :
    </h1>
    <h6>
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
