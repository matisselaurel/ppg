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
<body <?php body_class('hide'); ?>>
<div class="reveal hide-for-large" id="exampleModal9" data-reveal data-overlay="false" data-v-offset="110">



<ul class="vertical menu" data-accordion-menu>
  <li><a href="#/pages/43" ui-sref="pagedetail({id: 43})">APPLY NOW</a></li>
  <li>
    <a href="#/pages/10" ui-sref="pagedetail({id: 10})">WHO WE ARE</a>
    <ul class="menu vertical nested">
      <li><a href="#/pages/81" ui-sref="pagedetail({id: 81})">OUR COMPANY</a></li>
      <li><a href="#/pages/29" ui-sref="pagedetail({id: 29})">OUR PEOPLE</a></li>
      <li><a href="#/pages/32" ui-sref="pagedetail({id: 32})">TESTIMONIALS</a></li>
      <li><a href="#/pages/33" ui-sref="pagedetail({id: 33})">OUR PLEDGE</a></li>
      <li><a href="#/pages/37" ui-sref="pagedetail({id: 37})">CAREERS</a></li>
    </ul>
  </li>

  <li><a href="#/pages/54" ui-sref="pagedetail({id: 54})">BUYING A HOME</a></li>
  <li><a href="#/pages/40" ui-sref="pagedetail({id: 40})">REFINANCING</a></li>
  <li><a href="#/pages/41" ui-sref="pagedetail({id: 41})">FORWARD THINKING</a></li>
  <li><a href="#/pages/42" ui-sref="pagedetail({id: 42})">CONTACT US</a></li>

</ul>



<?php
	// global $mobileHeaderNavOptions;
	// wp_nav_menu( $mobileHeaderNavOptions );
?>

</div>


<header class="header" id="header">




	<!-- <img src="<?php bloginfo('template_url'); ?>/images/home-banner.jpg" alt=""> -->
	<div class="row">
		<div class="columns large-12 ">
			<?php layerslider(1, 'homepage'); ?>
		</div>

	</div>
	<div data-sticky-container id="stickyheader">

			<div class="sticky columns large-12 medium-12 small-12 no-padding" data-sticky data-margin-top="0"data-options="sticky_on: small">
				<div class="columns large-12 top no-padding">
					<div class="columns large-5 medium-10 small-10 logo">
						<a ui-sref="home()" class="logo-link"> <i class="icon-paramount-icon-logo"></i> <i class="icon-logo"></i> </a>
						<a class="header-num show-for-large" href="tel:8553335336"> <i class="icon-phone"></i> (855) 333-5336</a>
					</div>

						<?php
							global $headerNavOptions;
						 	wp_nav_menu( $headerNavOptions );
						?>

					<div class="hide-for-large columns medium-2 small-2" data-sticky-container>
						<div id="header-bar" data-sticky  data-sticky-on="small">
							<div class="title-bar" data-responsive-toggle="exampleModal9" data-hide-for="large">
								<button id="mobileNavHam" class="fa-bars fa" type="button" data-toggle></button>
								<div class="title-bar-title"></div>
							</div>

						</div>
					</div>

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












