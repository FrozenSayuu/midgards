<?php get_header(); ?>

<div class="contact">
<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
				if( get_the_post_thumbnail() ) : ?>
					<div id="our-post-image">
						<?php the_post_thumbnail('midgards-gallery'); ?>
					</div>
				<?php
				endif; 
				the_content();
		endwhile;

		if ( is_single() ) :
			previous_post_link();
			next_post_link();
		endif;
	else :
		_e( 'Oj hoppsan, här var det tomt.', 'textdomain' );
	endif;
	?>
</div>

<?php get_footer(); ?>