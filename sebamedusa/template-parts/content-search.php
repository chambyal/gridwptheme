<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>



<div style="margin-bottom:30px;" id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6');?>>
<div style="height:100%;" class="blog-post-card d-flex flex-column mb-30 ml-auto mr-auto"> 
<div style="max-height:315px; overflow:hidden;" class="image"> 
<div class="thumnail">
<?php twentysixteen_post_thumbnail(); ?>
</div>
<!--div class="authorImg">
<?php // echo get_avatar( get_the_author_meta( 'ID' ) , 100 ); ?>
</div--> 
</div>
<div class="text cat1 d-flex flex-column align-items-center text-center pl-15 pr-15 pb-20 pt-40 position-relative">
<span class="date"><?php the_time("F d, Y"); ?>	</span>
<!--h3><?php // the_author(); ?></h3--> 
<h2><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h2>
<?php the_excerpt(); ?>
</div>
	<?php // twentysixteen_excerpt(); ?>
	<?php if ( 'post' === get_post_type() ) : ?>

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
			*/ ?>
		</footer-->
		<!-- .entry-footer -->

	<?php else : ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>

	<?php endif; ?>
</div><!-- #post-## -->
</div>
