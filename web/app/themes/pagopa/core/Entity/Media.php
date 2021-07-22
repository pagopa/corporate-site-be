<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class Media
 * @package PagoPA\Entity
 */
class Media extends Entity
{
  /**
   * Media constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
