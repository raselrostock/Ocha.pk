<?php
/**
 * The header 
 *@matchatea
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title><?php bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header" role="banner">
		<div class="headerBorder"></div>
		<div class="headerMiddle">
			<div class="headerMain">
				<div class="row">
					<div class="col-md-4">
						<div class="siteBranding">
							<div class="siteLogo"><?php matchatea_custom_logo(); ?></div>
						</div><!-- .site-branding -->
					</div>
					
					<div class="col-md-4 col-md-push-4">
						<div class="searchBoxButtonPanel">
							<div class="matchaSearchBox">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<label class="matchaSearchLabel">
										<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'matchatea' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
									</label>
								</form>
							</div>
							<h1>MENU</h1>
							<button type="button" id="menuToggle" class="menuToggle"></button>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-4">
						<div id="siteMenu" class="siteMenu">
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
					</div>
				</div>
				
				
			</div><!-- .headerMain -->	
		</div><!-- .headerMiddle -->
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
