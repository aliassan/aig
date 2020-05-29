

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>
		<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
		</label>
		<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span>
		<input type="image" class="search-submit" src="<?php echo get_template_directory_uri() . '/img/search.png'?>" alt="Submit" />
	</div>
</form>
