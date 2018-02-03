<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<div class="container-fluid blog-banner">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center text-center blog-banner-content">
							<?php if ( have_posts() ) : ?>
                                <h1 class="mb-30"><?php printf( __( 'Search Results for %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
								</h1>
								<?php endif; ?>
								
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
                </div><!-- Row -->
            </div>




	
	
	<div class="container-fluid home-category-menu InnerMenu">
               
                    <div class="container">  
					
                        <div class="row cat-manu d-flex flex-row align-items-center justify-content-between">
		        						
                         <?php foreach (get_categories() as $cat) : ?>     
                		  <a style="line-height: 45px;"  href="<?php echo get_category_link($cat->term_id); ?>" 
							  class="home-category-menu-item text-nowrap"><?php echo $cat->cat_name; ?></a>
							  <?php endforeach; ?>
                        </div><!-- Row -->
                    </div>
               
            </div>
	
	
	
	
		<div style="background:#eeeeee;" id="content" class="site-content  pt-30"> 
	
			<div style="padding:0;" id="primary" class="content-area"> 
		<main style="padding-top:0;" id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<!--header class="page-header">
				<h1 class="page-title"><?php // printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
		
		</header><!-- .page-header -->
  <div class="container">
		<div class="almlisting row">	
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;  ?>
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
		</main><!-- .site-main -->
	</div>


<?php // get_sidebar(); ?>
<?php get_footer(); ?>
