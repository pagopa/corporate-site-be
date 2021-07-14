<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\BrandAssets;

class BrandAssetsDTO extends DTO
{
  /**
   * BrandAssetsDTO constructor
   * @param \PagoPA\Entity\BrandAssets $entity
   */
  public function __construct(BrandAssets $entity)
  {
    parent::__construct($entity);
  }

  /**
   * BrandAssetsDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
