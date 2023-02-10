<?php get_header(); ?>

<div class="container mx-auto flex flex-wrap">

	<?php if ( have_posts() ) : ?>
		<?php
		$post_counter = 0;
		while ( have_posts() ) :
			if ( $post_counter === 0 ) {
				the_post();
				get_template_part( 'template-parts/featured', get_post_format() );
				$post_counter++;
			} elseif ( $post_counter < 3 ) {
				the_post();
				get_template_part( 'template-parts/half-featured', get_post_format() );
				$post_counter++;
			} elseif ( $post_counter === 3 ) {
				the_post();
				get_template_part( 'template-parts/centered', get_post_format() );
				$post_counter++;
			} else {
				the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			}
		?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
