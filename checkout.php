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
		
		<a href="index.php"><img id="logo" src="images/logo.png" style="display: block;width:50%;margin:0 auto;"/> </a>
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				
				<li><a href="customer/my_account.php">My Account</a></li>
				
				<li><a href="cart.php">Shopping Cart</a></li>
				
			
			</ul>
			
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
			<div id="content_area">
			
			<?php cart(); ?>
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					
					<a href="cart.php"><b><button>Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?></button></a>
					
					
					
					</span>
			</div>
			
				<div id="products_box" style-"width:100%;">
				
				<?php 
				if(!isset($_SESSION['customer_email'])){
					include("customer_login.php");
				}
				else {
					include("payment.php");
				}
				
				?>
				
				</div>
			</div>
		</div>	
		<!--Content wrapper ends-->
		
		
		
		<div id="footer" style="width:100%;">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; rhayat calamber</h2>
		
		</div>
	</div> 
<!--Main Container ends here-->


</body>
</html>