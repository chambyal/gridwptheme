<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen 
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
<!--div class="authorinf row text-center">
<!--div class="col-sm-12"><?php // echo  get_avatar( get_the_author_meta( 'ID' ) , 100 ); ?></div-->
<!--div class="col-sm-3"><span>Author :</span><?php // the_author(); ?></div-->
<!--/div-->
<div class="authorinf text-center"><?php the_title( '<h1 class="entry-title single-title ">', '</h1>' ); ?>
<span><i class="fa fa-sitemap" aria-hidden="true"></i></span><?php the_category(', '); ?> 
<span><i class="fa fa-calendar" aria-hidden="true"></i></span><span><?php the_date(); ?></span>
</div>

<?php // twentysixteen_excerpt(); ?>  

	<div class="thumnail">
	 
	<?php twentysixteen_post_thumbnail(); ?>
	</div>

	<div class="entry-content">
		<?php
			the_content(); 
				
				
					?>
				<?php  the_tags('<div class="entrytags"><span>'.__('TAGS:','typegrid').'</span> ','','</div>'); ?> 
				 
				 
				 
				 
				 <div class="related_post row">
				 			<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {

$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>4,
'caller_get_posts'=>4
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
echo '<h1 class="related_post_title  col-sm-12">Related Posts</h1>';
while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="col-md-3 col-sm-6">
	<div class="thumnail">
	 <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
	<?php twentysixteen_post_thumbnail(); ?>
	<?php the_title(); ?></a>
	</div>
	</div>

 
<?php
endwhile;
}
wp_reset_query();
}
?>
</div>		 
 
				 
				 
<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content --> 


	
	
	<!--footer class="entry-footer">
		<?php // twentysixteen_entry_meta(); ?>
		<?php /*
			edit_post_link(
				sprintf(
					
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'  
			);
	*/	?>
	</footer-->
	<!-- .entry-footer -->

</article><!-- #post-## -->

