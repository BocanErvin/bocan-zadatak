<?php

/**
 * BaseTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BaseTheme
 */

if (!function_exists('basetheme_setup')) :

   function basetheme_setup()
   {

      load_theme_textdomain('basetheme', get_template_directory() . '/languages');


      add_theme_support('automatic-feed-links');


      add_theme_support('title-tag');

      add_theme_support('post-thumbnails');

      add_theme_support('html5', array(
         'search-form',
         'comment-form',
         'comment-list',
         'gallery',
         'caption',
      ));


      add_theme_support('customize-selective-refresh-widgets');

      add_theme_support('custom-logo', array(
         'height'      => 250,
         'width'       => 250,
         'flex-width'  => true,
         'flex-height' => true,
      ));
      remove_theme_support('widgets-block-editor');
      /**************************************************
       * Woocommerce support 
       **************************************************/
      add_theme_support('woocommerce');
   }
endif;
add_action('after_setup_theme', 'basetheme_setup');


function basetheme_content_width()
{
   // This variable is intended to be overruled from themes.
   // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
   // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
   $GLOBALS['content_width'] = apply_filters('basetheme_content_width', 640);
}
add_action('after_setup_theme', 'basetheme_content_width', 0);

require get_template_directory() . '/includes/enqueue_scripts_and_styles.php';

add_filter('get_avatar_data', 'default_avatar', 100, 2);
function default_avatar($args, $user_data)
{
   if (is_object($user_data)) {
      $user_id = $user_data->user_id;
   } else {
      $user_id = $user_data;
   }
   if ($user_id == 1) {
      $author_pic = get_user_meta($user_id, 'author_pic', true);
      if ($author_pic) {
         $args['url'] = $author_pic;
      } else {
         $args['url'] =  get_template_directory_uri() . "/assets/images/default-img.png";
      }
   }
   return $args;
}
