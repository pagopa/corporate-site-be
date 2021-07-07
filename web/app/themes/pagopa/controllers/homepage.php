<?php

/**
 * Template Name: Homepage
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\HomepageRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = HomepageRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/homepage.html.twig', $context);
