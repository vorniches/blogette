<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 w-full md:w-1/2' ); ?>>
	<div class="px-2">
		<div class="w-full relative">
			<header class="entry-header mb-4 text-white absolute bottom-5 left-10">
				<?php the_title( sprintf( '<h2 class="entry-title text-2xl leading-tight mb-1 drop-shadow-md"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm"><?php echo get_the_date(); ?></time>
			</header>

		<div class="w-full h-96">
			<?php the_post_thumbnail('large', array('class' => 'object-cover w-full h-full rounded shadow-material')); ?>
		</div>

			<?php if ( is_search() || is_archive() ) : ?>
				<div class="entry-summary text-center w-full">
					<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</article>