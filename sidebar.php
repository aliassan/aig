	</div><!-- .col-main styled-container -->
	
	<div class="col col--sidebar">
		<?php if(is_active_sidebar('sidebar-1')): ?>
			<div class="mbt-sidebar">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>
		<?php else : ?>
			<div class="mbt-sidebar">
				<aside class="styled-container sidebar-section">
					<?php get_search_form(); ?>
				</aside>

				<aside class="styled-container sidebar-section">
					<h3 class="sidebar-title">Categories</h3>
						<?php
							$categories = get_categories( array(
							    'orderby' => 'id',
							    'order'   => 'DESC'
							) );
							 
							foreach( $categories as $category ) :
							    $category_link = sprintf( 
							        '<a href="%1$s" alt="%2$s">%3$s</a>',
							        esc_url( get_category_link( $category->term_id ) ),
							        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
							        esc_html( $category->name )
							    ); ?>

							    <ul>
							    	<li class="cat-item"><?php echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link ); ?></li>
							    </ul>
							<?php endforeach; ?>

						<div class="rss">
							<a class="rss__link" href="<?php echo bloginfo('rss2_url'); ?>">
								<img src="<?php echo get_template_directory_uri() . '/img/rss.png'; ?>" >
							</a>
						</div>
				</aside>

				<aside class="styled-container sidebar-section">
					<h3 class="sidebar-title">Recent Comments</h3>


						<?php
							$args = array(
								'number'      => '5',
								'status'      => 'approve',
								'post_status' => 'publish'
							);
							$comments = get_comments( $args ); ?>

							<ul id="recentcomments"> <?php
								if ( is_array( $comments ) && $comments ) :

									foreach ( (array) $comments as $comment ) : ?>
										<li class="recentcomments">
											<a class="link" href="<?php	echo esc_url( get_comment_link( $comment ) ); ?>"> 
												<?php  
													printf('By %1s in %2s %3s', 
														$comment->comment_author,
														get_the_title( $comment->comment_post_ID ),
														date_format(new DateTime($comment->comment_date), 'F d, Y, h:i:s A')
													); 
												?>
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						
								
				</aside>
			</div>
		<?php endif; ?>
	</div><!-- .col-sidebar styled-container -->
</div><!-- .row -->