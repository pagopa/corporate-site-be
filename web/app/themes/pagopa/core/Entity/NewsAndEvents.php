<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class NewsAndEvents
 * @package PagoPA\Entity
 */
class NewsAndEvents extends Entity
{
  /**
   * NewsAndEvents constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
