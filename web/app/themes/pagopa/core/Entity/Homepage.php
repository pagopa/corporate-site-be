<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class Homepage
 * @package PagoPA\Entity
 */
class Homepage extends Entity
{
  /**
   * Homepage constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
