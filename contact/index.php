<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php $prefix="../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Multipack SP | Contact</title>
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
						<a class="selected">Contact</a>
					</div>

					<div class="generalcontent">

						<div>
							<div id="" class="head">CONTACT MULTIPACK SP</div>
							<div class="alert-message success">
								     Message goes here.
								</div>
							<p>Lorem ipsum dolor siamet. Lorem ipsum dolor siamet. Lorem ipsum dolor siamet. Lorem ipsum dolor siamet.<p>
							<form action="<?php echo $prefix;?>order/shipping" method="POST">
							<div id="login">
								
								<div id="logincontent" class="content">
									<fieldset>
										<div>
											<label for="name">Name</label>
											<input type="text" name="name" id="name">
										</div>
										<div>
											<label for="email">Email Address</label>
											<input type="text" name="email" id="email">
										</div>
										<div>
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject">
										</div>
										<div>
											<label for="content">Content</label>
											<textarea rows="3" name="content" id="content"></textarea>
										</div>
										<button class="button" type="submit">SUBMIT</button>
									</fieldset>
								</div>
							</div> <!-- login -->
						</form>
						</div>

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

