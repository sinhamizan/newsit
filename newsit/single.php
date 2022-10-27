<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Newsit
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="blog-detail-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );

								the_post_navigation(
									array(
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'newsit' ) . '</span> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'newsit' ) . '</span> <span class="nav-title">%title</span>',
									)
								);
							endwhile; // End of the loop.
						?>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
						<div class="blog-sidebar">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="comment-area">
			<div class="container">
				<div class="row">
					<div class="col-xx-12">
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php get_footer(); ?>
