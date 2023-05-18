<?php
get_header();

if ( have_posts() ) {
	
	if(is_single()) {
		// load posts loop.
		while ( have_posts() ) {
			the_post();
			
			get_template_part( 'templateparts/blog/blogheader', 'entry' );
			get_template_part( 'templateparts/blog/blogcontent', 'entry' );
			get_template_part( 'templateparts/blog/blogfooter', 'entry' );
		}
		
		get_template_part( 'templateparts/pagination' );
	}
	else {
		get_template_part( 'templateparts/blog/blogheader', 'main' );
		
        while (have_posts()) : the_post();
            get_template_part( 'templateparts/blog/blogexcerpt', 'main' );

        endwhile;
    
		get_template_part( 'templateparts/pagination' );
		
		get_template_part( 'templateparts/blog/blogfooter', 'main' );
	}

} else {
	// if no content, include the "no posts found" template.
	get_template_part( 'templateparts/postcontent', 'none' );

}

get_footer();
