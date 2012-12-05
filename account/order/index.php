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
						<a class="selected">Order History</a>
					</div>

					<div class="generalcontent">

						<div>
							<div id="" class="head">ORDER HISTORY</div>
							<table class="orderhistory">
								<thead>
									<tr>
										<td width="6%">No.</td>
										<td width="18%">Date</td>
										<td width="15%">Order No.</td>
										<td width="23%">Status</td>
										<td width="18%">Amount</td>
										<td width="30%">Shipping No.</td>
									</tr>
								</thead>
								<tbody class="">
									<tr>
										<td>1</td>
										<td>November 25, 2012</td>
										<td class="orderno"><a href="<?php echo $prefix;?>account/order/orderno.php">MUL1020BLK</a></td>
										<td class="status delivered">Delivered</td>
										<td>IDR 250.000</td>
										<td>JNE 102394 123459</td>
									</tr>
									<tr>
										<td>2</td>
										<td>November 12, 2012</td>
										<td class="orderno"><a href="<?php echo $prefix;?>account/order/orderno.php">MUL1020BLK</a></td>
										<td class="status confirmed">Confirmation Received</td>
										<td>IDR 250.000</td>
										<td>JNE 102394 123459</td>
									</tr>
									<tr>
										<td>3</td>
										<td>June 9, 2012</td>
										<td class="orderno"><a href="<?php echo $prefix;?>account/order/orderno.php">MUL1020BLK</a></td>
										<td class="status payment">Waiting for Payment</td>
										<td>IDR 250.000</td>
										<td>JNE 102394 123459</td>
									</tr>
									<tr>
										<td>4</td>
										<td>January 8, 2012</td>
										<td class="orderno"><a href="<?php echo $prefix;?>account/order/orderno.php">MUL1020BLK</a></td>
										<td class="status processed">Processed</td>
										<td>IDR 250.000</td>
										<td>JNE 102394 123459</td>
									</tr>
								</tbody>
							</table>
							<div class="noorder hidden">
								You currently don't have any orders.
							</div>
						</div>

					</div> <!-- general-content -->

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

