<?php
/**
 * Matcha Tea functions and definitions
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */

require get_template_directory() . '/lib/initsetup.php'; 

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/lib/matchascript.php';
require get_template_directory() . '/lib/extrafunctions.php';
require get_template_directory() . '/lib/product-posttype.php';
require_once get_template_directory() . '/metabox/init.php';
require get_template_directory() . '/metabox/matchateametabox.php';
require get_template_directory() . '/lib/matchateawidget.php';