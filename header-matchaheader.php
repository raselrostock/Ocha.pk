<?php
/**
 * The matchaheader 
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
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="matchaHeader" role="banner">
		<div class="matchaheaderBorder"></div>
		<div class="matchaheaderMiddle">
			<div class="mathcaheaderMain">
				<div class="matchasiteBranding">
					<div class="matchasiteLogo"><?php matchatea_custom_logo(); ?></div>
				</div><!-- .site-branding -->
				
				<div id="siteMenu" class="siteMenu ">
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
				<button type="button" id="menuToggle" class="matchamenuToggle"></button>
			</div><!-- .headerMain -->	
		</div><!-- .headerMiddle -->
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
