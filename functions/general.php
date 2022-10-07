<?php

// Automatically Update Plugins
add_filter('auto_update_plugin', '__return_true');



// Custom Login Styles
add_action('login_enqueue_scripts', 'custom_login_styles');
function custom_login_styles()
{
  wp_enqueue_style('customlogin', get_template_directory_uri() . '/css/login.css');
}




// Add Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');




// Custom Excerpt More
add_filter('excerpt_more', 'custom_excerpt_more');
function custom_excerpt_more($more)
{
  return '...';
}




// Custom Excerpt Length
add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length)
{
  return 20;
}




// Remove Crap
add_action('init', 'disable_wp_emojicons');
function disable_wp_emojicons()
{
  // all actions related to emojis
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');

  // filter to remove TinyMCE emojis
  add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}




add_filter('emoji_svg_url', '__return_false');
function disable_emojicons_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}





// Custom Password Form
add_filter('the_password_form', 'the_password_form_filter');
function the_password_form_filter()
{
  $output = '<form method="post" action="' . site_url('wp-login.php?action=postpass', 'login_post') . '">';
  $output .= '<input name="post_password" type="password" placeholder="Password"/>';
  $output .= '<button>Submit</button>';
  $output .= '</form>';
  return $output;
}




// Admin Footer Modification
add_filter('admin_footer_text', 'remove_footer_admin');
function remove_footer_admin()
{
  echo '<span id="footer-thankyou">Developed by <a href="https://www.linuxinternet.com/" target="_blank">Linux Internet</a></span>';
}




add_action('wp_enqueue_scripts', 'added_scripts');
function added_scripts()
{
  wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');

  /*wp_enqueue_script( 'gsap-animation-js', get_template_directory_uri().'/js/animation.gsap.min.js');
  wp_enqueue_script( 'gsap-scrollmagic-js',  'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js');
  wp_enqueue_script( 'gsap-tweenmax-js', 'https://richardmattka.com/libs/TweenMax.min.js');
  wp_enqueue_script( 'gsap-timelinemax-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js');
  wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js');
  wp_enqueue_script('scrollmagic-debug-js', get_template_directory_uri().'/js/debugaddindicators.js');*/

  wp_enqueue_script('timelinelite-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js');
  wp_enqueue_script('scrollmagic-js',  '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js');
  wp_enqueue_script('timelinelite-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js');

  wp_enqueue_script('scrollmagic-debug-js', get_template_directory_uri() . '/js/debugaddindicators.js');
  wp_enqueue_script('tweenmax-js',  get_template_directory_uri() . '/js/tweenmax.js');
  wp_enqueue_script('gsap-js',  get_template_directory_uri() . '/js/animation.gsap.min.js');
}




// Add Menu
add_action('init', 'register_main_menus');
function register_main_menus()
{
  register_nav_menus(
    array(
      'main-menu-1' => __('Outside Header Menu'),
      'main-menu-2' => __('Toggle Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}