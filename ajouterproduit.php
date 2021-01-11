
<?php
//echo "ok" .$_GET['$id']; //.$_GET['$id'].
if (isset($_GET['id'])) {
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
}
if (isset($_POST['submit'])){
    $nomprod=$_POST['innomprod'];
    $quantite=$_POST['inquantite'];
    $prix=$_POST['inprix'];
    $description=$_POST['indescription'];
    $gender=$_POST['gender'];//categorie des produits (genre)
    $image=$_FILES["image"]["tmp_name"];




  $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');
//(nomprod,quantiteprod,prix,desc,categorie,image)
  $req=$bdd->prepare('insert into produit values(:nom,:q,:pr,:d,:genre,:img)');
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/
  $req->bindValue(':nom',$nomprod);
$req->bindValue(':q',$quantite);
$req->bindValue(':pr',$prix);
$req->bindValue(':d',$description);
$req->bindValue(':genre',$gender);//categorie
$req->bindValue(':img',file_get_contents($image));

  $req->execute();

}
?>

<?php include("adminNavbar.php"); ?>
<!-- Inscription Section -->


<form action="" method="POST" enctype="multipart/form-data"id="Sing">

<h1>Ajouter produit</h1>
    <div class="form-group">
      <label for="exampleFormControlInput1">intitulé du produit</label>
      <input type="text" class="form-control" name="innomprod">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">quantité du produit</label>
      <input type="text" class="form-control" name="inquantite">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">prix du produit</label>
      <input type="text" class="form-control" name="inprix">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description du produit</label>
      <input type="text" class="form-control" name="indescription">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">categorie du produit</label>

      <select name='gender'>
        <option value=""> --select--</option>
        <option value="vetement Homme"> vetement homme</option>
        <option value="vetement Femme">vetement femme</option>
        <option value="vetement Enfant">vetement enfant</option>

      </select><br>


    </div>
    <br>
    <br>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="image">
      <label class="custom-file-label" for="customFile">Veuillez Choisir une photo reel de votre produit </label>
    </div>

 <br>
<br>

      <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      <a href="CGU.html">j'accepte Les Conditions Generale d'Utilisation(CGU)<br></a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<br>
<br>
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
    </main>

    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
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
