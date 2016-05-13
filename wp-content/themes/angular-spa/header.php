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
<header class="container header">
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

</header>





<!--  -->
<!--  -->
<main class="columns large-12 no-padding">








	 <div class="columns large-12 difference">
		<div class="columns large-8 large-centered">
			<p>The Paramount promise is to provide you with the right loan at the best rate on a personal level. Our experts will help you bring your dreams home.</p>
			<span class="question">Are you looking to refinance your home?</span>
			<a class="button" href=""> <i></i> Lower your  payment</a>
			<a class="button" href=""> <i></i> Take Cash out</a>
			<a class="button" href=""> <i></i> Convert to short term</a>
		</div>
	</div>



	<div class="columns large-12 approach no-padding">
		<div class="columns large-5 no-padding">
			<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/approach-couple.jpg" alt="Happy couple gazing out into the distance">
		</div>
		<div class="columns large-7">
			<h2>Forward thinking begins here</h2>
			<p>Whether you’re a first time home buyer, refinancing a loan, or consolidating debt, Paramount can bring your dreams home. You'll find our loan process to be friendly, fully transparent, and forward thinking:</p>
			<div class="columns large-4 no-padding">
				<span class="header">We Put People First</span>
				<p>While other firms let their technology do the talking, we always put people first. That means we'll work with you one-on-one, through every step of the loan process, to provide peace of mind. </p>
			</div>
			<div class="columns large-4 no-padding">
				<span class="header">No Upfront Lender Fees</span>
				<p>We underwrite loans up front and don't charge lender fees, so you'll never have any unpleasant surprises. You'll know that you’re approved and exactly what we need from the beginning.</p>
			</div>
			<div class="columns large-4 no-padding">
				<span class="header">Lasting Relationships</span>
				<p>We know circumstances change and dreams evolve, so we work to build lifelong relationships. We hope to be your first choice for your next mortgage or refinance.</p>
			</div>
			<div class="row expanded">
				<div class="columns large-12">
					<a href="#" class="button refinance-btn">Refinance now</a>
				</div>
			</div>

		</div>
	</div>

	<div class="columns large-12 testimonials">
		<div class="large-5 large-centered">
			<div class="testimonials-slider">
				<div>
					<span class="header">
					Building Relationships since 2003
					</span>
					<p>Working with Stephanie was great, fantastic, excellent… She was knowledgeable, responsive, helped accomplish what was needed, and then some. She was easy to talk to, built a good rapport. Out of a rating of 5 would rate her 6.”</p>
					<span class="from">The Marshall Family</span>
					<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/trust-pilot.png" alt="">
				</div>
				<div>
					<span class="header">
					Building Relationships since 2003
					</span>
					<p>Working with Stephanie was great, fantastic, excellent… She was knowledgeable, responsive, helped accomplish what was needed, and then some. She was easy to talk to, built a good rapport. Out of a rating of 5 would rate her 6.”</p>
					<span class="from">The Marshall Family</span>
					<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/trust-pilot.png" alt="">
				</div>
			</div>
		</div>
	</div>





