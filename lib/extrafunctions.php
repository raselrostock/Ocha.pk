<?php 
if ( ! function_exists( 'matchatea_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Twenty Fifteen 1.5
 */
function matchatea_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif; 
function matchatea_posted_meta()
{
    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    $i = 1;

    if (!empty($categories)):
        foreach ($categories as $category):
            if ($i > 1): $output .= $separator;
            endif;
    $output .= '<a href="'.esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr('View all posts in%s', $category->name).'">'.esc_html($category->name).'</a>';
    ++$i;
    endforeach;
    endif;

    return ' <span class="posted-in">'.$output.'</span>';
}
function matchatea_read_more($limit)
{
    $post_content = explode(' ', get_the_content());
    $less_content = array_slice( $post_content, 0, $limit );
    echo implode(' ', $less_content);
}

?>