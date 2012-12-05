<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Multipack SP | Products</title>
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
						<div class="current">Shopping Bag</div>
						<div>Your Details</div>
						<div>Shipping</div>
						<div>Payment</div>
						<div>Review</div>
					</div>

					<div class="ordercontent">

						<form action="<?php echo $prefix;?>order/login" method="POST">

						<div id="baghead" class="head clearfix">
							<div class="bagdetails">ITEMS</div>
							<div class="bagqty">QTY.</div>
							<div class="bagprice">PRICE</div>
							<div class="bagremove">REMOVE</div>
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
							<div class="bagqty">
								<select class="qty">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</div>
							<div class="bagprice">
								<div class="currency">IDR</div>
								<div class="price">200.000</div>
							</div>
							<div class="bagremove"><a href="">Remove</a></div>
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
							<div class="bagqty">
								<select class="qty">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</div>
							<div class="bagprice">
								<div class="currency">IDR</div>
								<div class="price">200.000</div>
							</div>
							<div class="bagremove"><a href="">Remove</a></div>
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
							<div class="bagqty">
								<select class="qty">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</div>
							<div class="bagprice">
								<div class="currency">IDR</div>
								<div class="price">200.000</div>
							</div>
							<div class="bagremove"><a href="">Remove</a></div>
						</div> <!-- bagitem -->

						<div class="bagtotalrow clearfix">
							<div class="bagtotallabel">SUBTOTAL</div>
							<div class="bagtotal">
								<div class="currency">IDR</div>
								<div class="price">200.000</div>
							</div>
							<div class="bagtotalinfo">(exclude shipping cost)</div>
						</div> <!-- bagtotalrow -->

						<div id="discount" class="bagtotalrow clearfix hidden">
							<div class="bagtotallabel">DISCOUNT</div>
							<div class="bagtotal">
								<div class="currency">IDR</div>
								<div class="price">50.000</div>
							</div>
							<div class="bagtotalinfo invisible">(exclude shipping cost)</div>
						</div> <!-- discount -->

						<div class="bagbuttonrow clearfix">
						<button class="button" type="submit">CHECKOUT</button>
						<a class="button light" href="">BACK TO SHOP</a>
					</div>

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

