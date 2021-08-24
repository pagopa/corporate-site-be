<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class Announcements
 * @package PagoPA\Entity
 */
class Announcements extends Entity
{
  /**
   * Announcements constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
