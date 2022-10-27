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
	<div class="entry-meta">
		<?php 
			the_category();
		?>
		<div class="other">
			<?php
				newsit_posted_on();
				newsit_posted_by();
			?>
		</div>
	</div>
	<h2 class="entry-title"><?php the_title(); ?></h2>
	<div class="blog-thumb"><?php the_post_thumbnail( 'full' ); ?></div>
	<div class="blog-detail">
		<?php 
			the_content();
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
