<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0 
 */
  
get_header(); ?>

<div style="margin:22px  0px 0px;" class="container-fluid home-category-menu InnerMenu"> 
              
                    <div class="container"> 

                        <div class="row cat-manu d-flex flex-row align-items-center justify-content-between">
		               						
                      <?php foreach (get_categories() as $cat) : ?>     
                
							  <a style="line-height:45px;"  href="<?php echo get_category_link($cat->term_id); ?>" 
							  class="home-category-menu-item text-nowrap"><?php echo $cat->cat_name; ?></a>
							  <?php endforeach; ?>
                        </div><!-- Row -->
                    </div>
               
            </div>
 <div  id="content" class="site-content"> 
<div  id="primary" class="content-area container detailpost">
<div class="row">
	<main style="padding-top:0;" id="main" class="site-main col-md-8 col-sm-12 imgres" role="main">
		<?php  
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
							
				
			}

			if ( is_singular( 'attachment' ) ) {  
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

		
		
	
	

	</main><!-- .site-main -->

	<?php // get_sidebar( 'content-bottom' ); ?>
		
<?php get_sidebar(); ?>
</div><!-- .content-area -->

	
</div>
</div>

<div style="background:#eeeeee; padding:30px 0 30px;" class="loademore">
	<div class="col-12">
                                <h2 class="text-center text-uppercase mb-30">You may also like</h2>
                            </div>
							<div style="padding:0;" class="container">
									
		<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post, any" posts_per_page="3" max_pages="5" 
		transition="masonry" masonry_animation="slide-up" images_loaded="true"]'); ?>
	
		</div>
		
		</div>

<?php get_footer(); ?>
