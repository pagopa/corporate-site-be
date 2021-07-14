<?php

/**
 * Template Name: Media
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\MediaRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = MediaRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/media.html.twig', $context);
