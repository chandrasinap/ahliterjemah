<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
	<title><?php echo$meta_title?></title>
    <meta name=description content="<?php echo $meta_desc?>">
    <meta name=keywords content="<?php echo $meta_keyw?>">
	<meta name=viewport content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/')?>images/favicon.png" rel="icon"/>
    <link href="<?= base_url('assets/')?>libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    <linK href="<?= base_url('assets/')?>libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <linK href="<?= base_url('assets/')?>libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
	<link href="<?= base_url('assets/')?>libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="<?= base_url('assets/')?>libraries/fonts/elegant/elegant-icon.css" rel="stylesheet"/>
	<link href="<?= base_url('assets/')?>libraries/animate/animate.min.css" rel="stylesheet"/>
	<link href="<?= base_url('assets/')?>libraries/lightbox2/css/lightbox.css" rel="stylesheet"/>

	<link href="<?= base_url('assets/')?>libraries/video/YTPlayer.css" rel="stylesheet"/>

    <link href="<?= base_url('assets/')?>css/components.css" rel="stylesheet"/>
	<link href="<?= base_url('assets/')?>css/header.css" rel="stylesheet"/>
	<link href="<?= base_url('assets/')?>css/style.css" rel="stylesheet"/>
	<!--link id="color" href="css/color-schemes/default.css" rel="stylesheet"/-->
    <link href="<?= base_url('assets/')?>css/media.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?= base_url('assets/')?>js/html5/html5shiv.min.js"></script>
      <script src="<?= base_url('assets/')?>js/html5/respond.min.js"></script>
    <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<a id="top"></a>
	
    <?php echo $header?>
	<?php echo $content?>
    
	<!-- jQuery Include -->
	<script src="<?= base_url('assets/')?>libraries/jquery.min.js"></script>	
	<script src="<?= base_url('assets/')?>libraries/modernizr/modernizr.custom.13711.js"></script>
	<script src="<?= base_url('assets/')?>libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->

	<script src="<?= base_url('assets/')?>libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.2.0 -->
	<script src="<?= base_url('assets/')?>libraries/bootstrap/ie-emulation-modes-warning.js"></script> <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<script src="<?= base_url('assets/')?>libraries/bootstrap/ie10-viewport-bug-workaround.js"></script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!-- Font Elegant -->
		<!--[if lte IE 7]><script src="<?= base_url('assets/')?>libraries/fonts/elegant/lte-ie7.js"></script><![endif]-->
	
	<script src="<?= base_url('assets/')?>libraries/portfolio-filter/jquery.quicksand.js"></script> <!-- Quicksand v1.4 -->
	<script src="<?= base_url('assets/')?>libraries/jquery.superslides.min.js"></script> <!-- Superslides - v0.6.3-wip -->

	<script src="<?= base_url('assets/')?>libraries/roundabout.js"></script> <!-- service Rounded slider -->
	<script src="<?= base_url('assets/')?>libraries/roundabout_shapes.js"></script> <!-- service Rounded slider -->
	
	<script src="<?= base_url('assets/')?>libraries/jquery.animateNumber.min.js"></script> <!-- Used for Animated Numbers -->
	<script src="<?= base_url('assets/')?>libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
	<script src="<?= base_url('assets/')?>libraries/jquery.knob.js"></script> <!-- Used for Loading Circle -->
	
	<script src="<?= base_url('assets/')?>libraries/wow.min.js"></script>
	
	<script src="<?= base_url('assets/')?>libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="<?= base_url('assets/')?>libraries/video/jquery.mb.YTPlayer.js"></script>

	<script src="<?= base_url('assets/')?>libraries/lightbox2/js/lightbox.min.js"></script>
	
	<!-- Customized Scripts -->
	<script src="<?= base_url('assets/')?>js/functions.js"></script>

	
</body>
</html>
