<?php 
	// Template partial for displaying content in single, index, archive, and search 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</article>