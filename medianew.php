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

<?php
$sql=mysql_query("SELECT * FROM produk ORDER BY id_produk DESC LIMIT 16");
  while ($r=mysql_fetch_array($sql)){
    $harga = format_rupiah($r[harga]);
    $disc     = ($r[diskon]/100)*$r[harga];
    $hargadisc     = number_format(($r[harga]-$disc),0,",",".");
    $stok=$r['stok'];
    $tombolbeli="<a class='prod_cart' href=\"aksi.php?module=keranjang&act=tambah&id=$r[id_produk]\">BELI</a>";
    $tombolhabis="<span class='prod_cart_habis'></span>";
      if ($stok!= "0"){
      $tombol=$tombolbeli;
      }else{
      $tombol=$tombolhabis;
      } 

    $d=$r['diskon'];
    $hargatetap="<div class='prod_price'><span class='price'> <br /></span>&nbsp;<span class='price'> Rp. <b>$hargadisc,-</b></span></div>                        
          </div>";
    $hargadiskon="<div class='prod_price'><span style='text-decoration:line-through;' class='price'>Rp. $harga,- <br /></span>&nbsp;<span class='price3'>Diskon $r[diskon]% 
	 <br /><span class='price2'>Rp. <b>$hargadisc,-</b></span></div>                        
          </div>";
      if ($d!= "0"){
      $divharga=$hargadiskon;
      }else{
      $divharga=$hargatetap;
      } 

    echo "<div class='prod_box'>
          <div class='top_prod_box'></div> 
          <div class='center_prod_box'>            
             <div class='product_title'><a href='produk-$r[id_produk]-$r[produk_seo].html'>$r[nama_produk]</a></div>
             <div class='product_img'>
                             <a href='produk-$r[id_produk]-$r[produk_seo].html'><a href='foto_produk/$r[gambar]' rel='clearbox[gallery=Koleksi Produk]' title='$r[nama_produk]'>
               <img src='foto_produk/$r[gambar]' border='0' height=110 width=114  class='tooltip' title='klik untuk memperbesar gambar'></a>
             </div>
             $divharga
          <div class='bottom_prod_box'></div>
          <div class='prod_details_tab'>
             $tombol            
             <a href='produk-$r[id_produk]-$r[produk_seo].html' class='prod_details'>DETAIL</a> 
          </div>
          </div>";
  }
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
		<link rel="stylesheet" href="js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="js/arcticmodal/jquery.arcticmodal.css">
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
	<body class="front_page">

		

		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_2">

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="sticky_part">

						<div class="container">

							<div class="row">

								<div class="main_header_row">

									<div class="col-sm-3">

										<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

										<a href="index.html" class="logo">

											<img src="images/logo.png" alt="">

										</a>

										<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-6 col-md-5 col-sm-6">

										<!-- - - - - - - - - - - - - - Navigation of shop - - - - - - - - - - - - - - - - -->

										<nav>

											<ul class="topbar">

												<li><a href="index.html">Home</a></li>
												<li><a href="#">My Account</a></li>
												<li><a href="#">Shopping Cart</a></li>
												<li><a href="#">Checkout</a></li>
												<li><a href="#">Blog</a></li>
												<li><a href="#">Contact us</a></li>
												<li class="has_submenu">

													<a href="#">Pages</a>

													<!-- - - - - - - - - - - - - - Submenu (level 2) - - - - - - - - - - - - - - - - -->

													<ul class="theme_menu submenu">
																
														<li class="has_submenu current">

															<a href="index.html">Homepage Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="index.html">Home 1</a></li>
																<li class="current"><a href="home_v2.html">Home 2</a></li>
																<li><a href="home_v3.html">Home 3</a></li>
																<li><a href="home_v4.html">Home 4</a></li>
																<li><a href="home_v5.html">Home 5</a></li>
																<li><a href="home_v6.html">Home 6</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="category_page_v1.html">Category Page Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="category_page_v1.html">Category page 1</a></li>
																<li><a href="category_page_v2.html">Category page 2</a></li>
																<li><a href="category_page_v3.html">Category page 3</a></li>
																<li><a href="category_page_v4.html">Category page 4</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="product_page_v1.html">Product Page Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="product_page_v1.html">Product page 1</a></li>
																<li><a href="product_page_v2.html">Product page 2</a></li>
																<li><a href="product_page_v3.html">Product page 3</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="shop_shopping_cart.html">Other Shop Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="shop_shopping_cart.html">Shopping cart</a></li>
																<li><a href="shop_checkout.html">Checkout</a></li>
																<li><a href="shop_wishlist.html">Wishlist</a></li>
																<li><a href="shop_product_comparison.html">Product Comparison</a></li>
																<li><a href="shop_my_account.html">My Account</a></li>
																<li><a href="shop_manufacturers.html">Manufacturers</a></li>
																<li><a href="shop_manufacturer_page.html">Manufacturer Page</a></li>
																<li><a href="shop_orders_list.html">Order List</a></li>
																<li><a href="shop_order_page.html">Order Page</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="additional_page_about.html">Additional Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="additional_page_about.html">About Us</a></li>
																<li><a href="additional_page_contact.html">Contact Us</a></li>
																<li><a href="additional_page_faq.html">FAQ</a></li>
																<li><a href="additional_page_404.html">404 Page</a></li>
																<li><a href="additional_page_sitemap.html">Sitemap</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="extra_stuff_elements.html">Extra Stuff</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="extra_stuff_elements.html">Elements</a></li>
																<li><a href="extra_stuff_typography.html">Typography</a></li>
																<li><a href="extra_stuff_columns.html">Columns</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="blog_v1.html">Blog Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="blog_v1.html">Blog v1</a></li>
																<li><a href="blog_v2.html">Blog v2</a></li>
																<li><a href="blog_v3.html">Blog v3</a></li>
																<li><a href="blog_post_v1.html">Blog Post v1</a></li>
																<li><a href="blog_post_v2.html">Blog Post v2</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

													</ul>

													<!-- - - - - - - - - - - - - - End submenu (level 2) - - - - - - - - - - - - - - - - -->

												</li>
												<li><a href="#" data-modal-url="modals/login.html">Login</a></li>

											</ul>

										</nav>

										<!-- - - - - - - - - - - - - - End navigation of shop - - - - - - - - - - - - - - - - -->

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

									<div class="col-lg-3 col-md-4 col-sm-3">

										<div class="clearfix">

											<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

											<!--/ .alignright.site_settings-->

											<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
											
											<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

											<!--/ .alignright.site_settings.currency-->

											<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

										</div><!--/ .clearfix-->

										<div class="align_right v_centered">

											<!-- - - - - - - - - - - - - - Wishlist & compare counters - - - - - - - - - - - - - - - - -->

											<ul class="shop_links_list">

												<li>
													<a href="#" class="small_link"><i class="icon-heart-5"></i>Wishlist</a>	
												</li>
												<li>
													<a href="#" class="small_link"><i class="icon-resize-small"></i>Compare</a>
												</li>

											</ul><!--/ .align_right.shop_links-->
										
											<!-- - - - - - - - - - - - - - End of wishlist & compare counters - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Shopping cart - - - - - - - - - - - - - - - - -->

											<div class="shopping_cart_wrap">

												<button id="open_shopping_cart" class="open_button" data-amount="3">
													<b class="title">My Cart</b>
													<b class="total_price">Rp.999.000</b>
												</button>

												<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

												<div class="shopping_cart dropdown">

													<div class="animated_item">

														<p class="title">Recently added item(s)</p>

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="images/sc_img_1.jpg" alt=""></a>

															<a href="#" class="product_name">Aenean Auctor Wisi Et Urna Ipsum...</a>

															<p>1 x $499.00</p>

															<button class="close"></button>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="images/sc_img_2.jpg" alt=""></a>

															<a href="#" class="product_name">Lorem Ipsum Dolor Sit Amet...</a>

															<p>1 x $499.00</p>

															<button class="close"></button>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="images/sc_img_3.jpg" alt=""></a>

															<a href="#" class="product_name">Nemo Enim Ipsam <br>Voluptatem 30 ea</a>

															<p>1 x $499.00</p>

															<button class="close"></button>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

														<ul class="total_info">

															<li><span class="price">Tax:</span> $0.00</li>

															<li><span class="price">Discount:</span> $37.00</li>

															<li class="total"><b><span class="price">Total:</span> $999.00</b></li>

														</ul>
														
														<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<a href="#" class="button_grey">View Cart</a>

														<a href="#" class="button_blue">Checkout</a>

													</div><!--/ .animated_item-->

												</div><!--/ .shopping_cart.dropdown-->

												<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

											</div><!--/ .shopping_cart_wrap.align_left-->
											
											<!-- - - - - - - - - - - - - - End of shopping cart - - - - - - - - - - - - - - - - -->

										</div><!--/ .align_right-->

									</div><!--/ [col]-->

								</div><!--/ .main_header_row-->

							</div><!--/ .row-->

						</div><!--/ .container-->

					</div>

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

			</header>
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="page_wrapper">

				<div class="container">

					<div class="section_offset">

						<div class="row">

							<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
							
							<aside class="col-md-3 has_mega_menu">

								<section class="animated transparent" data-animation="fadeInDown" data-animation-delay="200">


									<ul class="theme_menu cats">

										<li class="has_megamenu">

											<a href="#"><span class="glyphicon glyphicon-ok"></span>Medicine &amp; Health (1375)</a>

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
										<li class="has_megamenu">

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
										<li class="has_megamenu">

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

<?php
  $sql=mysql_query("SELECT * FROM produk ORDER BY id_produk DESC LIMIT 16");
  while ($r=mysql_fetch_array($sql));
              
?>
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

						<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

					    <div class="clearfix product_info">

						<p class="product_price alignleft"><s>Rp9.99</s> <b>5.99</b></p>

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

																	<p><a href="#">Ipsum Dolor Sit Amet, Size 4 Diapers 29 ea</a></p>

																	<div class="clearfix product_info">

																		<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

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

																	<p><a href="#">Ut Tellus Dolor Dapbus Eget Dolor Ipsum...</a></p>

																	<div class="clearfix product_info">

																		<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

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
										<li class="has_megamenu">

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
										<li class="has_megamenu"><a href="#">Baby Needs (525)</a></li>
										<li class="has_megamenu"><a href="#">Diet &amp; Fitness (135)</a></li>
										<li class="has_megamenu"><a href="#">Sexuall Well-being (298)</a></li>
										<li class="has_megamenu"><a href="#" class="all"><b>All Categories</b></a></li>

									</ul>

								</section><!--/ .animated.transparent-->

							</aside><!--/ [col]-->
							
							<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

							<div class="col-md-9">

								<div class="animated transparent" data-animation="fadeInDown" data-animation-delay="400">
								
									<!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

									<div class="revolution_slider">

										<div class="rev_slider">

											<ul>

												<!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->

												<li data-transition="papercut" data-slotamount="7">
													
													<img src="images/home_slide_4.jpg" alt="">

													<div class="caption sfl stl layer_1" data-x="left" data-hoffset="60" data-y="90" data-easing="easeOutBack" data-speed="600" data-start="900">Best Quality</div>

													<div class="caption sfl stl layer_2" data-x="left" data-y="138" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1000">Medications</div>

													<div class="caption sfl stl layer_3" data-x="left" data-y="190" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">at Low Prices</div>

													<div class="caption sfb stb" data-x="left" data-y="245" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
														<a href="#" class="button_blue big_btn">Shop Now!</a>
													</div>

												</li>

												<!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->

												<li data-transition="papercut" data-slotamount="7" class="align_center">
													
													<img src="images/home_slide_5.jpg" alt="">

													<div class="caption sfl stl layer_5" data-x="center" data-y="77" data-easing="easeOutBack" data-speed="600" data-start="900">Have A Question?</div>

													<div class="caption sfl stl layer_6" data-x="center" data-y="135" data-easing="easeOutBack" data-speed="600" data-start="1050"><small>Our</small> Pharmacists<br><small>Are</small> Ready <small>to</small> Help You!</div>

													<div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack" data-speed="700" data-start="1150">
														<a href="#" class="button_blue big_btn">Contact Us Now!</a>
													</div>

												</li>

												<!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->

												<li data-transition="papercut" data-slotamount="7">
													
													<img src="images/home_slide_6.jpg" alt="">

													<div class="caption sfl stl layer_8" data-x="right" data-y="73" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="900">Get 10% Off</div>

													<div class="caption sfl stl layer_9" data-x="right" data-y="122" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1000">For Reorders</div>

													<div class="caption sfl stl layer_10" data-x="right" data-y="178" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1100">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</div>

													<div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262" data-easing="easeOutBack" data-speed="700" data-start="1150">
														<a href="#" class="button_blue big_btn">Read More</a>
													</div>

												</li>

												<!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->

											</ul>

										</div><!--/ .rev_slider-->

									</div><!--/ .revolution_slider-->
									
									<!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

								</div><!--/ .animated.transparent-->

							</div><!--/ [col]-->

							<!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

						</div><!--/ .row-->

					</div><!--/ .section_offset-->

					<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->


					<!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - End of featured products - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="row">

							<div class="col-sm-4">

								<div class="animated transparent" data-animation="fadeInDown">

									<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
									
									<a href="#" class="banner">
										<img src="images/banner_img_3.png" alt="">
									</a>

									<!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

								</div><!--/ .animated.transparent-->

							</div><!--/ [col]-->

							<div class="col-sm-4">

								<div class="animated transparent" data-animation="fadeInDown" data-animation-delay="150">

									<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

									<a href="#" class="banner">
										<img src="images/banner_img_4.jpg" alt="">
									</a>

									<!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

									<a href="#" class="banner">
										<img src="images/banner_img_5.jpg" alt="">
									</a>

									<!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

								</div><!--/ .animated.transparent-->

							</div><!--/ [col]-->

							<div class="col-sm-4">

								<div class="animated transparent" data-animation="fadeInDown" data-animation-delay="450">

									<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
									
									<a href="#" class="banner">
										<img src="images/banner_img_6.jpg" alt="">
									</a>

									<!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

								</div><!--/ .animated.transparent-->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div>

					<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Bestsellers - - - - - - - - - - - - - - - - -->

					<section class="section_offset animated transparent" data-animation="fadeInDown"> 

						<h3>Bestsellers</h3>

						<div class="tabs type_2 products">

							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

							<ul class="tabs_nav clearfix">

								<li><a href="#tab-22">Medicine &amp; Health</a></li>
								<li><a href="#tab-23">Beauty</a></li>
								<li><a href="#tab-24">Personal Care</a></li>
								<li><a href="#tab-25">Vitamins &amp; Supplements</a></li>
								<li><a href="#tab-26">Baby Needs</a></li>
								<li><a href="#tab-27">Diet &amp; Fitness</a></li>
								<li><a href="#tab-28">Sexual Well-being</a></li>

							</ul>

							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

							<div class="tab_containers_wrap">

								<div id="tab-22" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of medicine & health - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Aenean Auctor Wisi Et Urna Amet, Liqui-gels 24 capsules</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$5.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Ipsum Dolor Sit Amet Adipiscing Elit, Allergy &amp; Sinus 4.25 fl oz(126 ml)</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$8.99</b></p>

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

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Dolor Sit Amet Lorem, 2mg, White Ice Mint 160 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$76.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="images/product_img_10.jpg" alt="">

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$35.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Aenean Auctor Wisi Et Urna Amet, Liqui-gels 24 capsules</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$5.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Ipsum Dolor Sit Amet Adipiscing Elit, Allergy &amp; Sinus 4.25 fl oz(126 ml)</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$8.99</b></p>

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

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Dolor Sit Amet Lorem, 2mg, White Ice Mint 160 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$76.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="images/product_img_10.jpg" alt="">

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$35.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of medicine & health - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-22-->

								<div id="tab-23" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Vestibulum Iaculis Lacinia Amet 30</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$44.99</b></p>

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

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="images/product_img_1.jpg" alt="">

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$27.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing, 2.5 fl oz (75ml)</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Aenean Auctor Wisi Et Urna Ipsum 750mg, Softgels 120 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Aenean Auctor Wisi Et Urna Ipsum 750mg, Softgels 120 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Vestibulum Iaculis Lacinia Amet 30</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$44.99</b></p>

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

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing, 2.5 fl oz (75ml)</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="images/product_img_1.jpg" alt="">

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

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$27.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-23-->

								<div id="tab-24" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

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

													<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

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

													<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

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

													<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-24-->

								<div id="tab-25" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

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

													<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

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

													<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
											
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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

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

													<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-25-->

								<div id="tab-26" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

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

													<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

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

													<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

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

													<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-26-->

								<div id="tab-27" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

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

													<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

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

													<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

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

													<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-27-->

								<div id="tab-28" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

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

													<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

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

													<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
											
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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

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

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

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

													<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

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

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											<div class="label_bestseller">Bestseller</div>

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

											<div class="description">

												<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-28-->

							</div>

							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

						</div>

					</section><!--/ .section_offset-->

					<!-- - - - - - - - - - - - - - End of bestsellers - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

		<?php
		include 'Footer.php';  
		?>
		<!-- Include Libs & Plugins
		============================================ -->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/queryloader2.min.js"></script>
		<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/owlcarousel/owl.carousel.min.js"></script>
		<script src="js/royalslider/jquery.easing-1.3.js"></script>
		<script src="js/jquery.countdown.plugin.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/arcticmodal/jquery.arcticmodal.js"></script>
		<script src="twitter/jquery.tweet.min.js"></script>
		<script src="js/colorpicker/colorpicker.js"></script>
		<script src="js/retina.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

		<!-- Theme files
		============================================ -->
		<script src="js/theme.plugins.js"></script>
		<script src="js/theme.core.js"></script>
		
	</body>
</html>