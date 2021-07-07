<?php

namespace PagoPA\Entity;

use Timber\Post;

/**
 * Class WorkWithUs
 * @package PagoPA\Entity
 */
class WorkWithUs extends Entity
{
  /**
   * WorkWithUs constructor
   * @param \Timber\Post $post
   */
  public function __construct(Post $post)
  {
    parent::__construct($post);
  }
}
