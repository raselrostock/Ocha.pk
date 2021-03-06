<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="singleContentPanel">
				<div class="row">
					<div class="col-md-12">
						<?php 	
								if( have_posts() ):
									
									while( have_posts() ): the_post();
										
										//rostocker_save_post_views( get_the_ID() );
										
										get_template_part( 'template-parts/single', get_post_format() );
										
										
										
										//if ( comments_open() ):
											//comments_template();
										//endif;
									
									endwhile;
									
								else:
									get_template_part( 'template-parts/content', 'none' );
								endif;
			                
							?>
					</div>
				</div>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
