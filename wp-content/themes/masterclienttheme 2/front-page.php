<?php
get_header("home");

get_template_part('templateparts/home/banner', 'home');
get_template_part('templateparts/home/about', 'home');
get_template_part('templateparts/home/blog', 'home');
get_template_part('templateparts/home/portfolio', 'home');

get_template_part('templateparts/blog/blogheader', 'home');
get_template_part('templateparts/blog/bloglist', 'home');
get_template_part('templateparts/blog/blogfooter', 'home');

get_template_part('templateparts/home/contact', 'home');

get_footer();
