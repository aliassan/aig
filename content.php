<article <?php post_class(); ?>>


	<header class="mbt-entry-header">

		<?php if (is_single()): ?>

			<div class="mbt-entry-header__title">
				<h2><?php the_title(); ?></h2>
			</div>

		<?php else: ?>

			<div class="mbt-entry-header__title">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>

		<?php endif; ?>


		<div class="mbt-entry-header__meta">
				<p class="post-meta__body">
					By <?php the_author(); ?> on <?php the_time('F jS, Y'); ?>
				</p>
		</div>

	</header><!-- .mt-entry-header -->


	<div class="mbt-entry-content">
			<?php 
				if(has_post_thumbnail()): the_post_thumbnail(); endif;
				if(is_single()): 
					the_content(); 
				else: 
					the_excerpt(); endif; 
			?>
	</div>

	<?php if(!is_single()):?>
		<div class="comment-count">
			<p>
				<img src="<?php echo get_template_directory_uri() . "/img/comment.png"?>">
				<span class="comment-count__text">
					Comments (<?php echo get_comments_number(); ?>)
				</span>
			</p>
		</div>
	<?php endif; ?>


</article>

<hr class="section-divider">