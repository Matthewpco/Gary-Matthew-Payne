<?php

function netrep_get_the_posts_pagination( $args = array() ) {
    $navigation = '';
 
    // Don't print empty markup if there's only one page.
    if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
        // Make sure the nav element has an aria-label attribute: fallback to the screen reader text.
        if ( ! empty( $args['screen_reader_text'] ) && empty( $args['aria_label'] ) ) {
            $args['aria_label'] = $args['screen_reader_text'];
        }
 
        $args = wp_parse_args(
            $args,
            array(
                'mid_size'           => 1,
                'prev_text'          => _x( 'Previous', 'previous set of posts' ),
                'next_text'          => _x( 'Next', 'next set of posts' ),
                'screen_reader_text' => __( 'Posts navigation' ),
                'aria_label'         => __( 'Posts' ),
                'class'              => 'pagination',
            )
        );
 
        // Make sure we get a string back. Plain is the next best thing.
        if ( isset( $args['type'] ) && 'array' === $args['type'] ) {
            $args['type'] = 'plain';
        }
 
        // Set up paginated links.
        $links = paginate_links( $args );
		return $links;
    }
 
    return $navigation;
}

  $post_count = wp_count_posts();
	$posts_on_page = 9;
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	//if($post_count->publish > $posts_on_page) {
		?>
		
	<div class="pagination">
		
		<?php
		
		// prev page
		echo get_previous_posts_link( "Previous" );
		
		// middle numbers
		echo netrep_get_the_posts_pagination( array('mid_size' => 2, 'prev_next' => false) );
		
		// next page
		echo get_next_posts_link( "Next" );
		
		?>
		
	  </div>
	  
	  <?php
	//}
