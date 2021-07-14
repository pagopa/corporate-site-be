<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\VisualAssets;

class VisualAssetsDTO extends DTO
{
  /**
   * VisualAssetsDTO constructor
   * @param \PagoPA\Entity\VisualAssets $entity
   */
  public function __construct(VisualAssets $entity)
  {
    parent::__construct($entity);
  }

  /**
   * VisualAssetsDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
