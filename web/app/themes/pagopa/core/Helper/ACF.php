<?php

namespace PagoPA\Helper;

/**
 * Class ACF
 * @package PagoPA\Helper
 */
final class ACF
{
  const JSON_DIR = 'core/fields';

  /**
   * ACF options getter
   * @param string $page_slug
   * @return array|bool|null
   */
  public static function getOptions($page_slug)
  {
    return function_exists('acf_add_options_page') ? get_fields($page_slug) : null;
  }

  /**
   * ACF options page adder
   * @param string $slug
   * @param string $title
   * @param string $capability
   * @param bool $redirect
   */
  public static function addOptionsPage($slug, $title, $capability = 'edit_posts', $redirect = false)
  {
    if (function_exists('acf_add_options_page')) {
      acf_add_options_page([
        'page_title' => $title,
        'menu_title' => $title,
        'menu_slug' => $slug,
        'capability' => $capability,
        'redirect' => $redirect
      ]);
    }
  }

  /**
   * Enable ACF local json feature (available on ACF Pro only)
   */
  public static function enableLocalJSON()
  {
    if (class_exists('acf')) {
      if (defined('ACF_JSON_AUTOLOAD') && ACF_JSON_AUTOLOAD) {
        add_filter('acf/settings/load_json', function($paths) {
          $paths[0] = get_stylesheet_directory() . '/' . self::JSON_DIR;
          return $paths;
        });
      }
      if (defined('ACF_JSON_AUTOSAVE') && ACF_JSON_AUTOSAVE) {
        add_filter('acf/settings/save_json', function() {
          return get_stylesheet_directory() . '/' . self::JSON_DIR;
        });
      }
    }
  }
}
