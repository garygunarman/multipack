<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Multipack SP | Account | Login</title>
        <meta name="keywords" content="paper bag, paper, bag" />
		<meta name="description" content="description content" />
        <!--[if lt IE 9]>
			<script src="<?php echo $prefix;?>js/html5shiv.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="<?php echo $prefix;?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/main.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/fonts.css">
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>
        <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-34651190-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
		
		<div class="container clearfix">

			<?php include('../../static/nav.php') ?>

			<div class="main">

				<?php include('../../static/main_header.php') ?>

				<div class="maincontent clearfix">

					<div class="breadcrumbs">
						<a href="<?php echo $prefix;?>index.php">Home</a>
						<span>/</span>
						<a href="<?php echo $prefix;?>account">Account</a>
						<span>/</span>
						<a class="selected">Login</a>
					</div>

					<div class="ordercontent">

						<form action="<?php echo $prefix;?>order/shipping" method="POST">
						<div id="login">
							<div id="loginhead" class="head">LOGIN</div>
							<div class="alert-message success">
							     Message goes here.
							</div>
							<div id="logincontent" class="content">
								<fieldset>
									<div>
										<label for="username">Email Address</label>
										<input type="text" name="username" id="username" autocomplete="off">
									</div>
									<div>
										<label for="password">Password</label>
										<input type="password" name="password" id="password" autocomplete="off">
									</div>
									<div id="forgotpassword" class="clearfix"><a href="" class="clearfix">Forgot password?</a></div>
									<button class="button" type="submit">LOGIN</button>
								</fieldset>
							</div>
						</div> <!-- login -->
						</form>

						<form action="<?php echo $prefix;?>/order/shipping" method="POST">
						<div id="register">
							<div id="registerhead" class="head">REGISTER</div>
							<div class="alert-message success">
							     Message goes here.
							</div>
							<div id="registercontent" class="content">
								<fieldset>
									<div>
										<label for="firstname">First Name <sup>*</sup></label>
										<input type="text" name="register[firstname]" id="firstname">
									</div>
									<div>
										<label for="lastname">Last Name <sup>*</sup></label>
										<input type="text" name="register[lastname]" id="lastname">
									</div>
									<div>
										<label for="email_r">Email Address <sup>*</sup></label>
										<input type="text" name="register[email]" id="email_r" autocomplete="off">
									</div>
									<div>
										<label for="password_r">Password <sup>*</sup></label>
										<input type="password" name="register[password]" id="password_r" autocomplete="off">
									</div>
									<div>
										<label for="password_c_r">Retype Password <sup>*</sup></label>
										<input type="password" name="register[password_confirm]" id="password_c_r" autocomplete="off">
									</div>
									<div id="newsletter">
										<label for="newsletter">NEWSLETTER</label>
										<input value="on" type="checkbox" name="register[newsletter]" id="newsletter">
										<div style="font-size: 11px; padding-top: 6px; padding-left: 165px">Subscribe to Multipack SP email updates</div>
									</div>
									<button class="button" type="submit">REGISTER</button>
								</fieldset>
							</div>
						</div> <!-- register -->
						</form>

					</div> <!-- order-content -->

				</div> <!-- maincontent -->

				<?php include('../../static/footer.php') ?>

			</div> <!-- main -->

		</div> <!-- container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>

