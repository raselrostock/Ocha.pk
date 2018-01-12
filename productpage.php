<?php 
/*
 * Template Name: ProductPage
 * Template Post Type: products
 */
?>
<?php
get_header();
global $post,$post_list; ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="contentProductPage">
		
			<div class="contentProduct">
				<div class="row">
						<?php 
					
					$testimonialitem = new WP_Query(array(
					        'post_type' => 'products',
					        'name' => $post->post_name,
					      ));
					
					while( $testimonialitem -> have_posts()) : $testimonialitem ->the_post();
						 $productSubtitle 	= get_post_meta( get_the_ID($post->post_name), 'productSubtitle', 1 );
						 $productabout		= get_post_meta( get_the_ID($post->post_name), 'productabout', 1 );
						 $productBenefit	= get_post_meta( get_the_ID($post->post_name), 'productBenefit', 1 );
						 $productPrice		= get_post_meta( get_the_ID($post->post_name), 'productPrice', 1 );
						 $productImage1		= get_post_meta( get_the_ID($post->post_name), 'productImage1', 1 );
						 $productImage2		= get_post_meta( get_the_ID($post->post_name), 'productImage2', 1 );
						 $productImage3		= get_post_meta( get_the_ID($post->post_name), 'productImage3', 1 );
						 $productImage4		= get_post_meta( get_the_ID($post->post_name), 'productImage4', 1 );
						 $post_list[] += $post->post_name;;
					 ?>
						
						<div class="col-md-7 col-md-push-2 col-xs-12">
							<div class="productMiddlePanel">
								<div class="productMiddleDesc">
									<h1><?php the_title(); ?></h1>
									<h3>-<?php echo $productSubtitle; ?>-</h3>
								</div>
								<div class="productLargeImage">
									<img src="<?php echo  $productImage1; ?>">
								</div>
							</div><!-- .productMiddlePanel -->
						</div> 

						<div class="col-md-2 col-md-pull-7 col-xs-12">
							<div class="productLeftPanel">
								<ul class="productImageLoader">
									<li><img src="<?php echo  $productImage1; ?>"></li>
									<li><img src="<?php echo  $productImage2; ?>"></li>
									<li><img src="<?php echo  $productImage3; ?>"></li>
									<li><img src="<?php echo  $productImage4; ?>"></li>
								</ul>

							</div><!-- .productLeftPanel -->
						</div>
						
						<div class="col-md-3 col-xs-12">
							<div class="productRightPanel">
								<dl class="accordion">

									<dt>ABOUT</dt>
									<dd>
										<p>
											<?php echo $productabout; ?>
										</p>
									</dd>

									<dt>BENEFITS</dt>
									<dd>
										<p>
											<?php echo $productBenefit; ?>
										</p>
									</dd>

									<dt>PRICE</dt>
									<dd>
										<p>
											<?php echo $productPrice; ?>
										</p>
									</dd>

								</dl>
								<button type="button" id="productNowjs" class="productNow" data-toggle="mathcaModal" data-product='<?php the_title(); ?>' onclick="setProduct('<?php the_title(); ?>','matcha-PRODUCT')" data-target="#myModal_press" >Order Product Now</button>
							</div><!-- .productRightPanel -->
						</div>
						
					<?php endwhile; ?>
					<?php wp_reset_postdata();?>
				</div>
		</div><!-- .contentProduct --> 
		<div class="productCategoryPost">
			<div class="productCategoryInfo">
				<?php 
					$relatedPostTitle = get_post_meta( $GLOBALS['post']->ID, 'relatedPostTitle', 1 );
					$relatedPostSubTitle = get_post_meta( $GLOBALS['post']->ID, 'relatedPostSubTitle', 1 );
					$categoryTitlepost = get_post_meta( $GLOBALS['post']->ID, 'categoryTitlepost', 1 );
				 ?>
				<div class="productCategoryInfoTop">
					<div class="productCategoryInfoTopMiddle"><h1><span><?php echo $relatedPostTitle; ?></span></h1></div>		
				</div>
				<div class="productCategoryInfoBottom">
					<h3>- <?php echo $relatedPostSubTitle; ?> -</h3>
				</div>
			</div><!-- .productCategoryInfo -->
			<div class="productCatPostPanel">
				<div class="row">
					<?php 
					$queryPosts = new WP_Query(array(
											'post_type'   => 'post',
										    'posts_per_page' => 3,
										    'category_name' => $categoryTitlepost, // this is the category SLUG
										));
					
					while( $queryPosts -> have_posts()) : $queryPosts ->the_post();
					      ?>
					<div class="col-md-4">
						<div class="catPostBox">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<p><?php matchatea_read_more(50); ?></p>
							<a class="moreBtn" href="<?php the_permalink() ?>">Read More</a>
						</div>
						
					</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata();?>
				</div><!-- .row -->
			</div><!-- .productCatPostPanel -->
		</div><!-- .productCategoryPost -->
		</div><!-- .contentProductPage -->
		
		
	</main><!-- #main -->
</div><!-- #primary -->
<div id="myModal_press" class="matchaModal">
           
              <div class="modalContent">
	              <div class="modalHeader">
	              		<div class="modalBorder"></div>
	              		<div class="modalMiddle">
	              			<div class="modalheaderMain">
								<div class="siteBranding">
									<div class="siteLogo"><?php matchatea_custom_logo(); ?></div>
								</div><!-- .site-branding -->
			              		<button class="close" type="button" data-dismiss="modal">×</button>
			                	<h4 class="modal-title"></h4>
			                </div>
		                </div>
	              </div>

              	  <div class="modalBody">
	              	  <div id="matchaContactForm">
	              	  		<?php echo do_shortcode( '[contact-form-7 id="52" title="Contact form 1"]' ); ?>
	              	  	
	              	  </div>
             
              	  </div>
              	  <div class="modalFooter">
                                
                   </div>
              	 
              </div>
            
</div>
<?php get_footer();?>