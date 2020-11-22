<?php
/**
 * Template name: Maintain
 */
get_header();
?>

<div class="main-container">
	<div class="preloader"><i class="fi-widget" aria-hidden="true"></i></div>	<div id="wrapper">
		<div class="center logotype">
			<header>
				<div class="logo-box istext" rel="home"><h1 class="site-title">GSK</h1></div>			</header>
		</div>
		<div id="content" class="site-content">
			<div class="center">
                <h2 class="heading font-center" style="font-weight:300;font-style:normal">Maintenance mode is on</h2><div class="description" style="font-weight:300;font-style:normal"><p>Site will be available soon. Thank you for your patience!</p>
</div>			</div>
		</div>
	</div> <!-- end wrapper -->
	<footer>
		<div class="center">
			<div style="font-weight:300;font-style:normal">© GSK 2020</div>		</div>
	</footer>
					<picture class="bg-img">
						<img src="https://goldenstarkeycaps.com/wp-content/uploads/2020/11/mt-sample-background.jpg">
		</picture>
	</div>

	<div class="login-form-container">
		<input type="hidden" id="mtnc_login_check" name="mtnc_login_check" value="efbaafedf8" /><input type="hidden" name="_wp_http_referer" value="/?maintenance-preview" /><form name="login-form" id="login-form" class="login-form" method="post"><label>User Login</label><span class="login-error"></span><span class="licon user-icon"><input type="text" name="log" id="log" value="" size="20"  class="input username" placeholder="Username"/></span><span class="picon pass-icon"><input type="password" name="pwd" id="login_password" value="" size="20"  class="input password" placeholder="Password" /></span><a class="lost-pass" href="https://goldenstarkeycaps.com/wp-login.php?action=lostpassword" title="Lost Password">Lost Password</a><input type="submit" class="button" name="submit" id="submit" value="Login" tabindex="4" /><input type="hidden" name="is_custom_login" value="1" /><input type="hidden" id="mtnc_login_check" name="mtnc_login_check" value="efbaafedf8" /><input type="hidden" name="_wp_http_referer" value="/?maintenance-preview" /></form>		  <div id="btn-open-login-form" class="btn-open-login-form">
    <i class="fi-lock"></i>

  </div>
  <div id="btn-sound" class="btn-open-login-form sound">
    <i id="value_botton" class="fa fa-volume-off" aria-hidden="true"></i>
  </div>
  	</div>
<!--[if lte IE 10]>
<script src='https://goldenstarkeycaps.com/wp-includes/js/jquery/jquery.js?ver=5.4.2'></script>
<![endif]-->
<!--[if !IE]><!--><script src='https://goldenstarkeycaps.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script src='https://goldenstarkeycaps.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<!--<![endif]--><script>
var mtnc_front_options = {"body_bg":"https:\/\/goldenstarkeycaps.com\/wp-content\/uploads\/2020\/11\/mt-sample-background.jpg","gallery_array":[],"blur_intensity":"5","font_link":["Open Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic:300"]};
</script>
<script src='https://goldenstarkeycaps.com/wp-content/plugins/maintenance/load/js/jquery.frontend.js?ver=1606020569'></script>


<?php
get_footer();