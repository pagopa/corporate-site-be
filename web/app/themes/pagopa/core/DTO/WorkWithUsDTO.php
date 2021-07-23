<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\WorkWithUs;

class WorkWithUsDTO extends DTO
{
  /**
   * WorkWithUsDTO constructor
   * @param \PagoPA\Entity\WorkWithUs $entity
   */
  public function __construct(WorkWithUs $entity)
  {
    parent::__construct($entity);
  }

  /**
   * WorkWithUsDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
