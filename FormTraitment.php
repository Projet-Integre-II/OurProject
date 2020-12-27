<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Votre Message a ete bien transmis , Merci
    </h1>
<?php
        if (isset($_POST['email'])) {
            //for working with file .txt
            $email = $_POST["email"];
            $subj = $_POST["subject"];
            $txt = $_POST["txt"];

            $file = fopen("resultatForum.txt", 'a');
            fwrite($file, date("l d/m/y h:i:s:u a") . "\n");
            fwrite($file, "Sujet de contact :\t" . $subj . "\n");
            fwrite($file, "Par le compte de  :\t" .$email . "\n");
            fwrite($file, "le message complet :\n" .$txt . "\n");
            fwrite($file, "**------------------------------------------------------------**\n");
            fclose($file);
            //
            
        }
?>
</body>
</html>