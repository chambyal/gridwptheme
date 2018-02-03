<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<style>
.not-found__number-wrap { padding-top: 15px; padding-bottom: 15px; position: relative; margin-bottom: 30px;text-align: center;}
.not-found__number {color: #ded9d4;font-size: 240px;font-weight: 900;text-transform: uppercase;}
.not-found__image-wrap {position: absolute; top: 0; left: 0; right: 0; bottom: 0; text-align: center;  z-index: 1;}
.not-found__text-wrap {  margin-left: auto;  margin-right: auto;  max-width: 210px;  text-align: center;}	
.error-title {  margin-bottom: 20px; color: #7a8589; font-family: "Libre Baskerville",serif;  font-size: 24px;  text-transform: none;}
.error-text {  margin-top: 0;  margin-bottom: 0; color: #9e9e9e; font-family: "Libre Baskerville",serif;  font-size: 12px;}
</style>

<div class="container-fluid blog-banner">
               
                    <div  class="container">
                        <div class="row">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center text-center blog-banner-content">
                                <h1 class="mb-30">Everything you wanted to know about your skin is here!</h1>
								  <h3 class="mb-30">Subscribe and receive the latest tips, tricks, and how-tos.</h3>
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


<div  class="container-fluid home-category-menu InnerMenu"> 
              
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
<div style="padding:45px 0 90px;" class="page-content">
<div class="main-contetnt-wrapper">
<div class="not-found__number-wrap">
<h1 class="not-found__number">
404
</h1>
<div class="not-found__image-wrap"> 
<img class="not-found__image" src="https://www.sebamedusa.com/assets/x404-flower-731023b967db13e7998eee1915191df2dd98117d0ede72eb40635ad34835e153.png.pagespeed.ic.D7yecnfL_D.png" >
</div>
</div>
<div class="not-found__text-wrap">
<h2 class="error-title">
Page Not Found
</h2>
<p class="error-text">
We can&#8217;t find the page you&#8217;re looking for. Use side menu or try heading
<a href="https://www.sebamedusa.com/blog/">home.</a>
</p>
</div>
</div>		
		

</div><!-- .page-content -->
			
<?php// get_sidebar( 'content-bottom' ); ?>
<?php // get_sidebar(); ?>

</div>
</div><!-- .content-area -->
<?php get_footer(); ?>
