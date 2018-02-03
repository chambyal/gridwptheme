<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {	return;} ?>

<aside id="secondary" class="widget-area col-md-4 col-sm-12" role="complementary">
<?php // dynamic_sidebar('sidebar-1'); ?>
  <h1 style="margin: 0; padding: 0; border-top: none" class="entry-title text-center">Blog Search</h1>
   <section id="search-3" class="widget widget_search">
     
	  <form role="search" method="get" class="search-form" action="http://52.35.220.162/blog/">
	           <label>
            <input type="search" class="search-field" placeholder="" value="" name="s">
         </label>
         <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
   </section>

<!--div id="authorlist"><ul><?php // contributors(); ?></ul></div-->
<?php // echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> 
   <h1 class="entry-title text-center">Editors' Picks</h1>
       
<?php
$args = array( 'numberposts' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
 <div class="container">
 <a class="row" href="<?php the_permalink(); ?>"> 
 <span class="col-sm-4 asidimg"> <?php twentysixteen_post_thumbnail(); ?> </span>
  <span style="padding-right:0;" class="col-sm-8">
	 <h2 class="post-title"><?php the_title(); ?></h2> 
	<!--span class="author"><?php // the_author(); ?></span-->
	<span class="date"><?php the_date(); ?></span>
  </span>
</a>

	
<?php // the_excerpt(); ?>
    </div>
<?php endforeach; ?>


	
<div class="blog-post-card">
	<div class="tag-group text-center align-items-center">
	
	
	   <h1 class="entry-title text-center">Popular TAGS</h1>
	
	<?php  the_tags('<span class="d-flex flex-row ">'.__('','typegrid').'</span> ',''); ?>
</div>
</div>
	
</aside><!-- #secondary -->
