<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since 1.0
 * @package Fansee Blog WordPress theme
 */
$show_widget = true;
if( is_page() || is_single() || is_home() ){
	
	$id = fansee_blog_get_page_id();
	
	if( 'on' == get_post_meta( $id, 'fansee-blog-disable-footer-widget', true ) ){
		$show_widget = false;
	}
} 

$show_social_menu = fansee_blog_get( 'footer-social-menu' );
$scroll = fansee_blog_get( 'enable-scroll-to-top' );
$footer_text = fansee_blog_get('footer-copyright-text');
?>
	<section <?php echo fansee_blog_schema( 'footer' ); ?> class="fansee-blog-footer-wrapper">
		<?php if( $show_widget ): ?>
			<div class="container">
				<footer class="fansee-blog-footer-wrapper-inner footer-widget">
					<div class="footer-widget-wrapper"><?php dynamic_sidebar( 'fansee-blog-footer-widget' ); ?></div>
				</footer>
				<footer class="text-center text-lg-start bg-light text-muted" style="margin-top:-7vh;">
				  <section>
					<div class="container text-center text-md-start mt-5">
					  <div class="row mt-3">
						<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="margin-top: 5vh;">
							<?php the_custom_logo(); ?>
						  <p style="font-family: 'Poppins', sans-serif; margin-top: 20px;">
							Meravi BPO berfokus pada bisnis yang bergerak dalam bidang pengalihdayaan proses dan fungsi bisnis, Meravi BPO memberikan kesempatan yang sama bagi Pencari kerja dan perusahaan untuk berfokus pada tujuan bisnis dan efisiensi biaya
						  </p>
<!-- 						  <p style="font-family: 'Poppins', sans-serif; margin-top: 20px; font-weight:600;">
							Beri saya pemberitahuan tentang artikel terbaru 
						  </p> -->
<!-- 						  <a href="#" class="btn btn-rounded" style="font-family: 'Poppins', sans-serif; color: #DE2739; background-color: white; font-weight:600;" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">
							Berlangganan
						  </a> -->

						</div>
						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="margin-top: 5vh;">
						  <h6 class="text-uppercase fw-bold mb-4" style="font-family: 'Poppins', sans-serif;">
							Perusahaan
						  </h6>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://meravibpo.id/" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Home</a>
						  </p>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://meravibpo.id/program" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Program</a>
						  </p>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://meravibpo.id/tentang-kami" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Tentang Kami</a>
						  </p>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://blog.meravibpo.id/" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Blog</a>
						  </p>

						</div>
						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="margin-top: 5vh;">
						  <h6 class="text-uppercase fw-bold mb-4" style="font-family: 'Poppins', sans-serif;">
							Program kami
						  </h6>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://meravibpo.id/program-jupiter" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Program Jupiter</a>
						  </p>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://meravibpo.id/program-venus" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Program Mars</a>
						  </p>
						  <p style="font-family: 'Poppins', sans-serif;">
							<a href="https://meravibpo.id/program-mars" class="text-reset" style=" text-decoration: none; color:#5f5f5f;">Program Venus</a>
						  </p>
						</div>
						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="margin-top: 5vh;">
						  <h6 class="text-uppercase fw-bold mb-4" style="font-family: 'Poppins', sans-serif;">
							Contact
						  </h6>
						  <p style="font-family: 'Poppins', sans-serif;"><i class="fas fa-phone"></i> 081-701-190-80 (Tim BPO)</p>
						  <p style="font-family: 'Poppins', sans-serif;"><i class="fas fa-envelope"></i> Meravi.bpo@gmail.com</p>
						  <h6 class="text-uppercase fw-bold mb-4" style="font-family: 'Poppins', sans-serif; margin-top: 50px;">
							Kantor
						  </h6>
						  <p style="font-family: 'Poppins', sans-serif;">
							Jl. Raya Solo - Yogyakarta No.9,7, Karangploso, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282
						  </p>
						</div>
					  </div>
					</div>
				  </section>

				</footer>
				
			</div>
		<?php endif; ?>
		
		<div class="fansee-blog-copyright">
			<div class="container-fluid">
				<div class="fansee-blog-copyright-inner">
					<div class="fansee-blog-copy-right">
						<div class="pr-0">
							<?php //echo esc_html( $footer_text ); ?>	
							Copyright © 2022 - <?php echo date('Y') ;?> Meravi BPO.
						</div> 
						<div class="fansee-blog-credit-link">						
							<?php esc_html_e( 'Design by ' , 'syncore.co.id' ) ?>
							<a class="pl-1" style="text-decoration:none; font-weight:600;" href="<?php echo esc_url( 'https://syncore.co.id/' ); ?>" target="_blank">
								<?php esc_html_e( 'syncore.co.id', 'syncore.co.id' ); ?>	                     		
							</a>
						</div>
					</div>

					<?php if( $show_social_menu ): ?>
						<div class="fansee-blog-social-menu">
							<?php fansee_blog_social_menu(); ?>
						</div>
					<?php endif; ?>				
				</div>
			</div>
		</div>
	</section>
	<?php if( $scroll ): ?>
		<div class="fansee-blog-stt scroll-to-top">
			<i class="fa fa-arrow-up"></i>
		</div>
	<?php endif; ?>
	<?php wp_footer(); ?>
 </body>
 </html>