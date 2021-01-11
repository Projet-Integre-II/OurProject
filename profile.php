
<?php 
	include "server.php";
	include "menu.php";
 ?>
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
    <link rel="stylesheet" href="css/style.css.css">
    <link rel="stylesheet" href="css/style1.css">
		<!-- Javascript -->	
		<script type="text/javascript" src="js/jquery.min.js"></script>
  		<script>
  			$(document).ready(function(){
  				
  				$('input[type="radio"]').change(function(){

  					if (this.value == 'easypaisa') {

  						$('#easypaisaText').css('display', 'block');
  					}
  					else {
  						$('#easypaisaText').css('display', 'none');
  					}
  				});
  			});
  		</script>
 	</head>
<body>

	<!--<header>
		<div class="container">
			<div class="brand">
				<div class="logo">
					<a href="index.html">
						<img src="img/icons/online_shopping.png">
						<div class="logo-text">
							<p class="big-logo">Ecommerce</p>
							<p class="small-logo">EMI-Shop</p>
						</div>
					</a>
				</div> 
				<div class="shop-icon">
					<div class="dropdown">
						<img src="img/icons/account.png">
						<div class="dropdown-menu">
							<ul>
								<li><a href="#">My Account</a></li>
								<li><a href="#">My Orders</a></li>
								<li><a href="#">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="dropdown">
						<img src="img/icons/heart.png">
						<div class="dropdown-menu wishlist-item">
							<table border="1">
								<thead>
									<tr>
										<th>Image</th>
										<th>Product Name</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="img/product/img1.jpg"></td>
										<td>This is the product name</td>
									</tr>
									<tr>
										<td><img src="img/product/img2.jpg"></td>
										<td>This is the product name</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="dropdown">
						<img src="img/icons/shopping_cart.png">
						<div class="dropdown-menu cart-item">
							<table border="1">
								<thead>
									<tr>
										<th>Image</th>
										<th>Product Name</th>
										<th class="center">Price</th>
										<th class="center">Qty.</th>
										<th class="center">Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="img/product/img1.jpg"></td>
										<td>This is the product name</td>
										<td class="center">1200</td>
										<td class="center">2</td>
										<td class="center">2400</td>
									</tr>
									<tr>
										<td><img src="img/product/img2.jpg"></td>
										<td>This is the product name</td>
										<td class="center">1500</td>
										<td class="center">2</td>
										<td class="center">3000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div> <!-- shop icons -->
			</div> <!-- brand -->
            
    <!-- this is the section for items -->
                    <!-- Carousel part -->
    
	<!--		<div class="menu-bar">
				<div class="menu">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Shop</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				<div class="search-bar">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" name="search" placeholder="Search">
							<img src="img/icons/search.png">
						</div>
					</form>
				</div>
			</div> 
		</div> 
	</header> -->

	<div class="container">
		<main>
			<div class="breadcrumb">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / </li>
					<li>Account</li>
				</ul>
			</div> -->

			<div class="account-page">
                <?php
                   $q=mysqli_query($db,"SELECT * FROM connexion WHERE email='$_SESSION[email]';");
                   $row=mysqli_fetch_assoc($q);
                ?>

				<div class="profile">
					<div class="profile-detail">
                    <img src="img/pic.png">
                     
						 <h2>
                         <?php
 				         echo $_SESSION['email'];?>
                          </h2>
                  </div>
					<ul>
						<li><a href="account.html" class="active">mon compte <span>></span></a></li>
						<li><a href="change-password.html">changer le mot de passe  <span>></span></a></li>
						<!--<li><a href="">Billing Detail <span>></span></a></li>-->
                        <!--</li><a href="">My Orders <span>></span></a></li>-->
						<li><a href="">supprimer le compte <span>></span></a></li>
						<li><a href="logout.php">se deconnecter <span>></span></a></li>
					</ul>
				</div>
				<div class="account-detail">
					<h2>Account</h2>
                    
					<div class="billing-detail">
                    
					 <form class='checkout-form'>
						<div class='form-inline'>
                        
							<div class='from-group'>
                           
								<label>First Name</label>
								 <input type="text" name="fname" value="<?php echo $row["nom"];?>"/>
							</div>
							<div class="from-group">
								<label>Last Name</label>
								<input type="text" name="lname" value="<?php echo $row["prenom"];?>"/>
							</div>
						</div>						
						<!--<div class="from-group">
							<label>Company Name (Optional)</label>
							<input type="text" name="cname">
						</div>-->
						<div class="form-inline">
							<div class="from-group">
								<label>Country</label>
								<select name="country">
									<option value=""><?php echo $row["pays"];?></option>
									<option value="">Maroc</option>
									
								</select>
							</div>
							<div class="from-group">
								<label>City</label>
								<select name="city">
									<option value=""><?php echo $row["ville"];?></option>
									<option value="karachi">Marrakech</option>
									<option value="lahore">Rabat</option>
									<option value="islamabad">Tanger </option>
                                </select>
                                
							</div>
						</div>
						<div class="from-group">
							<label>Address</label>
							<textarea name="adddress" rows="5"><?php echo $row["adress"];?></textarea>
						</div>
						<div class="form-inline">					
							<div class="form-group">
								<label>Tel</label>
								<input type="text" id="tel" name="tel" minlength="11" maxlength="11" value="<?php echo $row["telephone"];?>">
							</div>
							<div class="form-group">
								<label>Mobile</label>
								<input type="text" id="mobile" name="mobile" minlength="11" maxlength="11" value="<?php echo $row["telephone"];?>">
							</div>
						</div>
						<br>
						<div class="form-group">
							<label></label>
							<input type="submit" id="update" name="update" value="Update">
						</div>
					</form>
                   </div>
                
                </div>
                
			</div>
				
		</main> <!-- Main Area -->
	</div>

    <?php include("footer.php"); ?>
    </main>
    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>