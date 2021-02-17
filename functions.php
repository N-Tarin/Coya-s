<?php


function my_script_init() {
  //CSSの読み込み
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

  //JSの読み込み 
  // wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// GoogleFontの読み込み
function add_google_fonts() {
  wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');
