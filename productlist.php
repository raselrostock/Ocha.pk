<?php 
/*
 * Template Name: ProductList Page
 */
?>
<?php 
get_header();
global $post;
 ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="contentPanel">
			<div class="productlistPagepanel">
				<div class="row">
					<div class="col-md-8">
						<div class="productlistTitleSection">
							<?php 
							$productlistPageTitle 	= get_post_meta( get_the_ID($post->ID), 'productlistPageTitle', 1 );
							$productlistPageSubtitle 	= get_post_meta( get_the_ID($post->ID), 'productlistPageSubtitle', 1 );
							?>
							<h1><?php echo $productlistPageTitle; ?></h1>
							<h3>- <?php echo $productlistPageSubtitle; ?> -</h3>
						</div>
					</div>
				</div>
				
			</div><!-- .productlistPagepanel -->
			<div class="productlistPostpanel">
			<div class="row">
			<?php 
		global $post_list;
		$productitem = new WP_Query(array(
		        'post_type' => 'products',
		        'posts_per_page' => -1
		      ));
		while( $productitem -> have_posts()) : $productitem ->the_post();
			 $productSubtitle 	= get_post_meta( get_the_ID($post->ID), 'productSubtitle', 1 );
			 $productabout		= get_post_meta( get_the_ID($post->ID), 'productabout', 1 );
			 $productBenefit	= get_post_meta( get_the_ID($post->ID), 'productBenefit', 1 );
			 $productPrice		= get_post_meta( get_the_ID($post->ID), 'productPrice', 1 );
			 $productImage1		= get_post_meta( get_the_ID($post->ID), 'productImage1', 1 );
			 $productImage2		= get_post_meta( get_the_ID($post->ID), 'productImage2', 1 );
			 $productImage3		= get_post_meta( get_the_ID($post->ID), 'productImage3', 1 );
			 $productImage4		= get_post_meta( get_the_ID($post->ID), 'productImage4', 1 );
		 ?>
				<div class="col-md-4 col-xs-10  productMargin">
					<div class="productShowcase">
						<div class="productSample">
							<div data-post_id="<?php echo $post->ID?>" class="productLayout">
								<div class="productImg">
									<!--<?php $url=  wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
									<img data-post_id="<?php echo $post->ID?>" src="<?php echo $url;?>">-->
								</div>
								<div class="productImgOverlay"></div>
								<div class="productImgTitle">
									<h1><?php the_title() ?></h1>
								</div>

								
							</div>
							<div data-post_id="<?php echo $post->ID?>" class="productBrief">
								<a href="<?php echo esc_url( home_url( '/' ) );?>/products/<?php echo $post->post_name;?>" class="prodImg"><img src="<?php echo $url;?>"></a>
								<h1><?php the_title() ?></h1>
								<p><?php the_content(); ?></p>
								<a href="<?php echo esc_url( home_url( '/' ) );?>/products/<?php echo $post->post_name;?>" class="buyBtn">Get Details</a>
							</div>
						</div>
						
					</div><!-- .productShowcase -->
				</div>		 	
		 		<?php endwhile; ?>
				<?php wp_reset_postdata();?>
				</div> <!--.row -->
			</div><!-- #productlistPostpanel -->



			<div class="trendingCategoryPost">
				<div class="trendingCategoryInfo">
					<?php 
						$productlisttrendingPostTitle = get_post_meta( $GLOBALS['post']->ID, 'productlisttrendingPostTitle', 1 );
						$productlisttrendingPostSubTitle = get_post_meta( $GLOBALS['post']->ID, 'productlisttrendingPostSubTitle', 1 );
						$productlisttrendingCategory = get_post_meta( $GLOBALS['post']->ID, 'productlisttrendingCategory', 1 );
					 ?>
					<div class="trendingCategoryInfoTop">
						<div class="trendingCategoryInfoTopMiddle"><h1><span><?php echo $productlisttrendingPostTitle; ?></span></h1></div>		
					</div>
					<div class="trendingCategoryInfoBottom">
						<h3>-<?php echo $productlisttrendingPostSubTitle;  ?>-</h3>
					</div>
				</div><!-- .trendingCategoryInfo -->
				<div class="trendingCatPostPanel">
					<div class="row">
						<?php 
						$queryPosts = new WP_Query(array(
												'post_type'   => 'post',
											    'posts_per_page' => 3,
											    'category_name' => $productlisttrendingCategory, // this is the category SLUG
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