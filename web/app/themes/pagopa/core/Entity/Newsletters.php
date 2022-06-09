<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class Newsletters
 * @package PagoPA\Entity
 */
class Newsletters extends Entity
{
  /**
   * Newsletters constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
