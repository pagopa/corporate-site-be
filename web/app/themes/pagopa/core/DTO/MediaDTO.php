<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\Media;

class MediaDTO extends DTO
{
  /**
   * MediaDTO constructor
   * @param \PagoPA\Entity\Media $entity
   */
  public function __construct(Media $entity)
  {
    parent::__construct($entity);
  }

  /**
   * MediaDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
