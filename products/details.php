<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../";?>
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
        <link rel="stylesheet" href="<?php echo $prefix;?>css/products.css">
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
						<a href="<?php echo $prefix;?>products">Send Bags</a>
						<span>/</span>
						<a class="selected" href="">300 Watch Series</a>
					</div>

					<div class="left clearfix">
						<div class="image">
							<img src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="450" height="450" />
						</div>
						<div class="thumbnails">
							<img class="selected" src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
							<img src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
							<img src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
							<img src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
							<img style="margin-right:0px;" src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="82" height="82" />
						</div>
					</div> <!-- left -->

					<div class="right clearfix">
						<div class="info clearfix">
							<h1>300 Series Watch </h1>
							<hr />
							<div class="price">IDR 200.000</div>
							<div class="description">
								<div class="header">DESCRIPTION</div>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							</div> <!-- description -->
							<div class="specification">
								<div class="header">SPECIFICATION</div>
								<div class="text">30cm x 30cm x 50cm</div>
							</div>
							<div class="colors">
								<div class="header">AVAILABLE COLORS</div>
								<div class="color-images">
									<img class="selected" src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="40" height="40" />
									<img src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="40" height="40" />
									<img src="<?php echo $prefix;?>files/uploads/products/img_big.jpg" width="40" height="40" />
								</div>
							</div> <!-- colors -->
						</div> <!-- info -->
						
						<a class="button" href="<?php echo $prefix;?>order/bag">ADD TO BAG</a>

					</div> <!-- right -->

				</div> <!-- content -->

				<?php include('../static/footer.php') ?>

			</div> <!-- main -->

		</div> <!-- container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>

