<?php
/**
 *	My theme single post template
 *
 *
 */

	 
		get_header();

		if (have_posts()): 
			while(have_posts()):
				the_post();
				get_template_part('content');

				if(comments_open() || get_comments_number()):
					comments_template();
				endif;
			endwhile;
		endif;

		get_sidebar();
		get_footer();
	?>
				
		