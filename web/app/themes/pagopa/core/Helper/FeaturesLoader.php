<?php

namespace PagoPA\Helper;

/**
 * Class FeaturesLoader
 * @package PagoPA\Helper
 */
final class FeaturesLoader
{
  /**
   * Loads features from paths
   * @param array $paths
   */
  public static function loadFrom(array $paths)
  {
    foreach ($paths as $path) {
      $features = glob(dirname(__DIR__) . '/' . $path . '/*.php');

      foreach ($features as $feature) {
        require_once $feature;
      }
    }
  }
}