<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Multipack SP | Account | Edit Shipping Details</title>
        <meta name="keywords" content="paper bag, paper, bag" />
		<meta name="description" content="description content" />
        <!--[if lt IE 9]>
			<script src="<?php echo $prefix;?>js/html5shiv.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="<?php echo $prefix;?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/main.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/order.css">
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
						<a class="selected">Edit Shipping Details</a>
					</div>

					<div class="ordercontent">

						<form action="<?php echo $prefix;?>/order/shipping" method="POST">
						<div id="deliveryaddress">
							<div id="deliveryaddresshead" class="head">SHIPPING DETAILS</div>
							<div class="alert-message success">
							     Message goes here.
							</div>
							<div id="deliveryaddresscontent" class="content">
								<fieldset>
									<div>
										<label for="firstname">First Name <sup>*</sup></label>
										<input type="text" name="firstname" id="firstname">
									</div>
									<div>
										<label for="lastname">Last Name <sup>*</sup></label>
										<input type="text" name="lastname" id="lastname">
									</div>
									<div>
										<label for="telephone">Telephone <sup>*</sup></label>
										<input type="text" name="telephone" id="telephone">
									</div>
									<div>
										<label for="address">Address <sup>*</sup></label>
										<textarea rows="3" name="address" id="address"></textarea>
									</div>
									<div class="field">
										<label for="country">Country <sup>*</sup></label>
										<select name="country" id="country">
											<option value="Indonesia" selected="selected">Indonesia</option>
										</select>
									</div>
									<div class="field">
										<label for="province">Province <sup>*</sup></label>
										<select name="province" id="province">
											<option value="DKI Jakarta" selected="selected">DKI Jakarta</option>
										</select>
									</div>
									<div>
										<label for="city">City <sup>*</sup></label>
										<input type="text" name="city" id="city">
									</div>
									<div>
										<label for="postal">Postal Code <sup>*</sup></label>
										<input type="text" name="postal" id="postal">
									</div>
									<div class="field">
										<button class="button" type="submit">SAVE CHANGES</button>
										<a class="button light" href="<?php echo $prefix;?>order/bag">BACK</a>
									</div>
								</fieldset>
							</div>
						</div> <!-- login -->
						</form>

					</div> <!-- ordercontent -->

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

