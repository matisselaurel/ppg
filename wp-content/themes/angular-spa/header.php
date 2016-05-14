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
    <!--[if lt IE 9]>
	    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <base href="/">
</head>
<body <?php body_class(); ?>>

<header class="container header" id="header" data-sticky-container>
	<div id="stickhere"></div>
<div class=" title-bar columns large-12" data-anchor="header" data-sticky data-options="anchore: stickhere; marginTop:0;" style="width:100%" data-top-anchor="1" data-btm-anchor="content:bottom">


	<!-- <img src="<?php bloginfo('template_url'); ?>/images/home-banner.jpg" alt=""> -->
	<div class="row">
		<div class="columns large-12">
			<?php layerslider(1, 'homepage'); ?>
		</div>

	</div>
	<div class="columns large-12 top">
		<div class="columns large-4 logo">
			<a ui-sref="pagedetail({id: <?php echo get_option('page_on_front'); ?>})" class="logo-link"> <i class="icon-paramount-icon-logo"></i> <i class="icon-logo"></i> </a>
			<a class="header-num" href="tel:8553335336"> <i class="icon-phone"></i> (855) 333-5336</a>
		</div>


			<?php





				$defaults = array(
					'theme_location'  => '',
					'menu'            => 'Main Menu',
					'container'       => 'nav',
					'container_class' => 'columns large-8 no-padding',
					'container_id'    => '',
					'menu_class'      => 'dropdown menu no-bullet',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
					'depth'           => 0,
					'walker' => new Foundation_Walker_Nav_Menu
				);

			 wp_nav_menu( $defaults );

			?>

	</div>

	<!-- <div class="slick-slide">
		<h1>Thinking Forward To <br> Make You Feel at Home</h1>
		<a class="button" href="">Our Mission</a>
	</div> -->
	</div>
</header>





<!--  -->
<!--  -->
<main class="columns large-12 no-padding">












