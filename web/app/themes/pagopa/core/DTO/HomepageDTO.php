<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\Homepage;

class HomepageDTO extends DTO
{
  /**
   * HomepageDTO constructor
   * @param \PagoPA\Entity\Homepage $entity
   */
  public function __construct(Homepage $entity)
  {
    parent::__construct($entity);
  }

  /**
   * HomepageDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
