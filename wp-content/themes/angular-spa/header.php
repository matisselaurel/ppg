<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="wpAngularTheme">
<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  	<meta name="author" content="Ciplex">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link rel="shortcut icon" href="/favicon.ico">
  	<link rel="apple-touch-icon" href="/favicon.png">
   	<?php wp_head();?>
   	<script type="text/javascript">
   		var homeID = '<?php echo get_option('page_on_front'); ?>';
   	</script>

    <!--[if lt IE 9]>
	    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <base href="/">
</head>
<body <?php body_class(); ?>>

<header class="header" id="header">




	<!-- <img src="<?php bloginfo('template_url'); ?>/images/home-banner.jpg" alt=""> -->
	<div class="row">
		<div class="columns large-12">
			<?php layerslider(1, 'homepage'); ?>
		</div>

	</div>
	<div data-sticky-container id="stickyheader">

			<div class="sticky columns large-12" data-sticky data-margin-top="0">
				<div class="columns large-12 top">
					<div class="columns large-4 logo">
						<!-- <a ui-sref="pagedetail({id: <?php echo get_option('page_on_front'); ?>})" class="logo-link"> <i class="icon-paramount-icon-logo"></i> <i class="icon-logo"></i> </a> -->
						<a ui-sref="home()" class="logo-link"> <i class="icon-paramount-icon-logo"></i> <i class="icon-logo"></i> </a>
						<a class="header-num" href="tel:8553335336"> <i class="icon-phone"></i> (855) 333-5336</a>
					</div>


						<?php
							global $headerNavOptions;
						 	wp_nav_menu( $headerNavOptions );
						?>

				</div>
			</div>

	</div>

	<!-- <div class="slick-slide">
		<h1>Thinking Forward To <br> Make You Feel at Home</h1>
		<a class="button" href="">Our Mission</a>
	</div> -->

</header>





<!--  -->
<!--  -->
<main class="columns large-12 no-padding content-">












