<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Multipack SP | Confirm Payment</title>
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

			<?php include('../static/nav.php') ?>

			<div class="main">

				<?php include('../static/main_header.php') ?>

				<div class="maincontent clearfix">

					<div class="breadcrumbs">
						<a href="<?php echo $prefix;?>index.php">Home</a>
						<span>/</span>
						<a class="selected">Confirm Payment</a>
					</div>

					<div class="ordercontent">

						<form action="<?php echo $prefix;?>order/shipping" method="POST">
						<div id="confirm">
							<div id="" class="head">CONFIRM PAYMENT</div>
							<div class="alert-message success">
							     Message goes here.
							</div>
							<div id="" class="content">
								<fieldset>
									<div>
										<label for="orderno">Order No.</label>
										<input type="text" name="orderno" id="orderno">
									</div>
									<div>
										<label for="bank">Bank</label>
										<input type="text" name="bank" id="bank" placeholder="BCA / Mandiri">
									</div>
									<div>
										<label for="accountname">Bank Account Name</label>
										<input type="text" name="accountname" id="accountname">
									</div>
									<div>
										<label for="amount">Amount</label>
										<input type="text" name="amount" id="amount" placeholder="IDR">
									</div>
									<button class="button" type="submit" style="float: right">CONFIRM</button>
								</fieldset>
							</div>
						</div> <!-- login -->
						</form>

					</div> <!-- order-content -->

				</div> <!-- maincontent -->

				<?php include('../static/footer.php') ?>

			</div> <!-- main -->

		</div> <!-- container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>

