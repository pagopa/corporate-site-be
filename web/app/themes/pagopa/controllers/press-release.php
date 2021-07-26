<?php

/**
 * Template Name: Press Release
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\PressReleaseRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = PressReleaseRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/press-release.html.twig', $context);
