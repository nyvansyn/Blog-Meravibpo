<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @since Fansee Blog 1.0
 */
get_header();

$cls = fansee_blog_has_sidebar() ? 'col-md-8 col-lg-8' : 'col-12'; 
get_template_part( 'template-parts/content', 'banner' );
?>
<div class="container">
	<main id="site-content" role="main">
		<div class="row">
			<div class="<?php echo esc_attr( $cls ); ?>">
				<div id="primary" class="content-area">
					<?php if ( have_posts() ): ?>
						<?php
							while ( have_posts() ){
								the_post(); 
								get_template_part( 'template-parts/content', 'single' );
							}
						?>
					<?php endif; ?>
				</div>
			</div>
			<?php if( fansee_blog_has_sidebar() ): ?>
				<div class="col-md-4 col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			<?php endif; ?>
		</div>
	</main>
</div>	
<?php get_footer(); ?>