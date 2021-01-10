
<!DOCTYPE html>
<html lang="en">


<style type="text/css">
table{
  border-collapse: collapse;
  width: 100%;
  color: rgb(22, 20, 20);
  font-family: monospace;
  font-size: 25px;
  text-align: left;
}
th{
  background-color: rgb(149, 220, 233);
  color: white;
}
tr:nth-child(even){
  background-color: rgb(227, 253, 189);
}
</style>
<?php include("adminNavbar.php"); ?>


  <h1>
    HI ADMIN
  </h1>

<table>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>PASSWORD</th>
  </tr>
  <?php
  $db = mysqli_connect('localhost', 'root', '', 'user');
  if (!$db) {
    die("Échec de la connexion : " . mysqli_connect_error());
  }
  if ($db -> connect_error) {
    die("connection failed".$db->connect_error);
    echo "connection failed";
}

    $sql = "select id , email , passeword from connexion";
    $result = $db->query($sql);

    if($result->num_rows>0) {
      while($row=$result->fetch_assoc()) {
      echo "<tr>
      <td>".$row["id"]."</td>
      <td>".$row["email"]."</td>
      <td>".$row["passeword"]."</td>
      <td><button type='button' class='btn btn-danger'>delete</button></td>
      </tr>";

    }
    echo "</table>";
  }
  else{
    echo "0 result";
  }
  $db->close();
  ?>
</table>


  <!-- FOOTER -->
  <?php include("footer.php"); ?>
  </main>
  <!-- bootstap Js -->
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <!-- Dark Mode Option -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->
  <script src="js/darkmode-js.min.js"></script>
  <script>
    const options = {
      bottom: '64px', // default: '32px'
      right: 'unset', // default: '32px'
      left: '32px', // default: 'unset'
      time: '0.5s', // default: '0.3s'
      mixColor: '#fff', // default: '#fff'
      backgroundColor: '#fff', // default: '#fff'
      buttonColorDark: '#100f2c', // default: '#100f2c'
      buttonColorLight: '#fff', // default: '#fff'
      saveInCookies: true, // default: true,
      label: '🌓', // default: ''
      autoMatchOsTheme: true // default: true
    }
    const darkmode = new Darkmode(options);
    darkmode.showWidget();

    function addDarkmodeWidget() {
      new Darkmode().showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);
  </script>


</body>

</html>
