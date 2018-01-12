<?php
/**
 * Template part for displaying posts
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
						<div class="col-md-2 col-xs-12">
							<div class="productLeftPanel">
								<ul class="productImageLoader">
									<li><img src="<?php echo  $productImage1; ?>"></li>
									<li><img src="<?php echo  $productImage2; ?>"></li>
									<li><img src="<?php echo  $productImage3; ?>"></li>
									<li><img src="<?php echo  $productImage4; ?>"></li>
								</ul>

							</div><!-- .productLeftPanel -->
						</div>
						<div class="col-md-7 col-xs-12">
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
								<button type="button" id="productNowjs" class="productNow">Order Product Now</button>
							</div><!-- .productRightPanel -->
						</div>
						
					<?php endwhile; ?>
					<?php wp_reset_postdata();?>
				</div>
		</div><!-- .contentProduct -->

</article><!-- #post-## -->
