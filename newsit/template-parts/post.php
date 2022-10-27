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
			</div><!-- .entry-header -->
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
		?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
