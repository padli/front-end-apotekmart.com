<?php 
  error_reporting(0);
  session_start();	
  include "/config/koneksi.php";
  include "/config/fungsi_indotgl.php";
  include "config/class_paging.php";
  include "config/fungsi_combobox.php";
  include "config/library.php";
  include "config/fungsi_autolink.php";
  include "config/fungsi_rupiah.php";
  include "hapus_orderfiktif.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title><?php include "../dina_titel.php"; ?></title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav_icon.ico">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<link rel="stylesheet" href="js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- JS Libs
		============================================ -->
		<script src="js/modernizr.js"></script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
	</head>
	<body>


 
		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_6">

				<!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

				<div class="top_part">

					<div class="container">

						<div class="row">

							<div class="col-lg-6 col-md-7 col-sm-8">

								<!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->

								<p>Welcom visitor <a href="#" data-modal-url="modals/login.html">Login</a> or <a href="#">Register</a></p>

								<!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

							</div> <!--/ [col]-->

							<div class="col-lg-6 col-md-5 col-sm-4">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->
<!--/ .alignright.site_settings-->

									<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
									
									<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

									<!--/ .alignright.site_settings.currency-->

									<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

								</div><!--/ .clearfix-->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container -->

				</div><!--/ .top_part -->
				
				<!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="container">

						<div class="row">

							<div class="main_header_row">

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

									<a href="index.html">

										<img src="images/logo.png" alt="">

									</a>

									<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

									<div class="call_us">

										<span>Call us toll free:</span> <b>89790889898889</b>

									</div><!--/ .call_us-->

									<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-6">

									<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

									<form class="clearfix search">

										<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">
										
										<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

										<div class="search_category alignleft">

											<div class="open_categories">All Categories</div>

											<ul class="categories_list dropdown">

												<li class="animated_item"><a href="#">Medicine &amp; Health</a></li>
												<li class="animated_item"><a href="#">Beauty</a></li>
												<li class="animated_item"><a href="#">Personal Care</a></li>
												<li class="animated_item"><a href="#">Vitamins &amp; Supplements</a></li>
												<li class="animated_item"><a href="#">Baby Needs</a></li>
												<li class="animated_item"><a href="#">Diet &amp; Fitness</a></li>
												<li class="animated_item"><a href="#">Sexual Well-being</a></li>

											</ul>

										</div><!--/ .search_category.alignleft-->

										<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

										<button class="button_blue def_icon_btn alignleft"></button>

									</form><!--/ #search-->
									
									<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

							</div><!--/ .main_header_row-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

				<div id="main_navigation_wrap">

					<div class="container">

						<div class="row">

							<div class="col-xs-12">

								<!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

								<div class="sticky_inner type_2">

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<button class="open_menu"></button>

										<!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->

										<ul class="theme_menu cats dropdown">

											<li class="has_megamenu animated_item">

												<a href="#">Medicine &amp; Health (1375)</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div class="mega_menu clearfix">

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">
													
														<ul class="list_of_links">

															<li><a href="#">Allergy &amp; Sinus</a></li>
															<li><a href="#">Children's Healthcare</a></li>
															<li><a href="#">Cough, Cold &amp; Flu</a></li>
															<li><a href="#">Diabetes Management</a></li>
															<li><a href="#">Digestion &amp; Nausea</a></li>
															<li><a href="#">Eye Care</a></li>
															<li><a href="#">First Aid</a></li>
															<li><a href="#">Foot Care</a></li>
															<li><a href="#">Health Clearance</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">

														<ul class="list_of_links">

															<li><a href="#">Home Health Care</a></li>
															<li><a href="#">Home Tests</a></li>
															<li><a href="#">Incontinence Aids</a></li>
															<li><a href="#">Natural &amp; Homeopathic</a></li>
															<li><a href="#">Pain &amp; Fever Relief</a></li>
															<li><a href="#">Skin Condition Treatments</a></li>
															<li><a href="#">Sleep &amp; Snoring aids</a></li>
															<li><a href="#">Stop Smoking Aids</a></li>
															<li><a href="#">Support &amp; Braces</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

												</div><!--/ .mega_menu-->

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item">

												<a href="#">Beauty (1687)</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div class="mega_menu type_2 clearfix">

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">
													
														<h6><b>By Category</b></h6>
													
														<ul class="list_of_links">

															<li><a href="#">Bath &amp; Spa</a></li>
															<li><a href="#">Beauty Clearance</a></li>
															<li><a href="#">Gift Sets</a></li>
															<li><a href="#">Hair Care</a></li>
															<li><a href="#">Makeup &amp; Accessories</a></li>
															<li><a href="#">Skin Care</a></li>
															<li><a href="#">Tools &amp; Accessories</a></li>
															<li><a href="#" class="all">View All Categories</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">

														<h6><b>By Brand</b></h6>
													
														<ul class="list_of_links">

															<li><a href="#">Abibas</a></li>
															<li><a href="#">Agedir</a></li>
															<li><a href="#">Aldan</a></li>
															<li><a href="#">Biomask</a></li>
															<li><a href="#">Gamman</a></li>
															<li><a href="#">Pallona</a></li>
															<li><a href="#">Pure Care</a></li>
															<li><a href="#" class="all">View All Brands</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">
														
														<a href="#">
															<img src="images/mega_menu_img_1.jpg" alt="">
														</a>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

												</div><!--/ .mega_menu-->

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item">

												<a href="#">Personal Care (1036)</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div class="mega_menu type_3 clearfix">

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">

														<ul class="list_of_links">

															<li><a href="#">Oral Care</a></li>
															<li><a href="#">Shaving &amp; Hair Removal</a></li>
															<li><a href="#">Men's</a></li>
															<li><a href="#">Sun Care</a></li>
															<li><a href="#">Clearance</a></li>
															<li><a href="#">Feminine Care</a></li>
															<li><a href="#">Gift Sets</a></li>
															<li><a href="#">Soaps &amp; Bodywash</a></li>
															<li><a href="#">Massage &amp; Relaxation</a></li>
															<li><a href="#">Foot Care</a></li>
															<li><a href="#" class="all">View All Categories</a></li>

														</ul>

													</div><!--/ .mega_menu_item -->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item products_in_mega_menu">

														<h6 class="widget_title"><b>Today's Deals</b></h6>

														<div class="row">

															<div class="col-sm-4">

																<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

																<div class="product_item">

																	<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

																	<div class="image_wrap">

																		<img src="images/product_img_11.jpg" alt="">

																	</div><!--/. image_wrap-->

																	<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

																	<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

																	<div class="label_offer percentage">

																		<div>30%</div>OFF

																	</div>

																	<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

																	<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

																	<div class="description">

																		<p><a href="#">jkdfjgkldjlfgjkldjflgjlkfjgkjlk</a></p>

																		<div class="clearfix product_info">

																			<p class="product_price alignleft"><s>Rp.9.99</s> <b>Rp.5.99</b></p>

																		</div><!--/ .clearfix.product_info-->

																	</div>

																	<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

																</div><!--/ .product_item-->
																
																<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

															</div><!--/ [col]-->

															<div class="col-sm-4">

																<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

																<div class="product_item">

																	<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
																	
																	<div class="image_wrap">

																		<img src="images/product_img_12.jpg" alt="">

																	</div><!--/. image_wrap-->

																	<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

																	<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

																	<div class="label_offer percentage">

																		<div>25%</div>OFF

																	</div>

																	<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

																	<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

																	<div class="description">

																		<p><a href="#">dlkfjgkldjfklgjkjfkgjdjfg</a></p>

																		<div class="clearfix product_info">

																			<p class="product_price alignleft"><s>Rp16.999</s> <b>Rp14.999</b></p>

																		</div><!--/ .clearfix.product_info-->

																	</div>

																	<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

																</div><!--/ .product_item-->
																
																<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

															</div><!--/ [col]-->

															<div class="col-sm-4">

																<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

																<div class="product_item">

																	<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
																	
																	<div class="image_wrap">

																		<img src="images/product_img_13.jpg" alt="">

																	</div><!--/. image_wrap-->

																	<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

																	<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

																	<div class="label_offer percentage">

																		<div>40%</div>OFF

																	</div>

																	<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

																	<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

																	<div class="description">

																		<p><a href="#">cfjgdkfgjdjfgkjdklfgjkdfjgkd...</a></p>

																		<div class="clearfix product_info">

																			<p class="product_price alignleft"><s>Rp.103.99</s> <b>Rp.73.99</b></p>

																		</div><!--/ .clearfix.product_info-->

																	</div>

																	<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

																</div><!--/ .product_item-->
																
																<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

															</div><!--/ [col]-->
															
														</div><!--/ .row-->

														<hr>

														<a href="#" class="button_grey">View All Deals</a>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

												</div><!--/ .mega_menu-->

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item">

												<a href="#">Vitamins &amp; Supplements (202)</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div class="mega_menu type_4 clearfix">

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">

														<h6><b>By Condition</b></h6>
													
														<ul class="list_of_links">

															<li><a href="#">Aches &amp; Pains</a></li>
															<li><a href="#">Acne Solutions</a></li>
															<li><a href="#">Allergy &amp; Sinus</a></li>
															<li><a href="#" class="all">View All</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">

														<h6><b>Multivitamins</b></h6>

														<ul class="list_of_links">

															<li><a href="#">50+ Multivitamins</a></li>
															<li><a href="#">Children's Multivitamins</a></li>
															<li><a href="#">Men's Multivitamins</a></li>
															<li><a href="#" class="all">View All</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_item">

														<h6><b>Herbs</b></h6>

														<ul class="list_of_links">

															<li><a href="#">Aloe Vera</a></li>
															<li><a href="#">Ashwagandha</a></li>
															<li><a href="#">Astragalus</a></li>
															<li><a href="#" class="all">View All</a></li>

														</ul>

													</div><!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

													<div class="mega_menu_banner">

														<a href="#">
															<img src="images/mega_menu_img_2.jpg" alt="">
														</a>

													</div><!--/ .mega_menu_banner-->

													<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

												</div><!--/ .mega_menu-->

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item"><a href="#">Baby Needs (525)</a></li>
											<li class="has_megamenu animated_item"><a href="#">Diet &amp; Fitness (135)</a></li>
											<li class="has_megamenu animated_item"><a href="#">Sexuall Well-being (298)</a></li>
											<li class="has_megamenu animated_item"><a href="#" class="all"><b>All Categories</b></a></li>

										</ul>

										<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item">

										<nav class="main_navigation">

											<ul>

												<li><a href="index.html">Home</a></li>
												<li><a href="shop_my_account.html">My Account</a></li>
												<li><a href="shop_shopping_cart.html">Shopping Cart</a></li>
												<li><a href="shop_checkout.html">Checkout</a></li>
												
												<li><a href="additional_page_contact.html">Contact Us</a></li>
												
												
											</ul>

										</nav><!--/ .main_navigation-->

									</div>

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="#" class="wishlist_button" data-amount="7"></a>
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="#" class="compare_button" data-amount="3"></a>
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_3">

										<button id="open_shopping_cart" class="open_button" data-amount="3">
											<b class="title">My Cart</b>
											<b class="total_price">Rp.999.00</b>
										</button>

										<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

										<div class="shopping_cart dropdown">

												<div class="animated_item">

													<p class="title">Recently added item(s)</p>

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_1.jpg" alt=""></a>

														<a href="#" class="product_name">Donec porta diam eu massa diam lorem...</a>

														<p>1 x Rp.499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_2.jpg" alt=""></a>

														<a href="#" class="product_name">Lorem ipsum dolor sit amet...</a>

														<p>1 x Rp.499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_3.jpg" alt=""></a>

														<a href="#" class="product_name">In pede mi aliquet sit<br>amet euismod 30 ea</a>

														<p>1 x Rp.499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

													<ul class="total_info">

														<li><span class="price">Tax:</span> Rp.0.00</li>

														<li><span class="price">Discount:</span> Rp.37.00</li>

														<li class="total"><b><span class="price">Total:</span> Rp.999.00</b></li>

													</ul>
													
													<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<a href="#" class="button_grey">View Cart</a>

													<a href="#" class="button_blue">Checkout</a>

												</div><!--/ .animated_item-->

											</div><!--/ .shopping_cart.dropdown-->
										
										<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

								</div><!--/ .sticky_inner -->

								<!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .main_navigation_wrap-->

				<!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

			</header>
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->


					<div class="row">

						<main class="col-md-9 col-sm-8">

							
							<!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<header class="top_box on_the_sides">

									<div class="left_side clearfix v_centered">

										<!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

										<div class="v_centered">

											<span>Sort by:</span>

											<div class="custom_select sort_select">
												
												<select name="">
														
													<option value="Default">Default</option>
													<option value="Price">Price</option>
													<option value="Name">Name</option>
													<option value="Date">Date</option>

												</select>

											</div>

										</div>

										<!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->

										<div class="v_centered">

											<span>Show:</span>

											<div class="custom_select">

												<select name="">

													<option value="15">15</option>
													<option value="12">12</option>
													<option selected value="9">9</option>
													<option value="6">6</option>
													<option value="3">3</option>

												</select>

											</div>

										</div>

										<!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->

									</div>

									<div class="right_side">

										<!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->

										<div class="layout_type buttons_row" data-table-container="#products_container">

											<a href="#" data-table-layout="grid_view" class="button_grey middle_btn icon_btn tooltip_container"><i class="icon-th"></i><span class="tooltip top">Grid View</span></a>

											<a href="#" data-table-layout="list_view list_view_products" class="button_grey middle_btn icon_btn active tooltip_container"><i class="icon-th-list"></i><span class="tooltip top">List View</span></a>

										</div>

										<!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

									</div>

								</header>

								<div class="table_layout list_view list_view_products" id="products_container">

									<div class="table_row">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/product_img_7.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Donec in velit vel ipsum auctor, Liqui-gels 24 capsules</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.5.99</b></p>

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

														<ul class="rating alignright">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li></li>

														</ul>
														
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Donec in velit vel ipsum auctor, Liqui-gels 24 capsules</a>

													<a href="#" class="product_category">Beauty Clearance</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
													
														<ul class="rating">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li></li>

														</ul>
															
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li><a href="#">3 Review(s)</a></li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.5.99</p>

													<ul class="seller_stats">

														<li>Shipping: <span class="success">Free Shipping</span></li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/product_img_8.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_bestseller">Bestseller</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Quisque diam lorem, interdum, 4.25 fl oz (126ml)</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.8.99</b></p>

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

														<ul class="rating alignright">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>

														</ul>
														
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Quisque diam lorem, interdum, 4.25 fl oz (126ml)</a>

													<a href="#" class="product_category">Bath &amp; Spa</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
													
														<ul class="rating">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>

														</ul>
															
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li><a href="#">3 Review(s)</a></li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.8.99</p>

													<ul class="seller_stats">

														<li>Shipping: Rp.11.24/piece</li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/product_img_9.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Vestibulum iaculis lacinia est, 2mg, White Ice Mint 160 ea</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.76.99</b></p>

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Vestibulum iaculis lacinia est, 2mg, White Ice Mint 160 ea</a>

													<a href="#" class="product_category">Beauty Clearance</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li>0 Review(s)</li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.76.99</p>

													<ul class="seller_stats">

														<li>Shipping: <span class="success">Free Shipping</span></li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_row -->

									<div class="table_row">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/product_img_6.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Integer rutrum ante eu lacus, 100mg, Softgels 120 ea</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.75.39</b></p>

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Integer rutrum ante eu lacus, 100mg, Softgels 120 ea</a>

													<a href="#" class="product_category">Beauty Clearance</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li>0 Review(s)</li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.75.39</p>

													<ul class="seller_stats">

														<li>Shipping: Rp.16.63/piece</li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->
											
											<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/product_img_14.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_offer percentage">

														<div>30%</div>OFF

													</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Suspendisse sollicitudin velit, Vcaps 60 ea</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><s>Rp.99.99</s> <b>Rp.79.99</b></p>

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

														<ul class="rating alignright">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li></li>

														</ul>
														
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Suspendisse sollicitudin velit, Vcaps 60 ea</a>

													<a href="#" class="product_category">Gift Sets</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
													
														<ul class="rating">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li></li>

														</ul>
															
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li>0 Review(s)</li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold"><s>Rp.99.99</s> Rp.79.99</p>

													<ul class="seller_stats">

														<li>Shipping: <span class="success">Free Shipping</span></li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/product_img_15.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">In pede mi, aliquet sit amet, Peanut Butter Fudge 12 ea</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.24.99</b></p>

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">In pede mi, aliquet sit amet, Peanut Butter Fudge 12 ea</a>

													<a href="#" class="product_category">Hair Care</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li>0 Review(s)</li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.24.99</p>

													<ul class="seller_stats">

														<li>Shipping: <span class="success">Free Shipping</span></li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_row -->

									<div class="table_row">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/tabs_img_1.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Ut tellus dolor, dapibus eget 750mg, Softgels 120 ea</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.44.99</b></p>

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Ut tellus dolor, dapibus eget 750mg, Softgels 120 ea</a>

													<a href="#" class="product_category">Hair Care</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li>0 Review(s)</li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.44.99</p>

													<ul class="seller_stats">

														<li>Shipping: Rp.5.00/piece</li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/tabs_img_2.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_soldout">Sold Out</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Integer rutrum ante eu lacus</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.44.99</b></p>

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

														<ul class="rating alignright">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li></li>

														</ul>
														
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Integer rutrum ante eu lacus</a>

													<a href="#" class="product_category">Beauty Clearance</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
													
														<ul class="rating">

															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>

														</ul>
															
														<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li><a href="#">5 Review(s)</a></li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.39.39</p>

													<ul class="seller_stats">

														<li>Shipping: <span class="success">Free Shipping</span></li>
														<li>Availability: <span class="out_of_stock">out of stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="table_cell">

											<div class="product_item">

												<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

												<div class="image_wrap">

													<img src="images/tabs_img_3.jpg" alt="">

													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

													<div class="actions_wrap">

														<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

														</div><!--/ .centered_buttons -->

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

												</div><!--/. image_wrap-->

												<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

												<div class="description">

													<a href="#">Ut pharetra augue nec augue, 2.5 fl oz (75ml)</a>

													<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rp.44.99</b></p>

													</div>

												</div>

												<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="full_description">

													<a href="#" class="product_title">Ut pharetra augue nec augue, 2.5 fl oz (75ml)</a>

													<a href="#" class="product_category">Makeup &amp; Accessories</a>

													<div class="v_centered product_reviews">

														<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

														<ul class="topbar">

															<li>5 Review(s)</li>
															<li><a href="#">Add Your Review</a></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

													</div>

													<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

													<a href="#" class="learn_more">Learn More</a>

												</div>

												<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

												<div class="actions">

													<p class="product_price bold">Rp.44.99</p>

													<ul class="seller_stats">

														<li>Shipping: <span class="success">Free Shipping</span></li>
														<li>Availability: <span class="success">in stock</span></li>
														<li class="seller_info_wrap">

															
															<div class="seller_info_dropdown">

																<ul class="seller_stats">

																	<li>
																		
																		<ul class="topbar">
																			
																			<li>China (Mainland)</li>

																			<li><a href="#">Contact Details</a></li>

																		</ul>

																	</li>

																	<li><span class="bold">99.8%</span> Positive Feedback</li>

																</ul>

																<div class="v_centered">

																	<a href="#" class="button_blue mini_btn">Contact Seller</a>

																	<a href="#" class="small_link">Chat Now</a>

																</div>

															</div>

														</li>

													</ul>

													<ul class="buttons_col">

														<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

														<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

													</ul>

												</div>

												<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

											</div><!--/ .product_item-->

										</div>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_row -->

								</div><!--/ .table_layout -->

								<footer class="bottom_box on_the_sides">

									<div class="left_side">

										<p>Showing 1 to 3 of 45 (15 Pages)</p>

									</div>

									<div class="right_side">

										<ul class="pags">

											<li><a href="#"></a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"></a></li>

										</ul>

									</div>

								</footer>

							</div>

							<!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->

						</main>

						<aside class="col-md-3 col-sm-4">

							<!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3 class="widget_title">Today's Deals</h3>

								<!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel widgets_carousel">

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

											<img src="images/deals_img_1.jpg" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												</div><!--/ .centered_buttons -->

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_offer percentage">

												<div>30%</div>OFF

											</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Ut pharetra augue, Original 24 fl oz</a></p>

											<div class="clearfix product_info">

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating alignright">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>

												<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

												<p class="product_price alignleft"><s>Rp.9.99</s> <b>Rp.5.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="images/deals_img_2.jpg" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												</div><!--/ .centered_buttons -->

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_offer percentage">

												<div>25%</div>OFF

											</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Donec in velit vel, Size 4 Diapers 29 ea</a></p>

											<div class="clearfix product_info">

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating alignright">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>

												</ul>

												<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

												<p class="product_price alignleft"><s>Rp.16.99</s> <b>Rp.14.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="images/deals_img_3.jpg" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												</div><!--/ .centered_buttons -->

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_offer percentage">

												<div>40%</div>OFF

											</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Vestibulum iaculis lacinia est, 1000mg, Tablets, 120 ea</a></p>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><s>Rp.103.99</s> <b>Rp.73.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="images/deals_img_4.jpg" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												</div><!--/ .centered_buttons -->

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

												<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_offer percentage">

												<div>15%</div>OFF

											</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Quisque diam lorem, 1 each</a></p>

											<div class="clearfix product_info">

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating alignright">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>
													<li></li>

												</ul>

												<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

												<p class="product_price alignleft"><s>Rp.5.99</s> <b>Rp.2.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="images/deals_img_5.jpg" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												</div><!--/ .centered_buttons -->

												<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

												<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_offer percentage">

												<div>50%</div>OFF

											</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Suspendisse sollicitudin velit sed leo 4 ea</a></p>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><s>Rp.19.99</s> <b>Rp.13.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

								</div><!--/ .widgets_carousel-->

								<!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

								<footer class="bottom_box">

									<a href="produk_detail.php" class="button_grey middle_btn">View All Deals</a>

								</footer>

								<!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset.animated.transparent-->

							<!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3>Filter</h3>

								<form class="type_2">

									<div class="table_layout list_view">

										<div class="table_row">

											<!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->

											<div class="table_cell">

												<label>Category</label>

												<div class="custom_select">

													<select name="">
														
														<option value="Beauty">Beauty</option>
														<option value="Personal Care">Personal Care</option>
														<option value="Diet &amp; Fitness">Diet &amp; Fitness</option>
														<option value="Baby Needs">Baby Needs</option>

													</select>

												</div>

											</div><!--/ .table_cell -->

											<!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->

											<div class="table_cell">

												<fieldset>

													<legend>Manufacturer</legend>

													<ul class="checkboxes_list">

														<li>
															
															<input type="checkbox" checked name="manufacturer" id="manufacturer_1">
															<label for="manufacturer_1">Manufacturer 1</label>

														</li>

														<li>
															
															<input type="checkbox" name="manufacturer" id="manufacturer_2">
															<label for="manufacturer_2">Manufacturer 2</label>

														</li>

														<li>
															
															<input type="checkbox" name="manufacturer" id="manufacturer_3">
															<label for="manufacturer_3">Manufacturer 3</label>

														</li>

													</ul>

												</fieldset>

											</div><!--/ .table_cell -->

											<!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
											<?php
												
											    
											  ?>

											<div class="table_cell">

												<fieldset>

													<legend>Price</legend>

													<div class="range">

														Range :

														<span class="min_val"></span> - 
														<span class="max_val"></span>

														<input type="hidden" name="" class="min_value">

														<input type="hidden" name="" class="max_value">

													</div>

													<div id="slider"></div>

												</fieldset>

											</div><!--/ .table_cell -->

											<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

											<!--/ .table_layout -->

									<footer class="bottom_box">

										<div class="buttons_row">

											<button type="submit" class="button_blue middle_btn">Search</button>

											<button type="reset" class="button_grey middle_btn filter_reset">Reset</button>

										</div>

									</footer>

								</form>

							</section>

							<!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<a href="#" class="banner">
									
									<img src="images/banner_img_10.png" alt="">

								</a>

							</div>

							<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3>Already Viewed Products</h3>

								<ul class="products_list_widget">

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<li>
										
										<a href="#" class="product_thumb">
											
											<img src="images/product_thumb_4.jpg" alt="">

										</a>

										<div class="wrapper">

											<a href="#" class="product_title">Suspendisse sollicitudin velit...</a>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><b>Rp.5.99</b></p>

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating alignright">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

											</div>

										</div>

									</li>

									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

								</ul><!--/ .list_of_products-->

							</section>

							<!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->

							

							<!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3>Tags</h3>

								<div class="tags_container">

									<ul class="tags_cloud">
										
										<li><a href="#" class="button_grey">allergy</a></li>
										<li><a href="#" class="button_grey">baby</a></li>
										<li><a href="#" class="button_grey">beauty</a></li>
										<li><a href="#" class="button_grey">ear care</a></li>
										<li><a href="#" class="button_grey">for her</a></li>
										<li><a href="#" class="button_grey">for him</a></li>
										<li><a href="#" class="button_grey">first aid</a></li>
										<li><a href="#" class="button_grey">gift sets</a></li>
										<li><a href="#" class="button_grey">spa</a></li>
										<li><a href="#" class="button_grey">hair care</a></li>
										<li><a href="#" class="button_grey">herbs</a></li>
										<li><a href="#" class="button_grey">medicine</a></li>
										<li><a href="#" class="button_grey">natural</a></li>
										<li><a href="#" class="button_grey">oral care</a></li>
										<li><a href="#" class="button_grey">pain</a></li>
										<li><a href="#" class="button_grey">pedicure</a></li>
										<li><a href="#" class="button_grey">personal care</a></li>
										<li><a href="#" class="button_grey">probiotics</a></li>

									</ul><!--/ .tags_cloud-->
									
								</div><!--/ .tags_container-->

							</section>

							<!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<a href="#" class="banner">
									
									<img src="images/banner_img_11.png" alt="">

								</a>

							</div>

							<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Bestseller Products - - - - - - - - - - - - - - - - -->

							

							<!-- - - - - - - - - - - - - - End of Bestseller Products - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

							

							<!-- - - - - - - - - - - - - - End of Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

							
						</aside>

					</div><!--/ .row -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->


			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->


		<!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->
		
		<!-- Include Libs & Plugins
		============================================ -->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/queryloader2.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.countdown.plugin.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/owlcarousel/owl.carousel.min.js"></script>
		<script src="twitter/jquery.tweet.min.js"></script>
		<script src="js/arcticmodal/jquery.arcticmodal.js"></script>
		<script src="js/colorpicker/colorpicker.js"></script>
		<script src="js/retina.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

		<!-- Theme files
		============================================ -->
		<script src="js/theme.plugins.js"></script>
		<script src="js/theme.core.js"></script>
		
	</body>
</html>