<?php

$args = array( 'posts_per_page' => 4, 'ignore_sticky_posts' => 1 );

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

	$is_first = true;

    while ( $the_query->have_posts() ) : $the_query->the_post(); 
        // Your code here
        if($is_first) {
			get_template_part( 'templateparts/blog/blogexcerptfirst', 'home' );
		}
		else {
			get_template_part( 'templateparts/blog/blogexcerpt', 'home' );
		}
        
        $is_first = false;
    endwhile;

} else {
        // no posts found
}

wp_reset_postdata();
