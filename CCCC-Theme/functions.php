<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    add_action('acf/register_fields', 'my_register_fields');

    function my_register_fields()
    {
        include_once(plugin_dir_path( __FILE__ ) . '../../plugins/advanced-custom-fields-oembed-field/acf-oembed.php');
        
    }

    include_once(plugin_dir_path( __FILE__ ) . '../../plugins/advanced-custom-fields-oembed-field/acf-oembed.php');


    /**
 * Hide editor for specific page templates.
 *
 */
add_action( 'admin_init', 'hide_editor' );
 
function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true); 
 
    if($template_file == 'front-page.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
      
}

?>