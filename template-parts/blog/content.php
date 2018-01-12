<?php
/**
 * Template part for displaying posts
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
							
		<p><?php matchatea_read_more(30); ?></p>
		<a class="moreBtn" href="<?php the_permalink() ?>">Read More</a>
	
	</div><!-- .entry-content -->

</article><!-- #post-## -->
