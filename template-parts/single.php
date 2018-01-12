<?php
/*
	
@package matchatea
-- Single Post Template

*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-left">
		
		<?php the_title( '<h1 class="entry-title">', '</h1>'); ?>
		
		<div class="entry-meta">
			<p class="post-info"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> - <?php the_time('F j, Y'); ?> - <?php echo matchatea_posted_meta(); ?> </p>
		</div>
		
	</header>
	
	<div class="entry-content clearfix">
		
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php //echo rostocker_posted_footer(); ?>
	</footer>
	
</article>