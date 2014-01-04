<?php 
	// Template partial for displaying content in single, index, archive, and search 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('block'); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
</article>