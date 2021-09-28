<?php

/**
 * Template Name: News And Events
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\NewsAndEventsRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = NewsAndEventsRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/news-and-events.html.twig', $context);
