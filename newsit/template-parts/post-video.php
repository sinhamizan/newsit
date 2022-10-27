<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Newsit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-item">
		<?php
			if( get_field( 'video_file' ) ):
				?>
				<div class="video-wrap">
					<div class="video-content">
						<video controls>
							<source
								src="<?php
									if( get_field( 'video_file' ) ):
										the_field( 'video_file' );
									endif;
								?>" 
								type="audio/mpeg">
						</video>
					</div>
				</div>
				<?php
			else:
				if( has_post_thumbnail() ):
					?>
					<div class="entry-header">
						<?php newsit_post_thumbnail(); ?>
						<div class="entry-meta">
							<?php 
								the_category();
								the_excerpt();
								?>
							<div class="other">
							<?php
								newsit_posted_on();
								newsit_posted_by();
							?>
							</div>
						</div>
					</div>
					<?php
				else:
					?>
					<div class="entry-no-thumb">
						<?php 
							the_category();
							the_excerpt();
						?>
						<div class="other">
							<?php
								newsit_posted_on();
								newsit_posted_by();
							?>
						</div>
					</div>
					<?php
				endif;
			endif;
		?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
