<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress 
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="container-fluid blog-banner">
               
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center text-center blog-banner-content">
                                <h1 class="mb-30">Everything you wanted to know about your skin is here!</h1>
                                <h3 class="mb-30">Join 100K subscribers and receive the latest tips, tricks, and how-tos.</h3>
                              				<form  style="max-width: 830px!important;  width: 100%!important;" id="email_signup" class="klaviyo_styling klaviyo_standard_embed_MQnaLC d-flex flex-column flex-md-row flex-wrap align-items-center align-items-md-stretch flex-md-nowrap" action="//manage.kmail-lists.com/subscriptions/subscribe" data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET" target="_blank" novalidate="novalidate">

								<input type="hidden" name="g" value="MQnaLC">
						             <div class="d-flex mb-15 mb-md-0 klaviyo_field_group">
									     <input class="form-control" type="email" value="" name="email" id="k_id_email" placeholder="Enter Your Email ...." /> 
                                    									</div>
							<button type="submit" role="button" class="ml-md-20 text-nowrap klaviyo_submit_button">Subscribe</button>
									

									

                                </form>
								
								<div style="color:#ffffff;" class="klaviyo_messages"> 
<div class="success_message" style="display:none;"></div>
<div style="color:#ff0000;" class="error_message" style="display:none;"></div>
</div>
								
                           </div>
                        </div><!-- Row -->
                    </div>
</div>

<div class="container-fluid home-category-menu InnerMenu">
               <div class="container">
                  <div class="row portfolioFilter d-flex flex-row align-items-center justify-content-between">
                            <?php foreach (get_categories() as $cat) : ?>                              
							 <button type="button" role="button" class="home-category-menu-item 
							text-nowrap" data-filter=".category-<?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?></button>
							<?php endforeach; ?>
                        </div><!-- Row -->
                    </div>
               </div>
  
  
	
<div style="background:#eeeeee;" id="content" class="site-content  pt-30"> 
			<div style="padding:0;" id="primary" class="content-area"> 
			
                  
              <h2 class="text-center text-uppercase mb-30">WHAT'S NEW</h2>
                    
                 

						
						<?php if ( have_posts() ) : ?>
			<?php // if ( is_home() && ! is_front_page() ) : ?> 
				<!--header>
					<h1 class="page-title screen-reader-text"><?php // single_post_title(); ?></h1>
				</header-->
			<?php // endif; ?>  
						
	
				
  <div class="container">
	<div  class="almlisting row">   
						<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */ 
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
	
	endwhile; ?>
</div>
</div> 
<?php 
	
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>				
</div> 
<script src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/js/jquery.isotope.js" type="text/javascript"></script> 
<script>
 $(document).ready(function(){
if ($(window).width() < 992){
   $( ".InnerMenu .portfolioFilter> button" ).click(function() {
  $(".InnerMenu").hide();
});
}

}); 


$(window).on('load resize', function() {
var maxHeight = Math.max.apply(null, $(".cat1").map(function () {
        return $(this).height();
    }).get());
   $(".cat1").css("height",maxHeight + 50 ); 

 var $container = $('.almlisting');    
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        } });
    $('.portfolioFilter button').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');
        $container.isotope({ 
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            } });
         return false; 
});  

 
}); 
</script>
<?php get_footer(); ?>
