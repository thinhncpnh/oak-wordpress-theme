<?php
get_header();

while( have_posts() ) : the_post();

	if( is_front_page() ) {

		get_template_part('template-parts/slider');

		get_template_part('template-parts/history');

		get_template_part('template-parts/portfolio-grid');

		get_template_part('template-parts/newsletter');

	}

endwhile;

get_footer();
?>
