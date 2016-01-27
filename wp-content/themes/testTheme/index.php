<?php get_header(); ?>

	<?php if( have_posts() ): ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			
		<?php endif; ?>
		

		<? while( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>