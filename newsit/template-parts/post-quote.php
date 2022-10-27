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
				the_post_thumbnail();
			else:
				?>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/imgs/quote.jpg' ); ?>" alt="">
				<?php
			endif;
		?>

		<div class="quote-content">
			<?php the_content(); ?>
			<h3 class="quote-author"><?php
				if( get_field( 'quoted_by' ) ):
					the_field( 'quoted_by' );
				endif;
			?></h3>
		</div>
	</div>
</article>
