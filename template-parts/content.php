<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12 w-full md:w-1/2' ); ?>>
	<div class="px-2">
		<div class="w-full h-50 mb-5">
		<?php the_post_thumbnail('medium', array('class' => 'object-cover w-full h-full rounded shadow-material')); ?>
		</div>

		<div class="w-full">
			<header class="entry-header mb-4">
				<?php the_title( sprintf( '<h2 class="entry-title text-lg leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
			</header>

			<?php if ( is_search() || is_archive() ) : ?>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

			<?php else : ?>

				<div class="entry-content text-sm">
					<?php
					/* translators: %s: Name of current post */
					the_content(
						sprintf(
							__( 'Continue reading %s', 'tailpress' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						)
					);

					wp_link_pages(
						array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						)
					);
					?>
				</div>

			<?php endif; ?>
		</div>
	</div>
</article>