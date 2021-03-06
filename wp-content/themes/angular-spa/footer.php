
<!-- <dv class="columns large-12 testimonials">
	<div class="large-5 large-centered">
		<div class="testimonials-slider">
			 <div>
				<span class="header">
				Building Relationships since 2003
				</span>
				<p>Working with Stephanie was great, fantastic, excellent… She was knowledgeable, responsive, helped accomplish what was needed, and then some. She was easy to talk to, built a good rapport. Out of a rating of 5 would rate her 6.”</p>
				<span class="from">The Marshall Family</span>
				<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/trust-pilot.png" alt="">
			</div> -->
			<!-- <div>
				<span class="header">
				Building Relationships since 2003
				</span>
				<p>Working with Stephanie was great, fantastic, excellent… She was knowledgeable, responsive, helped accomplish what was needed, and then some. She was easy to talk to, built a good rapport. Out of a rating of 5 would rate her 6.”</p>
				<span class="from">The Marshall Family</span>
				<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/trust-pilot.png" alt="">
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="columns large-12 customer-service no-padding">

		<h3>We work to build<br> lifelong relationships.</h3>
		<p>We know that circumstances change and dreams evolve, and we want to be there for you when they do. </p>
		<a href="" class="button">Our values</a>

		<div class="columns large-12 stats">
			<div class="columns large-7 large-centered">
				<ul class="no-bullet">
					<li>
						<span class="num ">$<span class="odometer loans">0</span> Billion</span>
						<i></i>
						<p>Loans Funded</p>
					</li>
					<li>
						<span class="num "><span class="odometer clients">0 </span>+</span>
						<i></i>
						<p>Happy clients</p>
					</li>
					<li>
						<span class="num "><span class="odometer employees">0</span></span>
						<i></i>
						<p>Employees</p>
					</li>
					<li>
						<span class="num "><span class="odometer states">0</span></span>
						<i></i>
						<p>States Licensed</p>
					</li>
				</ul>
			</div>
		</div>
		<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/customer-service.jpg" alt="">
	</div> -->
<!-- <div class="columns large-12 approach no-padding">
		<div class="columns large-5 no-padding">
			<img src="http://dev.ppg.local/wp-content/themes/angular-spa/images/approach-couple.jpg" alt="Happy couple gazing out into the distance">
		</div>
		<div class="columns large-7">
			<h2>Forward thinking begins here</h2>
			<p>Whether you’re a first time home buyer, refinancing a loan, or consolidating debt, Paramount can bring your dreams home. You'll find our loan process to be friendly, fully transparent, and forward thinking:</p>
			<div class="columns large-4 no-padding">
				<div class="icon-wrapper">
					<i class="icon-people-icon"></i>
				</div>
				<div class="content-wrapper">
					<span class="header">We Put People First</span>
					<p>While other firms let their technology do the talking, we always put people first. That means we'll work with you one-on-one, through every step of the loan process, to provide peace of mind. </p>
				</div>
			</div>
			<div class="columns large-4 no-padding">
				<div class="icon-wrapper">
					<i class="icon-money-icon"></i>
				</div>
				<div class="content-wrapper">
					<span class="header">No Upfront Lender Fees</span>
					<p>We underwrite loans up front and don't charge lender fees, so you'll never have any unpleasant surprises. You'll know that you’re approved and exactly what we need from the beginning.</p>
				</div>
			</div>
			<div class="columns large-4 no-padding">
				<div class="icon-wrapper">
					<i class="icon-heart-icon"></i>
				</div>
				<div class="content-wrapper">
					<span class="header">Lasting Relationships</span>
					<p>We know circumstances change and dreams evolve, so we work to build lifelong relationships. We hope to be your first choice for your next mortgage or refinance.</p>
				</div>
			</div>
			<div class="row expanded">
				<div class="columns large-12">
					<a href="#" class="button refinance-btn"> <i class="icon-btn-icon"></i> Refinance now</a>
				</div>
			</div>

		</div>
	</div> -->


		</main><!-- END FLUID CONTAINER -->



<div class="columns large-12 blog">
		<span class="header">Forward Thinking Articles</span>

		<?php query_posts( 'category_name=forward-thinking&posts_per_page=10' ); ?>
			<div class="forward-thinking-slider large-9 columns large-centered">
				<?php while ( have_posts() ) : the_post(); ?>
					<div>
						<div class="columns large-5">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="columns large-7">
							<a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a>
							<?php  the_excerpt(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
	</div>
<div class="columns large-12 expert">
	<a href="">Speak to an Expert</a> <span>or Call us at</span> <a href="">(877) 290-9991</a>
</div>
<div class="columns large-12 logos">
<ul class="no-bullets">
	<li><img src="<?php bloginfo('template_directory') ?>/images/badge-equal-housing.jpg" alt=""></li>
	<li><img src="<?php bloginfo('template_directory') ?>/images/badge-trustpilot.png" alt=""></li>
	<li><img src="<?php bloginfo('template_directory') ?>/images/badge-bbb.jpg" alt=""></li>
	<li><img src="<?php bloginfo('template_directory') ?>/images/badge-pbj.jpg" alt=""></li>
</ul>
</div>
		<footer class="footer columns large-12 no-padding">
			<div class="footer-main">
				<div class="row">
					<div class="columns large-3 contact-info">
						<!-- <div class="glyph fs1">
					            <div class="clearfix bshadow0 pbs">
					                <span class="icon-paramount-icon-logoblue">
					                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span>
					                </span>

					            </div>


					        </div> -->
					        <img src="<?php bloginfo('template_directory') ?>/images/logo-footer.png" alt="">
						<span class="contact-header">CONTACT US</span>
						<span class="phone"><span> <i class="icon-direct-office-icon"></i> Direct:</span> 916.290.9999</span>
						<span class="phone"><span> <i class="icon-toll-free-phone-icon"></i> Toll Free:</span> 877.290.9991</span>
						<span class="address">8781 Sierra College Blvd. Roseville, CA 95661</span>
						<a href="mailto:corporate@paramountequity.com">corporate@paramountequity.com</a>

					</div>
					<div class="columns large-9 footer-links">
						<div class="columns large-3">
							<span>Who we are</span>
							<ul class="no-bullet">
								<li><a href="">Our Company</a></li>
								<li><a href="">Our people</a></li>
								<li><a href="">Paramount cares</a></li>
								<li><a href="">Testimonials</a></li>
								<li><a href="">Our pledge</a></li>
								<li><a href="">Careers</a></li>
							</ul>
						</div>
						<div class="columns large-3">
							<span>Buying a home</span>
							<ul class="no-bullet">
								<li><a href="">Loan options</a></li>
								<li><a href="">Calculations</a></li>
								<li><a href="">FAQ</a></li>
								<li><a href="">Glossary</a></li>
							</ul>
						</div>
						<div class="columns large-3">
							<span>Refinancing</span>
							<ul class="no-bullet">
								<li><a href="">Loan options</a></li>
								<li><a href="">Calculations</a></li>
								<li><a href="">FAQ</a></li>
								<li><a href="">Glossary</a></li>
							</ul>
						</div>
						<div class="columns large-3">
							<span>Forward thinking</span>
							<ul class="no-bullet">
								<li><a href="">Company news</a></li>
								<li><a href="">Consumer stories</a></li>
								<li><a href="">Community</a></li>
								<li><a href="">Advice & Tips</a></li>
							</ul>
							<a href="" class="button">Apply now</a>
							<a href="" class="button">Make a payment</a>
						</div>
					</div>
				</div>
			</div>
			<div class="legal-links">
				<div class="row">

<?php
			global $legalNavOptions;
			 wp_nav_menu( $legalNavOptions );
?>
				<div class="columns large-3 medium-12 small-12 small-pull-12 medium-pull-12 social">
					<ul class="no-bullet">
						<li><a href=""><i class="icon-facebook"></i></a></li>
						<li><a href=""><i class="icon-twitter"></i></a></li>
						<li><a href=""><i class="icon-linkedin"></i></a></li>
						<li><a href=""><i class="icon-youtube"></i></a></li>
						<li><a href=""><i class="icon-instagram"></i></a></li>
					</ul>
				</div>





				</div>
			</div>
			<div class="copyright">
				<div class="row">
					<span class="legal">Paramount Equity Mortgage®, LLC is licensed by the Department of Business Oversight under the California Residential Mortgage Lending Act, License #4170047; Arizona Mortgage Banker License #0922160, NMLS# 30336; Colorado Mortgage Company Registration NMLS# 30336; Connecticut Mortgage Lender License # ML-30336; DC Mortgage Dual Authority License #MLD30336; Florida Mortgage Lender Servicer License # MLD 898; Hawaii Mortgage Servicer License #MS136; Idaho Mortgage Broker/Lender License 52769; Kansas licensed mortgage company License # MC.0025206; Maryland Mortgage Lender License # 21172; Nevada Mortgage Banker License #3919; Nevada Broker License #4260; New Jersey Residential Mortgage Lender License NMLS# 30336; New Mexico Mortgage Loan Company License NMLS# 30336; Oregon Mortgage Lender License #ML-3256; Pennsylvania Mortgage Lender License #52769; Texas SML Mortgage Banker Registration NMLS# 30336; Texas SML Residential Mortgage Loan Servicer Registration NMLS# 30336; Utah DRE Mortgage Entity License #6967176; Utah DRE Mortgage Entity License Other Trade Name#1 #9572003; Utah DRE Mortgage Entity License Other Trade Name#2 #9573336; Washington Consumer Loan Company License #CL-30336; Wisconsin Mortgage Banker License #30336BA; NMLS ID #30336; Wisconsin Mortgage Broker License #30336BR.</span>
					<small>Copyright &copy; 2003-<?php echo Date('Y'); ?> Paramount Equity Mortgage&reg;. All Rights Reserved.</small>
				</div>
			</div>
		</footer>
    <!-- WP FOOTER -->
  	<?php wp_footer(); ?>
	<input type="hidden" value="0" id="testimonialsData">
</body>
</html>
