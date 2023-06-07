<?php get_header(); ?>

<div class="content">
	
	<div class="pad group">
	
		<?php get_template_part('inc/page-title'); ?>
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>	
					
				<h1 class="post-title"><?php the_title(); ?></h1>
				<p class="post-byline"><?php esc_html_e('by','squareread'); ?> <?php the_author_posts_link(); ?> &middot; <?php the_time(get_option('date_format')); ?></p>
							
				<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
				
				<div class="clear"></div>
				
				<div class="entry themeform">	
					<div class="entry-inner">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','squareread'),'after'=>'</div>')); ?>
					</div>
					<div class="clear"></div>				
				</div><!--/.entry-->

			</article><!--/.post-->				
		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','squareread').'</span> ','','</p>'); ?>
		
		<?php do_action( 'alx_ext_sharrre' ); ?>
		
		<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'post-nav', 's1' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
		
		<?php if ( get_theme_mod( 'post-comments', 'on' ) == 'on' ) { comments_template('/comments.php',true); } ?>
		
	</div><!--/.pad-->
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>