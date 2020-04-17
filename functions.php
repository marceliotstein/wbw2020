<?php
/*
 * functions.php for World Beyond War yamidoo child theme
 */

/* standard child theme enqueue styles */

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles() {
  $parent_style = 'yamidoo-style'; 
  wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css?v=vnmcxfjfdjksfdsdklsfdjskl');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css?v=vnmxncmfjdkffdsfdsjdklsfdjeilsfdjskl',
                   array($parent_style),
                   wp_get_theme()->get('Version')
  );
}

/* custom pagination */

if (!function_exists('my_pagination')):
  function my_pagination() {
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages,
      'mid_size' => 5
 
    ));
  }
endif;

/* widget logic to allow custom HTML widget to be included in page templates */

function widget($atts) {
  global $wp_widget_factory;
	        
  extract(shortcode_atts(array('widget_name' => FALSE), $atts));
	        
  $widget_name = wp_specialchars($widget_name);
	        
  if (!is_a($wp_widget_factory->widgets[$widget_name], 'WP_Widget')):
    $wp_class = 'WP_Widget_'.ucwords(strtolower($class));
		        
    if (!is_a($wp_widget_factory->widgets[$wp_class], 'WP_Widget')):
      return '<p>'.sprintf(__("%s: Widget class not found. Make sure this widget exists and the class name is correct"),'<strong>'.$class.'</strong>').'</p>';
    else:
      $class = $wp_class;
    endif;
  endif;
		    
  ob_start();
  the_widget($widget_name, $instance, array('widget_id'=>'arbitrary-instance-'.$id,
      				            'before_widget' => '',
					    'after_widget' => '',
					    'before_title' => '',
					    'after_title' => ''));
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}
add_shortcode('widget','widget'); 

/* custom RSS feed for WBW podcast */

add_action('init', 'wbwpodcastRSS');

function wbwpodcastRSS(){
  add_feed('wbwpodcast', 'wbwpodcastRSSFunc');
}

function wbwpodcastRSSFunc(){
  get_template_part('rss', 'wbwpodcast');
}

function inner_the_permalink( $post = 0 ) {
	    /**
	     *      * Filters the display of the permalink for the current post.
	     *           *
	     *                * @since 1.5.0
	     *                     * @since 4.4.0 Added the `$post` parameter.
	     *                          *
	     *                               * @param string      $permalink The permalink for the current post.
	     *                                    * @param int|WP_Post $post      Post ID, WP_Post object, or 0. Default 0.
	     *                                         */
	    return esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) );
}

function new_the_permalink( $post = 0 ) {
	if (is_user_logged_in()) {
	}
	echo inner_the_permalink($post);
}

