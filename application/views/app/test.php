<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login ABPluss</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
		============================================ -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
	<!-- Google Fonts
		============================================ -->
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/bootstrap.min.css" rel="stylesheet">
	<!-- font awesome CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/font-awesome.min.css" rel="stylesheet">
	<!-- owl.carousel CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/css/owl.theme.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/css/owl.transitions.css" rel="stylesheet">
	<!-- animate CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/animate.css" rel="stylesheet">
	<!-- normalize CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/normalize.css" rel="stylesheet">
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
	<!-- wave CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/waves.min.css" rel="stylesheet">
	<!-- Notika icon CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/notika-custom-icon.css" rel="stylesheet">
	<!-- main CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/main.css" rel="stylesheet">
	<!-- style CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/style.css" rel="stylesheet">
	<!-- responsive CSS
		============================================ -->
	<link href="<?php echo base_url() ?>assets/login/css/responsive.css" rel="stylesheet">
	<!-- modernizr JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/vendor/modernizr-2.8.3.min.js"></script>
	<style type="text/css">
		body {
			background: url("<?php echo base_url() ?>assets/build/images/background_login.png") no-repeat center center fixed;
			background-size: cover;
			/*background-repeat: no-repeat;*/
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-attachment: fixed;
		}

		.g-recaptcha iframe {
			max-width: 100% !important;
			transform: scale(0.65) !important;
			-webkit-transform: scale(0.65) !important;
			transform-origin: 0 0 !important;
			-webkit-transform-origin: 0 0 !important;
		}

		#rc-imageselect {
			transform: scale(0.65) !important;
			-webkit-transform: scale(0.65) !important;
			transform-origin: 0 0 !important;
			-webkit-transform-origin: 0 0 !important;
		}
	</style>
</head>

<body>
	<!-- Login Register area Start-->
	<div class="col-md-6 col-sm-12"></div>
	<div class="col-md-4 col-sm-12">
		<div class="login-content">
			<!-- Login -->
			<div class="nk-block toggled" id="l-login">
				<div class="nk-form">
					<div class="col-md-12">
						<div class="text-center">
							<img src="<?php echo base_url() ?>assets/build/images/logoAB.png" width="100px" height="auto" alt="logo.png">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon nk-ic-st-pro"><i class="fa fa-user"></i></span>
						<div class="nk-int-st">
							<input type="text" class="form-control" placeholder="Username">
						</div>
					</div>
					<div class="input-group mg-t-15">
						<span class="input-group-addon nk-ic-st-pro"><i class="fa fa-lock"></i></span>
						<div class="nk-int-st">
							<input type="password" class="form-control" placeholder="Password">
						</div>
					</div>
					<br>
					<div class="input-group">
						<div class="g-recaptcha" data-theme="light" data-sitekey="6LfsiI0UAAAAAHWaBcVK3isVp2XfprG5vm3AVAKP"></div>
					</div>
					<div class="nk-int-st">
						<button type="submit" style="background-color:#01ac3e" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign
							in</button>
					</div>
					<hr />
					Copyright &copy; <script type="text/javascript">
						document.write(new Date().getFullYear());
					</script> ABPluss.
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="col-md-2"></div> -->
	<!-- Login Register area End-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript">
		var width = $('.g-recaptcha').parent().width();
		if (width < 300) {
			var scale = width / 300;
			$('.g-recaptcha').css('transform', 'scale(' + scale + ')');
			$('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
			$('.g-recaptcha').css('transform-origin', '0 0');
			$('.g-recaptcha').css('-webkit-transform-origin', '0 0');
		}
	</script>
	<!-- jquery
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/vendor/jquery-1.12.4.min.js"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/bootstrap.min.js"></script>
	<!-- wow JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/wow.min.js"></script>
	<!-- price-slider JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/jquery-price-slider.js"></script>
	<!-- owl.carousel JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/owl.carousel.min.js"></script>
	<!-- scrollUp JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/jquery.scrollUp.min.js"></script>
	<!-- meanmenu JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/meanmenu/jquery.meanmenu.js"></script>
	<!-- counterup JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/counterup/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/counterup/waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/counterup/counterup-active.js"></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- sparkline JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/sparkline/sparkline-active.js"></script>
	<!-- flot JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/flot/jquery.flot.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/flot/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/flot/flot-active.js"></script>
	<!-- knob JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/knob/jquery.knob.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/knob/jquery.appear.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/knob/knob-active.js"></script>
	<!--  Chat JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/chat/jquery.chat.js"></script>
	<!--  wave JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/wave/waves.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/wave-active.js"></script>
	<!-- icheck JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/icheck/icheck.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/js/icheck/icheck-active.js"></script>
	<!--  todo JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/todo/jquery.todo.js"></script>
	<!-- Login JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/login/login-action.js"></script>
	<!-- plugins JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/plugins.js"></script>
	<!-- main JS
		============================================ -->
	<script src="<?php echo base_url() ?>assets/login/js/main.js"></script>
</body>

</html>