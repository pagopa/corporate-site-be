<?php

/**
 * Template Name: Newsletters
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\NewslettersRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = NewslettersRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/newsletters.html.twig', $context);
