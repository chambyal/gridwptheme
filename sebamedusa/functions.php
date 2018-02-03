<?php

function contributors() {
global $wpdb;
$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users ORDER BY display_name");
foreach($authors as $author) {
echo "<li>";
echo "<a href=\"".get_bloginfo('url')."/?author=";
echo $author->ID;
echo "\">";
echo get_avatar($author->ID);    
echo "</a>";
echo '<div>';
echo "<a href=\"".get_bloginfo('url')."/?author=";
echo $author->ID;
echo "\">";
the_author_meta('display_name', $author->ID);
echo "</a>";
echo "</div>";
echo "</li>";
}
}
  
function wp_example_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');

function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more'); 






