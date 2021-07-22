<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class BrandAssets
 * @package PagoPA\Entity
 */
class BrandAssets extends Entity
{
  /**
   * BrandAssets constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
