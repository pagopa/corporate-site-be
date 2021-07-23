<?php

use PagoPA\Theme;
use PagoPA\Repository\Repository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = Repository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/page.html.twig', $context);
