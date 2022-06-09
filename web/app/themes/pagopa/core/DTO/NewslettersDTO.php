<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\Newsletters;

class NewslettersDTO extends DTO
{
  /**
   * NewslettersDTO constructor
   * @param \PagoPA\Entity\Newsletters $entity
   */
  public function __construct(Newsletters $entity)
  {
    parent::__construct($entity);
  }

  /**
   * NewslettersDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
