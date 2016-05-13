
	<div class="columns large-12 customer-service no-padding">

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
	</div>
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
		</main><!-- END FLUID CONTAINER -->

		<footer class="footer columns large-12">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							&copy; <?php echo Date('Y'); ?>
						</p>
					</div>
				</div>
			</div>
		</footer>
    <!-- WP FOOTER -->
  	<?php wp_footer(); ?>

</body>
</html>
