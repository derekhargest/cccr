<?php
/* Template Name: Home Page Template */

/**
 * The template for displaying the home page
 *
 * @package Charm City Coffee Roasters
 * @subpackage cccr
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/main-logo.gif" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
				</div>
			<div class="main-image">
				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/roasting-image-angled.gif" alt="<?php bloginfo( 'name' ); ?>">
			</div>



				<section class="about">
					<a name="about" class="jump-link"></a>
					<div class="container">
						<h3>About Charm City <br/>Coffee Roasters</h3>
						<p>Starting with the bean, we are on a mission to bring a better cup of coffee to the streets of Charm City. We are dedicated to good coffee and a better Baltimore, while we produce a high end product for every citizen.<a href="#contact" class="about-link">Contact Us</a></p>
						<div class="about-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/bag-image.png" alt="Charm City Coffee Roasters Bag">
						</div>
					</div>
				</section>

				<section class="locations">
					<a name="locations" class="jump-link"></a>
					<div class="container">
						<h3>Where to buy <br />Charm City Coffee</h3>
						<div class="locations-list">
							<?php
								$args = array('post_type' => 'location');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
								<div class="location_item">
									<a href="<?php echo the_field('google_maps_link'); ?>" class="location-link" target="_blank">
										<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/location-marker.png" alt="Location">
										<p><?php echo the_field('location_name'); ?></p>
										<p class="community"><?php echo the_field('location_community'); ?></p>
									</a>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				</section>

				<section class="offerings">
					<a name="offerings" class="jump-link"></a>
					<div class="container">
						<h3>Current Charm City <br/>Coffee Offerings</h3>
						<div class="offerings_1">
							<h4>Single Origins</h4>
							<ul>
								<li>Sumatra, Silimakuta</li>
								<li>Brazil, Cerrado Mineiro</li>
								<li>El Salvador, Finca Monte Verde</li>
								<li>India, Monsooned Malabar</li>
								<li>Ethiopia, Yirgacheffe YirgZ&trade;</li>
							</ul>
						</div>


						<div class="offerings_2">
							<h4>Blends</h4>
							<ul>
								<li>Bawlmer Blend</li>
								<li>French Roast</li>
								<li>Harbor Roast</li>
								<li>Summertime Espresso</li>
								<li>Eastern Ave Espresso</li>
							</ul>
						</div>
					</div>
				</section>

				<section class="contact">
					<a name="contact" class="jump-link"></a>
					<div class="container">
						<h3>Contact Us</h3>

						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>

						<div class="social">
							<ul>
								<li><a href="https://www.instagram.com/charmcityroasters/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/insta-logo.jpg" alt="Facebook Icon"></a></li>
								<li><a href="https://www.facebook.com/Charm-City-Coffee-Roasters-1584998081826226/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/facebook-logo.jpg" alt="Instagram Icon"></a></li>
							</ul>
						</div>
					</div>
				</section>

				<section class="closer">
					<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/baltimore-street.jpg" alt="Baltimore">
				</section>

  		<?php
  		// Start the loop.
  		// while ( have_posts() ) : the_post();

  			// Include the page content template.
  			// get_template_part( 'template-parts/content', 'page' );

  			// If comments are open or we have at least one comment, load up the comment template.
  			// if ( comments_open() || get_comments_number() ) {
  			//	comments_template();
  		//	}

  			// End of the loop.
  	//	endwhile;
  		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
