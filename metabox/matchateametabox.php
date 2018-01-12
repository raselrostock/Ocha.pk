<?php 
add_action( 'cmb2_admin_init', 'matchateaMetabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function matchateaMetabox(){

	/*==================================================================================
								PRODUCT POST META DATA  									
	====================================================================================*/
	$options = new_cmb2_box( array(
		'id'            => 'productInfo',
		'title'         => esc_html__( 'Product Information', 'matchatea' ),
		'object_types'  => array( 'products' ),
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product Subtitle', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product Subtitle', 'matchatea' ),
		'id'         => 'productSubtitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product Description', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product Description', 'matchatea' ),
		'id'         => 'productabout',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product Benefits', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product Benefits', 'matchatea' ),
		'id'         => 'productBenefit',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product Price', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product Price', 'matchatea' ),
		'id'         => 'productPrice',
		'type'       => 'text_money',
	) );
		$options->add_field( array(
		'name'    => 'Product Photo 1',
		'desc'    => 'Upload your photo',
		'id'      => 'productImage1',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Photo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	) );
			$options->add_field( array(
		'name'    => 'Product Photo 2',
		'desc'    => 'Upload your photo',
		'id'      => 'productImage2',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Photo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	) );

			$options->add_field( array(
		'name'    => 'Product Photo 3',
		'desc'    => 'Upload your photo',
		'id'      => 'productImage3',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Photo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	) );
			$options->add_field( array(
		'name'    => 'Product Photo 4',
		'desc'    => 'Upload your photo',
		'id'      => 'productImage4',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Photo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	) );

		$options->add_field( array(
		'name'       => esc_html__( 'Product Page Related Post Title Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Related Post Title Text', 'matchatea' ),
		'id'         => 'relatedPostTitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product Page Related Post Subtitle Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Related Post Subtitle Text', 'matchatea' ),
		'id'         => 'relatedPostSubTitle',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Write the Category', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Category For Showing the Related Posts', 'matchatea' ),
		'id'         => 'categoryTitlepost',
		'type'       => 'text', 
	) );

	/*==================================================================================
								PRODUCT PAGE META DATA  									
	====================================================================================*/
	/*
	$options = new_cmb2_box( array(
		'id'            => 'productpageInfo',
		'title'         => esc_html__( 'Product Page Information', 'matchatea' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'productpage.php' ),
	) );
		$options->add_field( array(
		'name'       => esc_html__( 'Product Page Related Post Title Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Related Post Title Text', 'matchatea' ),
		'id'         => 'relatedPostTitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product Page Related Post Subtitle Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Related Post Subtitle Text', 'matchatea' ),
		'id'         => 'relatedPostSubTitle',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Write the Category', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Category For Showing the Related Posts', 'matchatea' ),
		'id'         => 'categoryTitlepost',
		'type'       => 'text', 
	) );
	*/

	/*==================================================================================
								BLOG PAGE META DATA  									
	====================================================================================*/
		$options = new_cmb2_box( array(
		'id'            => 'pageInfo',
		'title'         => esc_html__( 'Blog Page Information', 'matchatea' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'blogpage.php' ),
	) );
		$options->add_field( array(
		'name'       => esc_html__( 'Blog Page Title', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Blog Page Title', 'matchatea' ),
		'id'         => 'blogPageTitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Blog Page Subtitle', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Blog Page Subtitle ', 'matchatea' ),
		'id'         => 'blogPageSubtitle',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Blog Page Number Of Post', 'matchatea' ),
		'desc'       => esc_html__( 'Write the Number- How many post you want to show?', 'matchatea' ),
		'id'         => 'blogPostNumber',
		'type'       => 'text',
		'attributes' => array(
						'type' => 'number',
						),
	) );
		$options->add_field( array(
		'name'       => esc_html__( 'Trending Post Title Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Trending Post Title Text', 'matchatea' ),
		'id'         => 'trendingPostTitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Trending Post Related Post Subtitle Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Trending Post Subtitle Text', 'matchatea' ),
		'id'         => 'trendingPostSubTitle',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Enter the Category', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Category For Showing the Trending Posts', 'matchatea' ),
		'id'         => 'trendingCategory',
		'type'       => 'text',
	) );

/*==================================================================================
								PRODUCT LIST PAGE META DATA  									
	====================================================================================*/
	$options = new_cmb2_box( array(
		'id'            => 'productlistpageInfo',
		'title'         => esc_html__( 'Product List Page Information', 'matchatea' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'productlist.php' ),
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product List Page Title', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product List Page Title', 'matchatea' ),
		'id'         => 'productlistPageTitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product List Page Subtitle', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product List Page Subtitle ', 'matchatea' ),
		'id'         => 'productlistPageSubtitle',
		'type'       => 'textarea_small',
	) );
	
		$options->add_field( array(
		'name'       => esc_html__( 'Product List Page Trending Post Title Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product List Page Trending Post Title Text', 'matchatea' ),
		'id'         => 'productlisttrendingPostTitle',
		'type'       => 'text',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Product List Page Trending Post Related Post Subtitle Text', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product List Page Trending Post Subtitle Text', 'matchatea' ),
		'id'         => 'productlisttrendingPostSubTitle',
		'type'       => 'textarea_small',
	) );
	$options->add_field( array(
		'name'       => esc_html__( 'Enter the Category', 'matchatea' ),
		'desc'       => esc_html__( 'Write your Product List Page Category For Showing the Trending Posts', 'matchatea' ),
		'id'         => 'productlisttrendingCategory',
		'type'       => 'text',
	) );

	/*==================================================================================
								FRONT PAGE META DATA  									
	====================================================================================*/

	$options = new_cmb2_box( array(
		'id'            => 'frontpageInfo',
		'title'         => esc_html__( 'Front Page Information', 'matchatea' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'frontpage.php' ),
	) );
		$options->add_field( array(
		'name'    => 'Front Page Logo',
		'desc'    => 'Upload your photo for your front page logo',
		'id'      => 'fronPageLogo',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Photo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
		),
		'preview_size' => 'medium', // Image size to use when previewing in the admin.
	) );

}
?>