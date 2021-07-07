<?php

namespace PagoPA;

use PagoPA\Helper\FeaturesLoader;
use PagoPA\Helper\Router;
use PagoPA\Helper\Navigation;
use PagoPA\Helper\ACF;
use PagoPA\Helper\WPML;
use PagoPA\Helper\TinyMCE;

use Timber\Timber;
use Wordrobe\Helper\Config;

/**
 * Class Theme
 * @package PagoPA
 */
final class Theme {

  const FEATURES_PATHS = ['post-types', 'taxonomies', 'terms/**', 'services/**', 'services/**/**', 'menu', 'shortcodes/**'];
  const TEMPLATES_DIR = 'templates';
  const SUPPORTS = ['custom-logo', 'title-tag', 'post-thumbnails', 'html5'];

  /**
   * Theme instance
   */
  private static $instance;

  /**
   * Theme's Timber instance
   * @var Timber $timber
   */
  private $timber;

  /**
   * Theme's global context
   * @var array $context
   */
  private $context;

  /**
   * Theme constructor.
   */
  private function __construct()
  {
    $this->timber = new Timber();
    $this->context = $this->buildContext();
    $this->setup();
  }

  /**
   * Initializes Theme
   */
  private function setup()
  {
    // loading theme's features
    FeaturesLoader::loadFrom(self::FEATURES_PATHS);
    // customizing Timber
    Timber::$dirname = self::TEMPLATES_DIR;
    // customizing routing
    Router::init();
    // adding theme support
    foreach (self::SUPPORTS as $feature) {
      add_theme_support($feature);
    }
    // cleaning admin menu
    // Navigation::cleanAdminMenu(['edit-comments.php']);
    // customizing tinymce
    TinyMCE::enableCustomFormats();
    // customizing ACF
    ACF::enableLocalJSON();
    ACF::addOptionsPage('options', __('Theme Options', 'pagopa'));
  }

  /**
   * Builds context
   * @return array
   */
  private function buildContext()
  {
    $context = Timber::get_context();
    return [
      'env' => defined('WP_ENV') ? WP_ENV : 'production',
      'request' => [
        'post' => $context['request']->post,
        'get' => $context['request']->get
      ],
      'lang' => $context['site']->language,
      'locale' => str_replace('-', '_', $context['site']->language),
      'languages' => self::getLanguages(),
      'meta' => [
        'title' => $context['wp_title'],
        'description' => $context['site']->description,
        'charset' => $context['site']->charset
      ],
      'url' => $context['site']->url,
      'pingback' => $context['site']->pingback,
      'rdf' => $context['site']->rdf,
      'rss' => $context['site']->rss,
      'rss2' => $context['site']->rss2,
      'atom' => $context['site']->atom,
      'theme' => [
        'uri' => $context['theme']->uri,
        'textdomain' => Config::get('text-domain')
      ],
      'user' => [
        'id' => $context['user']->id,
        'avatar' => $context['user']->avatar->abs_url,
        'firstName' => $context['user']->first_name,
        'lastName' => $context['user']->last_name,
        'nickname' => $context['user']->nickname,
        'nicename' => $context['user']->user_nicename,
        'email' => $context['user']->user_email
      ],
      'options' => self::getOptions()
    ];
  }

  /**
   * Theme's context getter
   * @return array
   */
  public static function getContext()
  {
    return self::$instance ? self::$instance->context : null;
  }

  /**
   * Adds a property to Theme's context
   * @param string $key
   * @param mixed $value
   */
  public static function addToContext($key, $value)
  {
    if (self::$instance) {
      self::$instance->context[$key] = $value;
    }
  }

  /**
   * Theme's options getter
   * @return array
   */
  public static function getOptions()
  {
    return ACF::getOptions('option');
  }

  /**
   * Theme's languages getter
   * @return array
   */
  public static function getLanguages()
  {
    if (!function_exists('icl_object_id')) {
      return [];
    }

    global $sitepress;
    $default_language = $sitepress->get_default_language();
    return array_map(function($language) use ($default_language) {
      $language['default'] = $language['code'] === $default_language;
      return $language;
    }, WPML::getLanguages());
  }

  /**
   * Bootstraps Theme
   */
  public static function init()
  {
    if (!self::$instance) {
      self::$instance = new self();
    }
  }

  /**
   * Theme instance getter
   * @return mixed
   */
  public static function get()
  {
    return self::$instance;
  }
}
