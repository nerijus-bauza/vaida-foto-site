<?php 
	$ilovewp_logo = get_template_directory_uri() . '/ilovewp-admin/images/ilovewp-logo.png';
		if ( is_active_sidebar('footer-full') ) {
			?>
			<div id="site-prefooter">
				<?php dynamic_sidebar( 'footer-full' ); ?>
			</div><!-- #site-prefooter -->
			<?php
		}

		if ( is_active_sidebar('footer-col-1') || is_active_sidebar('footer-col-2') || is_active_sidebar('footer-col-3') ) { ?>

		<footer id="site-footer" class="site-section site-section-footer">
			<div class="site-section-wrapper site-section-wrapper-footer">

				<div class="site-columns site-columns-footer site-columns-3 clearfix">

					<?php
					$i = 0;
					$max = 3;
					while ($i < $max) { 
						$i++; 
						?><div class="site-column site-column-<?php echo esc_attr($i); ?>">
						<div class="site-column-wrapper clearfix">
							<?php if (is_active_sidebar('footer-col-' . esc_attr($i) )) { ?>
								<?php dynamic_sidebar( 'footer-col-' . esc_attr($i) ); ?>
							<?php } ?>
						</div><!-- .site-column-wrapper .clearfix -->
					</div><!-- .site-column .site-column-<?php echo esc_attr($i); ?> --><?php } ?>

				</div><!-- .site-columns .site-columns-footer .site-columns-3 .clearfix -->

			</div><!-- .site-section-wrapper .site-section-wrapper-footer -->

		</footer><!-- #site-footer .site-section-footer --><?php 
		}

		?>

		<div id="site-footer-credit">
			<div class="site-section-wrapper site-section-wrapper-footer-credit">
				<?php $copyright_default = __('Copyright &copy; ','photozoom') . date("Y",time()) . ' ' . get_bloginfo('name') . '. ' . __('All Rights Reserved. ', 'photozoom'); ?>
				<p class="site-credit"><?php echo esc_html(get_theme_mod( 'footer-text', $copyright_default )); ?> <span class="theme-credit"><?php esc_html_e('Theme by', 'photozoom'); ?> <a href="https://www.ilovewp.com/" rel="external nofollow designer noopener" target="_blank" class="footer-logo-ilovewp"><img src="<?php echo esc_url($ilovewp_logo); ?>" width="51" height="11" alt="<?php esc_attr_e('Photographer WordPress Themes', 'photozoom');?>" class="footer-ilovewp-logo" /></a></span></p>
			</div><!-- .site-section-wrapper .site-section-wrapper-footer-credit -->
		</div><!-- #site-footer-credit -->

	</div><!-- .site-wrapper-all .site-wrapper-boxed -->

</div><!-- #container -->

<?php 
wp_footer(); 
?>
</body>
</html>