<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Newsit
 */

get_header();
?>

	<main id="primary" class="site-main">

  <section class="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-xx-12">
          <div class="bcrumb">
						<?php echo wp_kses_post( get_avatar( get_the_author_meta('ID') ) ); ?>
            <h3 class="bcrumb-name"><?php the_author(); ?></h3>
						<?php
							if( get_the_author_meta('description') ):
								?>
								<p><?php the_author_meta('description'); ?></p>
								<?php
							endif;
						?>
          </div>
        </div>
      </div>
    </div>
  </section>


	<section class="blog-area">
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post(); ?>
							<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
								<?php
								get_template_part( 'template-parts/post', get_post_format() );
								?>
							</div>
							<?php
						endwhile;
						the_posts_pagination();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
		</div>
	</section>

	</main><!-- #main -->

<?php get_footer(); ?>
