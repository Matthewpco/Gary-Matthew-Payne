<?php
get_header();

		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				
				get_template_part( 'templateparts/page/banner', 'repmanage' );
				get_template_part( 'templateparts/postcontent' );
          
			}
		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'templateparts/postcontent', 'none' );

		}
		
get_footer();
