<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\PressRelease;

class PressReleaseDTO extends DTO
{
  /**
   * PressReleaseDTO constructor
   * @param \PagoPA\Entity\PressRelease $entity
   */
  public function __construct(PressRelease $entity)
  {
    parent::__construct($entity);
  }

  /**
   * PressReleaseDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
