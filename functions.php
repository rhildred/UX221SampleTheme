<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_style' );
  function twentytwentyone_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */

// adds a class to the body tag that we can use for css
function my_class_names($classes) {
    // add 'class-name' to the $classes array
    $classes[] = 'assignment2-class';
    // return the $classes array
    return $classes;
}
 
//Now add test class to the filter
add_filter('body_class','my_class_names');
// adds Google Analytics using instructions at https://support.google.com/analytics/answer/9304153?hl=en#zippy=%2Cadd-the-google-tag-directly-to-your-web-pages
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7PB45M0RK4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7PB45M0RK4');
</script>
<?php }

add_action('wp_head', 'wpb_add_favicon');
function wpb_add_favicon() { 
  $faviconUrl = get_stylesheet_directory_uri() . "/favicon.ico";
  echo "<link rel='icon' type='image/x-icon' href='$faviconUrl' />";

}
