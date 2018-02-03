<?php
/**
 * The template part for displaying content
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0 
 */
?>


<div style="margin-bottom:30px;" id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6');?>>
<div style="height: 100%;"  class="blog-post-card d-flex flex-column mb-30 ml-auto mr-auto">  
	<div style="max-height:315px; overflow:hidden;" class="image"> 
		
<?php // if (! has_post_thumbnail() ) { echo ' class="no-img"'; } ?>
	<a class="thumnail"  href="<?php the_permalink(); ?>">
	<?php  	if ( has_post_thumbnail() ) { 		the_post_thumbnail('alm-thumbnail'); 	}?>
	</a>

<!--div class="authorImg"><?php // echo get_avatar( get_the_author_meta( 'ID' ) , 100 ); ?></div!-->

	</div>
<div class="text cat1 d-flex flex-column align-items-center text-center pl-15 pr-15 pb-20 pt-40 ">
<!--h3><?php // the_author(); ?></h3!--> 
<span class="date"><?php the_time("F d, Y"); ?>	</span>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
	<div class="d-flex flex-row flex-wrap tag-group">
	<?php  the_tags('<div class="pl-6 pr-6" class="entry-tags"><span class="d-flex flex-row align-items-center">'.__('','typegrid').'</span> ','','</div>'); ?>

</div>
</div>
</div>
</div><!-- #post-## -->  

