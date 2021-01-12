<?php
//echo "ok" .$_GET['$id']; //.$_GET['$id'].
if (isset($_GET['id'])) {
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
}


if (isset($_GET['delpro'])) {
    $del = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delpro']);
    //$delProduct = $ct->delProductByCart($delProId);
  /*  $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');

  $req=$bdd->prepare('delete from panier where id='$del'');



  $req->execute();*/
}

if (isset($_POST['submit'])){
    $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');

  $req=$bdd->prepare('insert into panier values(:ident,:quantite)');
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/
  $req->bindValue(':ident',$id);
  $req->bindValue(':quantite',$quantite);
   //$req->bindValue(':pr',$p);

  $req->execute();

}


if (isset($_POST['delete'])) {
   $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
       $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');
       $d=$id;

  $req=$bdd->prepare('delete from panier');
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/



  $req->execute();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Shop</title>
    <!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--=============================================

    <!-- Our Js -->
    <script src="js/javascript.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="js/bootstap.bundle.min.js"></script>
    <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- we will use directly bootstrap for this front end part -->
        <?php include("menu.php"); ?>
    <!-- this is the section for items -->
                    <!-- Carousel part -->
    <main role="main">


	


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
								<?php
									$somme=0;
									$connexion=mysqli_connect("localhost","root","");
									$db=mysqli_select_db($connexion,'dataprojet');


									$query1="select * from panier";
									$query_run1=mysqli_query($connexion,$query1);

									while($row1=mysqli_fetch_array($query_run1))
									{


									$ok=$row1['id'];
									$query="select * from produit where produit.id='$ok'";
									$query_run=mysqli_query($connexion,$query);
									while($row=mysqli_fetch_array($query_run))
									{
									$somme=$somme+ $row['prix']
									?>
									<tr class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
											<?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="IMG" >'; ?>
											</div>
										</td>
										<td class="column-2"><?php echo $row['nomprod']; ?></td>
										<td class="column-3"><?php echo $row['prix']; ?></td>
										<td class="column-4">
											<div class="wrap-num-product flex-w m-l-auto m-r-0">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

												<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
										</td>
										<td class="column-5"><?php echo $row['prix']; ?></td>
									</tr>
									<br>

									<?php
						/*<a onclick="return confirm('Are you sure to delete?');" href="?delpro=<?php echo $row['id'];?>">delete</a>*/
								}



          					}
           						?>

								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</div>
							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								<a href="index.php">Retourner au catalogue</a>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo $somme;echo".00"; ?>
								</span>
							</div>
						</div>
						
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="time">
											<option>Select a country...</option>
											<option>Maroc</option>
											<option>France</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
									</div>

									
									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Update Totals
										</div>
									</div>
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									<?php echo $somme;echo".00"; ?>
								</span>
							</div>
						</div>
						<!--<button type="submit" class="btn btn-primary" name="submit">enregistrer</button>-->
    					
							
						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer"
							text-align: center ><a href="payement.php?prix= <?php echo $somme;?>">Confirmer l'achat</a>
						</button>
					</div>
					
				</div>

			</div>

		</div>
	</form>
		



      <!-- FOOTER -->
      <?php include("footer.php"); ?>
      
    </main>


    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>