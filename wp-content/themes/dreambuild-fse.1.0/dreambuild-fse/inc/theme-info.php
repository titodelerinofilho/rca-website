<?php
/**
 * Add Theme info Page
 */

function dreambuild_fse_menu() {
	add_theme_page( esc_html__( 'DreamBuild  FSE', 'dreambuild-fse' ), esc_html__( 'About DreamBuild  FSE', 'dreambuild-fse' ), 'edit_theme_options', 'about-dreambuild-fse', 'dreambuild_fse_theme_page_display' );
}
add_action( 'admin_menu', 'dreambuild_fse_menu' );

function dreambuild_fse_admin_theme_style() {
	wp_enqueue_style('dreambuild-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'dreambuild_fse_admin_theme_style');

/**
 * Display About page
 */
function dreambuild_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'dreambuild-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The DreamBuild FSE is free construction agency WordPress theme is design for home builders and construction business website.', 'dreambuild-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'dreambuild-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'dreambuild-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'dreambuild-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'dreambuild-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'dreambuild-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'dreambuild-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'dreambuild-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'dreambuild-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'dreambuild-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get DreamBuild PRO', 'dreambuild-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'dreambuild-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/township-construction-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'dreambuild-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'dreambuild-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/dreambuild/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'dreambuild-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/dreambuild/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'dreambuild-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'dreambuild-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'dreambuild-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with DreamBuild  FSE, please give your feedback.', 'dreambuild-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/dreambuild-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'dreambuild-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>