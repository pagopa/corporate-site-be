<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class VisualAssets
 * @package PagoPA\Entity
 */
class VisualAssets extends Entity
{
  /**
   * VisualAssets constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
