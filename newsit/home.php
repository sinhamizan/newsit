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

	<?php
		$newsit_featured_post = new WP_Query( array(
			'meta_key'       => 'featured',
			'meta_value'     => 1,
			'posts_per_page' => 3,
		));

		$post_data = array();

		while( $newsit_featured_post->have_posts() ) {
			$newsit_featured_post->the_post();

			$categories = get_the_category();

			$post_data[] = array(
				'title'     => get_the_title(),
				'permalink'     => get_the_permalink( get_the_ID() ),
				'author'     => get_the_author_posts_link( get_the_ID() ),
				'date'     => get_the_date(),
				'category'     => $categories[0]->name,
				'category_id'     => $categories[0]->term_id,
				'thumbnail' => get_the_post_thumbnail_url(),
			);
		}

	if( $newsit_featured_post->post_count > 1 ):
		?>
		<section class="home-hero">
			<div class="container-fluid">
				<div class="row">
						<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
							<div class="featured-blog large" style="background-image: url(<?php echo $post_data[0]['thumbnail']; ?>);">

								<div class="entry-meta">
									<li class="featured-cat"><a href="<?php echo get_category_link( $post_data[0]['category_id'] ); ?>"><?php echo $post_data[0]['category']; ?></a></li>
									<div class="other">
										<h2 class="title"><a href="<?php echo esc_url( $post_data[0]['permalink'] ); ?>"><?php echo $post_data[0]['title']; ?></a></h2>
										<p class="author"><?php
										echo __( 'Posted On ', 'newsit' ); echo $post_data[0]['date']; echo __( ' by ', 'newsit' ); ?><?php echo $post_data[0]['author']; ?></p>
									</div>
								</div>

							</div>
						</div>
						
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
						<div class="row">
							<div class="col-lg-12">
								<div class="featured-blog small" style="background-image: url(<?php echo $post_data[1]['thumbnail']; ?>);">
									<div class="entry-meta">
										<li class="featured-cat"><a href="<?php echo get_category_link( $post_data[1]['category_id'] ); ?>"><?php echo $post_data[1]['category']; ?></a></li>
										<div class="other">
											<h2 class="title"><a href="<?php echo esc_url( $post_data[1]['permalink'] ); ?>"><?php echo $post_data[1]['title']; ?></a></h2>
											<p class="author"><?php
											echo __( 'Posted On ', 'newsit' ); echo $post_data[1]['date']; echo __( ' by ', 'newsit' ); ?><?php echo $post_data[1]['author']; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="featured-blog small mt-4" style="background-image: url(<?php echo $post_data[2]['thumbnail']; ?>);">
									<div class="entry-meta">
										<li class="featured-cat"><a href="<?php echo get_category_link( $post_data[2]['category_id'] ); ?>"><?php echo $post_data[2]['category']; ?></a></li>
										<div class="other">
											<h2 class="title"><a href="<?php echo esc_url( $post_data[2]['permalink'] ); ?>"><?php echo $post_data[2]['title']; ?></a></h2>
											<p class="author"><?php
											echo __( 'Posted On ', 'newsit' ); echo $post_data[2]['date']; echo __( ' by ', 'newsit' ); ?><?php echo $post_data[2]['author']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
	?>

	<section class="blog-area">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<h2 class="sec-title"><?php echo __( 'Our Posts', 'newsit' ); ?></h2>
				</div>
			</div>
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
