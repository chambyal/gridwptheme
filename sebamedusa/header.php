<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Roboto+Condensed:400,700|Roboto:300,400,500,700" />
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri());?>/css/app.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri());?>/style.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri());?>/newstyle.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	     <script src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/js/jquery.trackpad-scroll-emulator.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	 <script type="text/javascript" src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>
<script type="text/javascript">
KlaviyoSubscribe.attachToForms('#email_signup', {
// hide_form_on_success: true
});
</script>
			
 <script>

 $(document).ready(function() {
 $( "#cattoggle" ).click(function() {
  $(".InnerMenu").toggle();
});
 $(function(){
    $('#sidebarMenuToogle').on('click', function(){
    $('body').addClass('sidebar-open');
    });
});
$(function(){
    $('#sidebarMenuClose').on('click', function(){
        $('body').removeClass('sidebar-open');
    });
});
 $('.sidebar-scsrollbar').TrackpadScrollEmulator(); }); 
 </script>
	 
</head>

<body <?php body_class(); ?>>

<header class="fixed-top">
          
            <div class="container-fluid header-bottom pl-15 pr-15">
                <div class="row">
                    <div class="col-12 header-bottom-wrapper d-flex flex-row align-items-stretch justify-content-left pl-0 pr-0">
                        <button type="button" role="button" class="menu-toggler" id="sidebarMenuToogle">
                            <i class="zmdi zmdi-menu" aria-hidden="true"></i>
                        </button>
                        <a class="d-flex flex-column align-items-center justify-content-center logo" href="https://www.sebamedusa.com/" target="_self">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.png" class="img-fluid d-block" alt="Sebamed USA">
                        </a>
						
						<button style="margin-right:0; border-left: 1px solid #f5f5f5;" type="button" role="button" class="menu-toggler  ml-auto" id="cattoggle"> <i class="zmdi zmdi-menu" aria-hidden="true"></i></button>
                    
                    </div>
                </div><!-- Row -->
            </div><!-- Header bottom -->
            
        </header>


<div id="page" class="site">
	<div class="site-inner">
	

		<header id="masthead" style="min-height:60px;" class="site-header" role="banner">
			<div class="site-header-main"> 
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<!--h1 class="site-title"><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?></a></h1-->
					<?php else : ?>
						<!--p class="site-title"><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?></a></p-->
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<!--p class="site-description"><?php // echo $description; ?></p!-->
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<!--button id="menu-toggle" class="menu-toggle"><?php // _e( 'Menu', 'twentysixteen' ); ?></button!-->

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php // if ( has_nav_menu( 'social' ) ) : ?>
							<!--nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php // esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php /*
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
							*/	?>
							</nav--><!-- .social-navigation -->
						<?php // endif; ?>
					</div><!-- .site-header-menu -->  
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

