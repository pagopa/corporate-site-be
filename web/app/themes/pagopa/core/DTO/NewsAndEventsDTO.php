<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\NewsAndEvents;

class NewsAndEventsDTO extends DTO
{
  /**
   * NewsAndEventsDTO constructor
   * @param \PagoPA\Entity\NewsAndEvents $entity
   */
  public function __construct(NewsAndEvents $entity)
  {
    parent::__construct($entity);
  }

  /**
   * NewsAndEventsDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
