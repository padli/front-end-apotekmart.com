<?php 
error_reporting(0);
include 'config/koneksi.php';

 ?>
<!--==================================
		Login modal window
<!--==================================
		Login modal window
======================================-->
<?php 
	 sql="select * from users"
	 query_modals 'getallheaders()'

 ?>
<div id="login_mw" class="modal_window">

	<button class="close arcticmodal-close"></button>

	<header class="on_the_sides">

		<div class="left_side">

			<h2>Log In Member</h2>

		</div>

		<div class="right_side">

			<a href="#" class="button_grey middle_btn">Register</a>

		</div>

	</header><!--/ .on_the_sides-->

	<form class="type_2">

		<ul>

			<li>
				<label for="login_email">Email address</label>
				<input type="email" name="" id="login_email">
			</li>

			<li>
				<label for="login_password">Password</label>
				<input type="password" name="" id="login_password">
			</li>

			<li>
				<input type="checkbox" name="" id="checkbox_1">
				<label for="checkbox_1">Remember me</label>
			</li>

			<li class="v_centered">
				<button class="button_blue middle_btn">Login</button>
				<a href="#" class="small_link">Forgot your password?</a>
			</li>

		</ul>

	</form>

	<hr>

	<div class="streamlined">
							
		<h4 class="streamlined_title">OR Log In With</h4>

		<!--Social icon's list-->
		<ul class="horizontal_list social_btns">

			<li><a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a></li>
			<li><a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a></li>
			<li><a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a></li>

		</ul><!--/ .horizontal_list.wrapper.social_btns-->
		<!--End social icon's list-->

	</div><!--/ .streamlined-->

</div>

<!--==================================
		End login modal window
======================================-->======================================-->

<div id="login_mw" class="modal_window">

	<button class="close arcticmodal-close"></button>

	<header class="on_the_sides">

		<div class="left_side">

			<h2>Log In</h2>

		</div>

		<div class="right_side">

			<a href="#" class="button_grey middle_btn">Register</a>

		</div>

	</header><!--/ .on_the_sides-->

	<form class="type_2">

		<ul>

			<li>
				<label for="login_email">Email address</label>
				<input type="email" name="" id="login_email">
			</li>

			<li>
				<label for="login_password">Password</label>
				<input type="password" name="" id="login_password">
			</li>

			<li>
				<input type="checkbox" name="" id="checkbox_1">
				<label for="checkbox_1">Remember me</label>
			</li>

			<li class="v_centered">
				<button class="button_blue middle_btn">Login</button>
				<a href="#" class="small_link">Forgot your password?</a>
			</li>

		</ul>

	</form>

	<hr>

	<div class="streamlined">
							
		<h4 class="streamlined_title">OR Log In With</h4>

		<!--Social icon's list-->
		<ul class="horizontal_list social_btns">

			<li><a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a></li>
			<li><a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a></li>
			<li><a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a></li>

		</ul><!--/ .horizontal_list.wrapper.social_btns-->
		<!--End social icon's list-->

	</div><!--/ .streamlined-->

</div>

<!--==================================
		End login modal window
======================================-->