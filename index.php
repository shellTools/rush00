<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>


	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>

<body>

	<!--Main Container starts here-->
	<div class="main_wrapper">

		<!--Header starts here-->
		<div class="header_wrapper">

			<a href="index.php"><img id="logo" src="images/logo.png" style="display: block; width:100%; height: 25%"/> </a>
		</div>
		<!--Header ends here-->

		<!--Navigation Bar starts-->
		<div class="menubar">

			<ul id="menu">
				<li><a style="text-align: center" href="index.php">Home</a></li>
				
				<li><a style="text-align: center" href="customer/my_account.php">My Account</a></li>
				
				<li><a style="text-align: center" href="cart.php">Shopping Cart</a></li>
				

			</ul>


		</div>
		<!--Navigation Bar ends-->

		<!--Content wrapper starts-->
		<div class="content_wrapper">

			<div id="sidebar">

				<div id="sidebar_title">Categories</div>

				<ul id="cats">

				<?php getCats(); ?>

				<ul>


			</div>

			<div id="content_area">

			<?php cart(); ?>

			<div id="shopping_cart">

					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">

					<?php
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>

					<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>


					<?php
					if(!isset($_SESSION['customer_email'])){

					echo "<a href='checkout.php' style='color:orange;'>Login</a>";

					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}



					?>



					</span>
			</div>

				<div id="products_box">

				<?php getPro(); ?>
				<?php getCatPro(); ?>
				<?php getBrandPro(); ?>

				</div>

			</div>
		</div>
		<!--Content wrapper ends-->



		<div id="footer">
<p>dsfafs</p>
		</div>

	</div>
<!--Main Container ends here-->


</body>
</html>
