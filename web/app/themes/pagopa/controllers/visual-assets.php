<?php

/**
 * Template Name: Visual Assets
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\VisualAssetsRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = VisualAssetsRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/visual-assets.html.twig', $context);
