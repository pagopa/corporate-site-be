<?php

namespace PagoPA\Repository;

class WorkWithUsRepository extends Repository
{
  /**
   * @var string $base_query
   */
  protected static $base_query = ['post_type' => 'page', 'post_status' => 'publish', 'suppress_filters' => 0, 'meta_query' => [['key' => '_wp_page_template', 'value' => 'controllers/work-with-us.php']]];

  /**
   * @var string $entity_class
   */
  protected static $entity_class = '\PagoPA\Entity\WorkWithUs';

  /**
   * @var string $dto_class
   */
  protected static $dto_class = '\PagoPA\DTO\WorkWithUsDTO';
}
