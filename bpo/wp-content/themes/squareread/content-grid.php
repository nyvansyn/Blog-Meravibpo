<article id="post-<?php the_ID(); ?>" <?php post_class('group post-grid'); ?>>	
	<div class="post-hover post-wrap">
		
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('squareread-medium'); ?>
				<?php else: ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
				<?php endif; ?>
			</a>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>		
			<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
			<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
			<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>	
		</div><!--/.post-thumbnail-->

		<div class="post-inner">	

			<div class="post-meta group">
				<div class="post-category"><?php the_category(' / '); ?></div>
				<div class="post-date"><?php the_time( get_option('date_format') ); ?></div>
			</div><!--/.post-meta-->
			
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			
			<?php if (get_theme_mod('excerpt-length','34') != '0'): ?>
			<div class="entry excerpt">				
				<?php the_excerpt(); ?>
			</div><!--/.entry-->
			<?php endif; ?>
			
		</div><!--/.post-inner-->
		
	</div><!--/.post-hover-->	
</article><!--/.post-->	