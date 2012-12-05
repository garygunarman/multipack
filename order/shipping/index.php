<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Multipack SP | Order | Shipping</title>
        <meta name="keywords" content="paper bag, paper, bag" />
		<meta name="description" content="description content" />
        <!--[if lt IE 9]>
			<script src="<?php echo $prefix;?>js/html5shiv.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="<?php echo $prefix;?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/main.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/fonts.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/order.css">
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

					<div class="progress clearfix">
						<div>Shopping Bag</div>
						<div>Your Details</div>
						<div class="current">Shipping</div>
						<div>Payment</div>
						<div>Review</div>
					</div>

					<div class="ordercontent">

						<form action="<?php echo $prefix;?>order/payment" method="POST">
						<div id="shipping">
							<div id="shippinghead" class="head">SHIPPING METHOD</div>
							<div id="shippingcontent" class="content">
								<fieldset>
									<div class="field">
										<label for="shippingmethod1">SHIPPING METHOD</label>
											<input type="radio" name="shippingmethod" id="shippingmethod1" checked="checked">
											<div class="cap">
												<div class="capline1">JNE Regular <span class="ccc">/</span> IDR 9.000</div>
												<div class="capline2">2 - 4 days working days</div>
											</div>
									</div>
									<div class="field">
										<label class="invisible" for="shippingmethod2">SHIPPING METHOD</label>
											<input type="radio" name="shippingmethod" id="shippingmethod2">
											<div class="cap">
												<div class="capline1">JNE Express <span class="greyccc">/</span> IDR 12.000</div>
												<div class="capline2">1 - 2 days working days</div>
											</div>
									</div>
									<div class="field">
										<button class="button" type="submit">NEXT</button>
										<a class="button light" href="<?php echo $prefix;?>order/details">BACK</a>
									</div>
								</fieldset>
							</div> <!-- shippingcontent -->
						</div> <!-- shipping -->
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

