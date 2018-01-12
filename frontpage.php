<?php
/**
 * The header 
 *@matchatea
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<title><?php bloginfo( 'name' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="site-content-contain">
		<div id="content" class="site-content">

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="contentHomePanel">
			<div class="contentHomeToppanel">
				<div class="row">
					<div class="col-sm-4 col-sm-push-8">
						<div class="frontPageButtonPanel">
							<div id="frontMenu" class="frontMenu">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'matchatea' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'primary',
											'menu_class'     => 'primary-menu',
										 ) );
									?>
								</nav><!-- .main-navigation -->
							<?php endif; ?>
							</div><!-- .siteMenu -->
							<h1>MENU</h1>
							<button type="button" id="matchaheaderToggleJS" class="matchaheaderToggle"></button>
							<div class="matchaSearchBox">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<label class="matchaSearchLabel">
										<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'matchatea' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
									</label>
								</form>
							</div>
						</div>
					</div>
					
					<div class="col-sm-8 col-sm-pull-4 ">
						<div class="aboutSectionWrapper">
						<?php
							$frontLogo = get_post_meta( $GLOBALS['post']->ID, 'fronPageLogo', 1 );
							 ?>
							 <img class="frontPageLogo" style='shape-outside:url("<?php echo $frontLogo;?>");' src="<?php echo $frontLogo;?>">
							<?php
							if ( is_active_sidebar( 'aboutsection' )):
							?>
									<?php dynamic_sidebar( 'aboutsection' ); ?>
							
							<?php endif; ?>
							
						</div>

					</div>
					
					
				</div>
				
				
			</div><!-- .contentHomeToppanel -->
			<div class="contentHomeBottompanel">
		 		<div class="row">
			<?php 
		global $post_list;
		$testimonialitem = new WP_Query(array(
		        'post_type' => 'products',
		        'posts_per_page' => 3
		      ));
		while( $testimonialitem -> have_posts()) : $testimonialitem ->the_post();
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
				</div>

				
		 	</div><!-- .contentHomeBottompanel -->
			<div class="allProductBtn">
				<a href="<?php echo esc_url( home_url( '/' ) );?>/product" class="allProductbtn">BUY PRODUCT</a>
			</div>
			
		
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
 <?php 
 get_footer()
 ?>