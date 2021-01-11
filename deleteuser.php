<?php

$db = mysqli_connect('localhost', 'root', '', 'user');
if (!$db) {
  die("Échec de la connexion : " . mysqli_connect_error());
}
if ($db -> connect_error) {
  die("connection failed".$db->connect_error);
  echo "connection failed";
}

// $id = $_GET['id']; // get id through query string
// echo $id;

// $del = mysqli_query($db,"delete from connexion where id = '$id'"); // delete query

// if($del)
// {
//     mysqli_close($db); // Close connection
//     header("location:admin.php"); // redirects to all records page
//     exit;	
// }
// else
// {
//     echo "Error deleting record"; // display error message if not delete
// }
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// sql to delete a record
$sql = "DELETE FROM connexion WHERE id = $id"; 

if (mysqli_query($db, $sql)) {
    mysqli_close($db);
    header('Location: adminusers.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>