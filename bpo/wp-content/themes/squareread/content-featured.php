<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>	
	<div class="post-hover">
		
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('squareread-medium'); ?>
				<?php else: ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
				<?php endif; ?>
			</a>		
			<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
			<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
			<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>			
		</div><!--/.post-thumbnail-->
		
		<div class="post-inner">	
			
			<div class="post-meta post-category"><?php the_category(' / '); ?></div>
			
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			
			<div class="post-meta post-date"><?php the_time( get_option('date_format') ); ?></div>
			
		</div><!--/.post-inner-->
		
	</div><!--/.post-hover-->	
</article><!--/.post-->	