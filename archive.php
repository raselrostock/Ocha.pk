<?php
/**
 * The template for displaying archive pages
 *
 
 */

get_header(); ?>

<div class="wrap">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="contentPanel">
				<div class="row">
					<div class="col-md-12">
						<?php 	
								if( have_posts() ):?>
									<h2><?php

									if ( is_category() ) {
										single_cat_title();
									} elseif ( is_tag() ) {
										single_tag_title();
									} elseif ( is_author() ) {
										the_post();
										echo 'Author Archives: ' . get_the_author();
										rewind_posts();
									} elseif ( is_day() ) {
										echo 'Daily Archives: ' . get_the_date();
									} elseif ( is_month() ) {
										echo 'Monthly Archives: ' . get_the_date('F Y');
									} elseif ( is_year() ) {
										echo 'Yearly Archives: ' . get_the_date('Y');
									} else {
										echo 'Archives:';
									}

								?></h2>
									<?php
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
			</div><!-- .contentPanel -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
