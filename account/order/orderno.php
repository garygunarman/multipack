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
						<a href="<?php echo $prefix;?>account/order">Order History</a>
						<span>/</span>
						<a class="selected">MUL0109001</a>
					</div>

					<div class="ordercontent">

						<div id="review">

							<div id="reviewbag">
								<div id="reviewbaghead" class="head clearfix">
									<div>SHOPPING BAG</div>
								</div> <!-- bag-head -->

								<div id="bagitem" class="clearfix">
									<div class="bagdetails">
										<img class="bagimage" src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
										<div class="bagdesc">
											<div class="bagname">Multipack Paper Bag</div>
											<div class="bagcolor">Black</div>
											<div class="bagsize">60cm x 30cm</div>
										</div>
									</div> <!-- bagdetails -->
									<div class="bagprice">
										<div class="currency">IDR</div>
										<div class="price">200.000</div>
									</div>
									<div class="bagqty">1</div>
								</div> <!-- bagitem -->

								<div id="bagitem" class="clearfix">
									<div class="bagdetails">
										<img class="bagimage" src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
										<div class="bagdesc">
											<div class="bagname">Multipack Paper Bag</div>
											<div class="bagcolor">Black</div>
											<div class="bagsize">60cm x 30cm</div>
										</div>
									</div> <!-- bagdetails -->
									<div class="bagprice">
										<div class="currency">IDR</div>
										<div class="price">200.000</div>
									</div>
									<div class="bagqty">1</div>
								</div> <!-- bagitem -->

							</div> <!-- reviewbag -->

							<div id="reviewdetails" style="margin-top:40px">
								<div id="reviewdetailshead" class="head clearfix">
									<div>DETAILS</div>
								</div> <!-- bag-head -->

								<div id="deliveryaddress">
							
									<div id="deliveryaddresscontent" class="content">
										<fieldset id="addressreview">
											<div>
												<label for="firstname">First Name</label>
												<p>John</p>
											</div>
											<div>
												<label for="lastname">Last Name</label>
												<p>Doe</p>
											</div>
											<div>
												<label for="telephone">Telephone</label>
												<p>021 531 24123</p>
											</div>
											<div>
												<label for="address">Address</label>
												<p>Address</p>
											</div>
											<div>
												<label for="address" class="invisible">Address <sup>*</sup></label>
												<p>Address</p>
											</div>
											<div class="field">
												<label for="country">Country</label>
												<p>Indonesia</p>
											</div>
											<div class="field">
												<label for="province">Province</label>
												<p>Province</p>
											</div>
											<div>
												<label for="city">City</label>
												<p>City</p>
											</div>
											<div>
												<label for="postal">Postal Code</label>
												<p>12345</p>
											</div>
											
										</fieldset>
									</div>
								</div> <!-- login -->

							</div> <!-- deliveryaddress -->

							<div id="reviewdetails" style="margin-top:40px">
								<div id="reviewdetailshead" class="head clearfix">
									<div>SHIPPING</div>
								</div> <!-- bag-head -->
								<div>
									<div class="content">
										<fieldset id="addressreview">
											<div>
												<label for="firstname">SHIPPING METHOD</label>
												<p>JNE Regular</p>
											</div>
										</fieldset>
									</div>
								</div> <!-- login -->
							</div> <!-- reviewdetails -->

							<div id="reviewdetails" style="margin-top:40px">
								<div id="reviewdetailshead" class="head clearfix">
									<div>PAYMENT</div>
								</div> <!-- bag-head -->
								<div>
									<div class="content">
										<fieldset id="addressreview">
											<div>
												<label for="firstname">PAYMENT METHOD</label>
												<p>BCA Transfer</p>
											</div>
										</fieldset>
									</div>
								</div> <!-- login -->
							</div> <!-- reviewdetails -->

						</div> <!-- review -->

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

