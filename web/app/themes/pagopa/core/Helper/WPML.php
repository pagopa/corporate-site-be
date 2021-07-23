<?php

namespace PagoPA\Helper;

/**
 * Class WPML
 * @package PagoPA\Helper
 */
final class WPML
{
  /**
   * Available languages getter
   * @return array
   */
  public static function getLanguages()
  {
    return function_exists('icl_get_languages') ? array_values(icl_get_languages('skip_missing=0')) : [];
  }
}
