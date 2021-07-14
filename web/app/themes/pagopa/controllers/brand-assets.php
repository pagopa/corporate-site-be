<?php

/**
 * Template Name: Brand Assets
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\BrandAssetsRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = BrandAssetsRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/brand-assets.html.twig', $context);
