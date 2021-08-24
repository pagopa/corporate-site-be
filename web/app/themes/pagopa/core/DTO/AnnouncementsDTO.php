<?php

namespace PagoPA\DTO;

use Wordrobe\Feature\DTOInterface;
use PagoPA\Entity\Announcements;

class AnnouncementsDTO extends DTO
{
  /**
   * AnnouncementsDTO constructor
   * @param \PagoPA\Entity\Announcements $entity
   */
  public function __construct(Announcements $entity)
  {
    parent::__construct($entity);
  }

  /**
   * AnnouncementsDTO's data getter
   * @return array
   */
  public function getData()
  {
    return parent::getData();
  }
}
