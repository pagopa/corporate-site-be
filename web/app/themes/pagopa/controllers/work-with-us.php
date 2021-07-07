<?php

/**
 * Template Name: Work With Us
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\WorkWithUsRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = WorkWithUsRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/work-with-us.html.twig', $context);
