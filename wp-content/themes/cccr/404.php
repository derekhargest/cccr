<?php
/* Template Name: Home Page Template */

/**
 * The template for displaying the home page
 *
 * @package Default Wordpress
 * @subpackage default wp
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/main-logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
				</div>
			<div class="main-image">
				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/roasting-image-angled.gif" alt="<?php bloginfo( 'name' ); ?>">
			</div>



				<section class="about">
					<div class="container">
						<h3>Sorry, <br/>This Page Doesnt Exist</h3>
            <p>Take a sip, and enjoy the <a href="/" style="color: #000006;">home page</a>.</p>
						<div class="about-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/bag-image.png" alt="">
						</div>
					</div>
				</section>

        <section class="closer">
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/baltimore-street.jpg" alt="">
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
