<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation --> 
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
			  <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex flex-row align-items-center justify-content-center footer-social-link-group">
                                <a href="https://facebook.com/sebamedusa" target="_blank" class="footer-social-link-item">
                                    <i class="zmdi zmdi-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="https://instagram.com/sebamedusa/" target="_blank" class="footer-social-link-item">
                                    <i class="zmdi zmdi-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.youtube.com/TVsebamed" target="_blank" class="footer-social-link-item">
                                    <i class="zmdi zmdi-youtube-play" aria-hidden="true"></i>
                                </a>
                                <a href="https://twitter.com/sebamedusa" target="_blank" class="footer-social-link-item">
                                    <i class="zmdi zmdi-twitter" aria-hidden="true"></i>
                                </a> 
                            </div>
                        </div><!-- Row -->
                    </div>
                </div><!-- Row -->
            </div><!-- Footer -->
			
			
				<!--nav class="social-navigation" role="navigation" aria-label="<?php // esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php /*
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					*/ ?> 
				</nav!--><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<!--span class="site-title"><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span-->
				<!--a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>">
				<?php // printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a-->
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
		
		<div class="sidebar position-fixed pb-20">
            <div class="tse-scrollable sidebar-scsrollbar">
                <div class="tse-content">
                    <div class="sidebar-header fixtop d-flex flex-row align-items-center justify-content-between pl-20 pr-20">
                        <span>Shop Menu</span>
                        <button type="button" role="button" class="cancel" id="sidebarMenuClose">
                            <i class="zmdi zmdi-close" aria-hidden="true"></i>
                        </button>
                    </div><!-- Sidebar header -->
                    <div class="sidebar-body pt-10 pb-10">
                        <ul class="list-unstyled d-flex flex-column mb-0">
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/new-this-week" class="d-flex flex-row align-items-center justify-content-between">New</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="#sidebarMenuCollapse" class="d-flex flex-row align-items-center justify-content-between" 
								data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                                    <span>Our Products</span>
                                    <span>
                                <i class="zmdi zmdi-chevron-right" aria-hidden="true"></i>
                                <i class="zmdi zmdi-chevron-down" aria-hidden="true"></i>
                            </span>
                                </a>
                                <ul class="list-unstyled collapse flex-column mb-0 pl-20 pr-20" id="sidebarMenuCollapse">
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/sebamed-products" class="d-flex flex-row align-items-center justify-content-between">All Products</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/facial-cleanser" class="d-flex flex-row align-items-center justify-content-between">Cleansers</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/moisturizer" class="d-flex flex-row align-items-center justify-content-between">Moisturizers</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/skin-care" class="d-flex flex-row align-items-center justify-content-between">Body</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/face-care" class="d-flex flex-row align-items-center justify-content-between">Face</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/hair-care" class="d-flex flex-row align-items-center justify-content-between">Hair</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/skin-care-for-men" class="d-flex flex-row align-items-center justify-content-between">Men</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/baby-care" class="d-flex flex-row align-items-center justify-content-between">Baby</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/skin-care-kits" class="d-flex flex-row align-items-center justify-content-between">Kits</a>
                                    </li>
                                    <li class="d-flex flex-column">
                                        <a href="https://www.sebamedusa.com/fragrance-free" class="d-flex flex-row align-items-center justify-content-between">Fragrance Free</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/solutions" class="d-flex flex-row align-items-center 
								justify-content-between">Solutions</a> 
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/our-story" class="d-flex flex-row align-items-center justify-content-between">About Sebamed</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/vip-club" class="d-flex flex-row align-items-center justify-content-between">Vip Club</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="http://blog.sebamedusa.com" class="d-flex flex-row align-items-center justify-content-between">Blog</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/store-locator" class="d-flex flex-row align-items-center justify-content-between">Store Locator</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/partners/rewards-rules" 
								class="d-flex flex-row align-items-center justify-content-between">Rewards Program</a>
                            </li>
                        </ul>
                    </div><!-- Sidebar body -->
                    <div class="sidebar-header d-flex flex-row align-items-center justify-content-between pl-20 pr-20">
                        Customer Care
                    </div><!-- Sidebar header -->
                    <div class="sidebar-body pt-10 pb-10">
                        <ul class="list-unstyled d-flex flex-column mb-0">
                            <li class="d-flex flex-column">
                                <a href="mailto:help@sebamedusa.com" class="d-flex flex-row align-items-center justify-content-between">Email Us</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="tel:18772284646" class="d-flex flex-row align-items-center justify-content-between">1.877.228.4646</a>
                            </li>
                        </ul>
                    </div><!-- Sidebar body -->
                    <div class="sidebar-header d-flex flex-row align-items-center justify-content-between pl-20 pr-20">
                        Company
                    </div><!-- Sidebar header -->
                    <div class="sidebar-body pt-10 pb-10">
                        <ul class="list-unstyled d-flex flex-column mb-0">
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/shipping-policy" class="d-flex flex-row align-items-center justify-content-between">Shipping Policy</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/store-policy"
								class="d-flex flex-row align-items-center justify-content-between">Store Policy</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/privacy" class="d-flex flex-row align-items-center justify-content-between">Privacy</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/terms" class="d-flex flex-row align-items-center justify-content-between">Terms</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/press" class="d-flex flex-row align-items-center justify-content-between">Press</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/faqs" class="d-flex flex-row align-items-center justify-content-between">FAQ</a>
                            </li>
                        </ul>
                    </div><!-- Sidebar body -->
                    <div class="sidebar-header d-flex flex-row align-items-center justify-content-between pl-20 pr-20">
                        Services
                    </div><!-- Sidebar header -->
                    <div class="sidebar-body pt-10 pb-10 border-bottom-0">
                        <ul class="list-unstyled d-flex flex-column mb-0">
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/wholesalers/new" 
								class="d-flex flex-row align-items-center justify-content-between">Wholesale</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/events" class="d-flex flex-row align-items-center justify-content-between">Events</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/how-it-works" class="d-flex flex-row align-items-center justify-content-between">How it works</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="http://help.sebamedusa.com/hc/en-us/categories/200417378-General"
								class="d-flex flex-row align-items-center justify-content-between">Customer Service</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://www.sebamedusa.com/our-experts" class="d-flex flex-row align-items-center justify-content-between">Our Experts</a>
                            </li>
                            <li class="d-flex flex-column">
                                <a href="https://sebamed.wufoo.com/forms/physician-sample-prescription-pad-request-form/" 
								class="d-flex flex-row align-items-center justify-content-between">Physicians</a>
                            </li> 
                        </ul>
                    </div><!-- Sidebar body -->
                </div>
            </div>
        </div><!-- Sidebar -->
        <div class="overlay"></div>
		

	</div><!-- .site-inner -->
</div><!-- .site -->
<?php wp_footer(); ?>


			

</body>
</html>
