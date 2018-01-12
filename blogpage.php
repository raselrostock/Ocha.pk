<?php 
/*
 * Template Name: Blog Page
 */
?>
<?php 
get_header();
global $post;
 ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="contentPanel">
			<div class="blogPagepanel">
				<div class="row">
					<div class="col-md-8">
						<div class="blogTitleSection">
							<?php 
							$pagetitle 	= get_post_meta( get_the_ID($post->ID), 'blogPageTitle', 1 );
							$pagesubtitle 	= get_post_meta( get_the_ID($post->ID), 'blogPageSubtitle', 1 );
							$blogPostNumber 	= get_post_meta( get_the_ID($post->ID), 'blogPostNumber', 1 );
							?>
							<h1><?php echo $pagetitle; ?></h1>
							<h3>- <?php echo $pagesubtitle; ?> -</h3>
						</div>
					</div>
				</div>
				
			</div><!-- .blogPagepanel -->
			<div class="blogPostpanel">
			<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				   $args = array(
				   		'post_type' => 'post',
				   		'posts_per_page' =>$blogPostNumber,
				   		'paged' => $paged 
				   		);
 
					$postQuery = new WP_Query($args);
					?>
					<div class="row">

					<?php
					if ( $postQuery->have_posts() ) :
    					while ( $postQuery->have_posts() ) : $postQuery ->the_post();?>
    					
						
							<div class="col-md-4">
								<div class="blogPostBox">
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<p><?php matchatea_read_more(50); ?></p>
									<a class="moreBtn" href="<?php the_permalink() ?>">Read More</a>
								</div>
								
							</div>
							
    					<?php endwhile;?>
    					</div><!-- #row -->
    					
    					<div id="pagi">
						

								<?php 
								   $big = 999999999; // need an unlikely integer

								echo paginate_links( array(
								    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
								    'format' => '?paged=%#%',
								    'current' => max( 1, get_query_var('paged') ),
								    'total' => $postQuery->max_num_pages       ) );
								?>
 						</div>
    				<?php endif; ?>
    				<?php wp_reset_postdata(); ?>
    				
    				
			</div><!-- #blogPostpanel -->
			<div class="trendingCategoryPost">
				<div class="trendingCategoryInfo">
					<?php 
						$trendingPostTitle = get_post_meta( $GLOBALS['post']->ID, 'trendingPostTitle', 1 );
						$trendingPostSubTitle = get_post_meta( $GLOBALS['post']->ID, 'trendingPostSubTitle', 1 );
						$trendingCategory = get_post_meta( $GLOBALS['post']->ID, 'trendingCategory', 1 );
					 ?>
					<div class="trendingCategoryInfoTop">
						<div class="trendingCategoryInfoTopMiddle"><h1><span><?php echo $trendingPostTitle; ?></span></h1></div>		
					</div>
					<div class="trendingCategoryInfoBottom">
						<h3>-<?php echo $trendingPostSubTitle;  ?>-</h3>
					</div>
				</div><!-- .trendingCategoryInfo -->
				<div class="trendingCatPostPanel">
					<div class="row">
						<?php 
						$queryPosts = new WP_Query(array(
												'post_type'   => 'post',
											    'posts_per_page' => 3,
											    'category_name' => $trendingCategory, // this is the category SLUG
											));
						
						while( $queryPosts -> have_posts()) : $queryPosts ->the_post();
						      ?>
						<div class="col-md-4">
							<div class="trendingPostBox">
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p><?php matchatea_read_more(50); ?></p>
								<a class="moreBtn" href="<?php the_permalink() ?>">Read More</a>
							</div>
							
						</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata();?>
					</div><!-- .row -->
				</div><!-- .trendingCatPostPanel -->
			</div><!-- .trendingCategoryPost -->
		</div><!-- #contentPanel -->
		
	</main><!-- #main -->
</div><!-- #primary -->
 <?php 
 get_footer()
 ?>