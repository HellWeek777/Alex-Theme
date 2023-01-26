<?php


function zet_scripts() {

  wp_enqueue_style( 'cloudyblog-stylef', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css' );
  wp_enqueue_style( 'cloudyblog-styleg', get_template_directory_uri() . '/assets/css/vendor/slider.min.css' );
  wp_enqueue_style( 'cloudyblog-styleh', get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'cloudyblog-stylei', get_template_directory_uri() . '/assets/css/vendor/icons.min.css' );
  wp_enqueue_style( 'cloudyblog-stylej', get_template_directory_uri() . '/assets/css/vendor/animation.min.css' );
  wp_enqueue_style( 'cloudyblog-stylek', get_template_directory_uri() . '/assets/css/vendor/gallery.min.css' );
  wp_enqueue_style( 'cloudyblog-stylel', get_template_directory_uri() . '/assets/css/vendor/cookie-notice.min.css' );
  wp_enqueue_style( 'cloudyblog-stylem', get_template_directory_uri() . '/assets/css/default.css' );
  wp_enqueue_style( 'cloudyblog-stylen', get_template_directory_uri() . '/assets/css/theme-orange.css' );

  wp_enqueue_script( 'cloudyblog-scriptf', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptg', get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scripth', get_template_directory_uri() . '/assets/js/vendor/jquery.inview.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scripti', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptj', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptk', get_template_directory_uri() . '/assets/js/vendor/ponyfill.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptl', get_template_directory_uri() . '/assets/js/vendor/slider.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptm', get_template_directory_uri() . '/assets/js/vendor/animation.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptn', get_template_directory_uri() . '/assets/js/vendor/progress-radial.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scripto', get_template_directory_uri() . '/assets/js/vendor/bricklayer.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptp', get_template_directory_uri() . '/assets/js/vendor/gallery.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptr', get_template_directory_uri() . '/assets/js/vendor/shuffle.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scripts', get_template_directory_uri() . '/assets/js/vendor/particles.min.js', array(), '2022', true );
  wp_enqueue_script( 'cloudyblog-scriptt', get_template_directory_uri() . '/assets/js/main.js', array(), '2022', true );


}
add_action( 'wp_enqueue_scripts', 'zet_scripts' );


function custom_field_excerpt() {
    global $post;
    $text = get_field('tekst'); 
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $excerpt_length = 20; 
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}

add_action( 'init', 'cp_change_post_object' );

function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Portfolio';
        $labels->singular_name = 'Portfolio';
        $labels->add_new = 'Dodaj nowe';
        $labels->add_new_item = 'Dodaj nowe portfolio';
        $labels->edit_item = 'Edytuj portfolio';
        $labels->new_item = 'Portfolio';
        $labels->view_item = 'Zobacz portfolio';
        $labels->search_items = 'Szukaj portfolio';
        $labels->not_found = 'Nie znalezniono żadnego portfolio';
        $labels->not_found_in_trash = 'Nie znaleziono żadnyc nowych portfolio w koszu';
        $labels->all_items = 'Wszystkie portfolio';
        $labels->menu_name = 'Portfolio';
        $labels->name_admin_bar = 'Portfolio';
}

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );

    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url();
          background-size: contain; 
          width: 100%;
height: 200px !important;
        }
        .login {
          background: #000;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return esc_url( home_url( '/' ) );
}

add_action( 'admin_init', 'role_based_redirect' );
function role_based_redirect() {
    if( strpos($_SERVER["REQUEST_URI"],'wp-admin/profile.php') !== false ) { 
        $user = wp_get_current_user();
        if ( in_array( 'new_role', (array) $user->roles ) ) {
            wp_redirect( home_url( '/wp-admin/edit.php' ) );
            exit;
        }
    }
}
