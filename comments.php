<?php
		if(post_password_required())
			return;
?>

<section class="comments">
	
	<?php if(have_comments()): ?>	

		<h2 class="comments-title">
			<?php 
				printf(_n('One comment on &ldquo;%2s&rdquo;', '%1s comments on &ldquo;%2s&rdquo;', get_comments_number(), 'mytheme'),
					number_format_i18n(get_comments_number()), get_the_title());
			?>
		</h2>

		<?php if(get_comment_pages_count() > 1 && get_opton('page_comments')): ?>
			<nav class="comments-nav-top">
				<ul>
					<li>
						<?php previous_comments_link(__('&larr; Older Comments', 'mytheme')); ?>
					</li>
					<li>
						<?php next_comments_link(__('&rarr; Newer Comments', 'mytheme')); ?>
					</li>
				</ul>
			</nav>
		<?php endif; ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(array(
					'style' 		=> 'ol',
					'short_ping'	=> true,
					'avatar_size'	=> 34
				));
			?>
		</ol>

		<?php if(get_comment_pages_count() > 1 && get_opton('page_comments')): ?>
			<nav class="comments-nav-bottom">
				<ul>
					<li>
						<?php previous_comments_link(__('&larr; Older Comments', 'mytheme')); ?>
					</li>
					<li>
						<?php next_comments_link(__('&rarr; Newer Comments', 'mytheme')); ?>
					</li>
				</ul>
			</nav>
		<?php endif; ?>

	<?php endif; ?>

		<?php if(!comments_open()): ?>
			<p class="no-comments">Comments are disabled</p>
		<?php else:
			comment_form();
			endif;
		?>

</section>