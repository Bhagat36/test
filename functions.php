<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyfifteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?php


function register_theme_menu(){
	register_nav_menu('Primary','Main Navigation Menu');
}
add_action('init','register_theme_menu');


function twentyfifteenchild_widgets_init() {
    register_sidebar( array(
        'name'    => __( 'footer-part', 'twentyfifteenchild' ),
        'id'      => 'footer-part', 
        'description' => __( '' ),
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'    => __( 'action', 'twentyfifteenchild' ),
        'id'      => 'action', 
        'description' => __( '' ),
        'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'    => __( 'contact', 'twentyfifteenchild' ),
        'id'      => 'contact', 
        'description' => __( '' ),
        'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );
register_sidebar( array(
        'name'    => __( 'contact-form', 'twentyfifteenchild' ),
        'id'      => 'contact', 
        'description' => __( '' ),
        'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );
}
add_action('widgets_init','twentyfifteenchild_widgets_init');


function my_wp_nav_menu_objects($objects, $args) {
    foreach($objects as $key => $item) {
        $objects[$key]->classes[] = 'nav-item';
    }
    return $objects;
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

/************Following function update class on anchor tag********************/
function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    // you can put your if statements in here (use item, depth and args in conditions)
    if ( $depth == 0 ) {
        $item_output = preg_replace('/<a /', '<a class="nav-link" ', $item_output, 1);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);
add_theme_support( 'post-thumbnails' ); 
add_image_size('featuredImageCropped', 300, 220, true);
add_image_size('featuredImage', 600, 400, true);
add_image_size('featuredImage1', 519, 324, true);
add_image_size('featuredImage2', 1200, 400, true);
add_image_size('featuredImage3', 490, 300, true);
//the_post_thumbnail('featuredImageCropped');


function create_posttype() {
 
register_post_type( 'slider',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'slider' ),

             'singular_name' => __( 'home' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );

register_post_type( 'Features',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'Features' ),

             'singular_name' => __( 'Features' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );


register_post_type( 'welcome',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'welcome' ),

             'singular_name' => __( 'welcome' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );




register_post_type( 'portfolio',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'portfolio' ),

             'singular_name' => __( 'portfolio' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );

register_post_type( 'about',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'about' ),

             'singular_name' => __( 'about' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );

register_post_type( 'team',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'team' ),

             'singular_name' => __( 'team' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );

register_post_type( 'ourcustomer',
   // CPT Options
        array(

            'labels' => array(

             'name' => __( 'ourcustomer' ),

             'singular_name' => __( 'ourcustomer' ),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),

         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'supports' => array('title', 'editor', 'thumbnail')
         )
       );

}
add_action( 'init', 'create_posttype' );


register_taxonomy("sub-portfolio", array("portfolio"),array(
    "hierarchical" => true, "label" => "sub-portfolio","singular_label" => "sub-portfolio", "rewrite" => true, ));

function wp_get_post_categories_1( $post_id = 0, $args = array() ) {
    $post_id = (int) $post_id;
 
    $defaults = array('fields' => 'ids');
    $args = wp_parse_args( $args, $defaults );
 
    $cats = wp_get_object_terms($post_id, 'category', $args);
    return $cats;
}

function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}




//making the meta box (Note: meta box != custom meta field)
function wpse_add_custom_meta_box_2() {
   add_meta_box(
       'custom_meta_box-2',       // $id
       'sub_title',                  // $title
       'show_custom_meta_box_2',  // $callback
       'portfolio',                 // $page
       'normal',                  // $context
       'high'                     // $priority
   );
}
add_action('add_meta_boxes', 'wpse_add_custom_meta_box_2');

//showing custom form fields
function show_custom_meta_box_2() {
    global $post;
$postId = $post->ID;
    

$value = get_post_meta($postId, 'wpse_value1', true);
    ?>

    <!-- my custom value input -->
    <input type="text" name="wpse_value1" value="<?php echo  $value; ?>">

    <?php
}

//now we are saving the data
function wpse_save_meta_fields( $post_id ) {

/*echo $post_id;
echo '<pre>';
print_r($_POST['wpse_value']); die();*/

update_post_meta($post_id,'wpse_value1',$_POST['wpse_value1']);
  }


add_action( 'save_post', 'wpse_save_meta_fields' );

function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );



function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

?>




