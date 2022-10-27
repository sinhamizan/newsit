<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newsit
 */


	$newsit_footer_desc = get_theme_mod( 'newsit_footer_desc' );
	$newsit_footer_phone = get_theme_mod( 'newsit_footer_phone' );
	$newsit_footer_email = get_theme_mod( 'newsit_footer_email' );
	$newsit_footer_location = get_theme_mod( 'newsit_footer_location' );
	$newsit_footer_copyright = get_theme_mod( 'newsit_footer_copyright' );
	$newsit_facebook_link = get_theme_mod( 'newsit_facebook_link' );
	$newsit_twitter_link = get_theme_mod( 'newsit_twitter_link' );
	$newsit_linkedin_link = get_theme_mod( 'newsit_linkedin_link' );
	$newsit_youtube_link = get_theme_mod( 'newsit_youtube_link' );
	$newsit_instagram_link = get_theme_mod( 'newsit_instagram_link' );
	$newsit_pinterest_link = get_theme_mod( 'newsit_pinterest_link' );

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
					<div class="footer-logo">
						<?php
							if( has_custom_logo() ):
								the_custom_logo();
							else:
								?>
								<h2 class="site-title"><?php echo esc_html( bloginfo( 'name' ) ); ?></h2>
								<?php
							endif;

							if( $newsit_footer_desc ):
								?>
								<p class="site-description"><?php echo esc_html( $newsit_footer_desc ); ?></p>
								<?php
							endif;
						?>
						<ul class="footer-contact">
							<?php
							if( $newsit_footer_phone ):
								?>
								<li><span><i class="fa-solid fa-phone"></i></span><a href="tel:<?php echo wp_kses_post( $newsit_footer_phone ); ?>"><?php echo esc_html( $newsit_footer_phone ); ?></a></li>
								<?php
							endif;

							if( $newsit_footer_email ):
								?>
								<li><span><i class="fa-regular fa-envelope"></i></span><a href="mailto:<?php echo wp_kses_post( $newsit_footer_email ); ?>"><?php echo esc_html( $newsit_footer_email ); ?></a></li>
								<?php
							endif;

							if( $newsit_footer_location ):
								?>
								<li><span><i class="fa-solid fa-location-dot"></i></span> <?php echo esc_html( $newsit_footer_location ); ?></li>
								<?php
							endif;
							?>						
						</ul>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
					<div class="widget-links">
							<h2 class="widget-title"><?php _e( 'quick links', 'newsit' ); ?></h2>
							<ul>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-footer',
								));
								?>								
							</ul>
					</div>
				</div>
				<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
					<div class="widget-recent-posts">
						<h2 class="widget-title"><?php _e( 'Recent posts', 'newsit' ); ?></h2>
						<ul>
							<?php
								$recent_posts = new WP_Query( array(
									'posts_per_page' => absint( 3 ),
								));

								while( $recent_posts->have_posts() ):
									$recent_posts->the_post();
									?>
									<li>
										<div class="thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('newsit-thumb'); ?></a></div>
										<div class="title">
											<h3 class="recent-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
											<p class="recent-date"><?php the_author_posts_link(); ?> | <?php echo esc_html( get_the_date() ); ?></p>
										</div>
									</li>
									<?php
								endwhile;
							?>
						</ul>
					</div>
				</div>
				<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
					<div class="widget-recent-posts">
						<h2 class="widget-title"><?php _e( 'featured posts', 'newsit' ); ?></h2>
						<ul>
							<?php
								$featured_posts = new WP_Query( array(
									'meta_key'       => 'featured',
									'meta_value'     => 1,
									'posts_per_page' => absint( 3 ),
								));

								while( $featured_posts->have_posts() ):
									$featured_posts->the_post();
									?>
									<li>
										<div class="thumb"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('newsit-thumb'); ?></a></div>
										<div class="title">
											<h3 class="recent-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
											<p class="recent-date"><?php the_author_posts_link(); ?> | <?php echo esc_html( get_the_date() ); ?></p>
										</div>
									</li>
									<?php
								endwhile;
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
						<div class="copyright">
							<p><?php echo esc_html( $newsit_footer_copyright ); ?></p>
						</div>
					</div>
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
						<div class="social-media">
							<ul>
								<?php if( $newsit_facebook_link ): ?>
									<li><a href="<?php echo esc_url( $newsit_facebook_link ); ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
								<?php endif; ?>

								<?php if( $newsit_linkedin_link ): ?>
									<li><a href="<?php echo esc_url( $newsit_linkedin_link ); ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
								<?php endif; ?>

								<?php if( $newsit_twitter_link ): ?>
									<li><a href="<?php echo esc_url( $newsit_twitter_link ); ?>"><i class="fa-brands fa-twitter"></i></a></li>
								<?php endif; ?>

								<?php if( $newsit_youtube_link ): ?>
									<li><a href="<?php echo esc_url( $newsit_youtube_link); ?>"><i class="fa-brands fa-youtube"></i></a></li>
								<?php endif; ?>

								<?php if( $newsit_instagram_link ): ?>
									<li><a href="<?php echo esc_url( $newsit_instagram_link); ?>"><i class="fa-brands fa-instagram"></i></a></li>
								<?php endif; ?>

								<?php if( $newsit_pinterest_link ): ?>
									<li><a href="<?php echo esc_url( $newsit_pinterest_link); ?>"><i class="fa-brands fa-pinterest-p"></i></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
