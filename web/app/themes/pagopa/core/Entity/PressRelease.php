<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class PressRelease
 * @package PagoPA\Entity
 */
class PressRelease extends Entity
{
  /**
   * PressRelease constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
