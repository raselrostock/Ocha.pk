<?php
/**
 * The template for displaying the footer
 * @matchatea
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				 <div class="row">
	                <div class="col-sm-6">
	                    <div class="footerContactSection">
							<?php
								if ( is_active_sidebar( 'footercontactsection' ) ) { ?>

									<?php dynamic_sidebar( 'footercontactsection' ); ?>
									
							<?php }?>
						</div>
	                </div>
	                
	                <div class="col-sm-6">
	                    <div class="footerSocialSection text-right">
							<?php
								if ( is_active_sidebar( 'footersocialsection' ) ) { ?>

									<?php dynamic_sidebar( 'footersocialsection' ); ?>
									
							<?php }?>
						</div>
	                </div>
	            </div>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

				