<?php get_header(); ?>

<?php 
	if (have_posts()): 
		while (have_posts()) : the_post();
			// Get the template partial
			get_template_part('content');
		endwhile;?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
<?php
	else:
		_e('No posts matched your criteria.');
	endif;
?>

<?php get_footer(); ?>