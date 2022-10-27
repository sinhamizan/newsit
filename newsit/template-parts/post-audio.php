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
		<div class="audio-wrap">
			<?php	
				if( has_post_thumbnail() ):
					the_post_thumbnail();
				else:
					?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/imgs/quote.jpg' ); ?>" alt="">
					<?php
				endif;
			?>

			<div class="audio-content">
				<audio controls>
					<source
						src="<?php
							if( get_field( 'audio_file' ) ):
								the_field( 'audio_file' );
							endif;
						?>" 
						type="audio/mpeg">
				</audio>
			</div>
		</div>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
