<?php

/**
 * Template Name: Announcements
 * @package WordPress
 * @subpackage PagoPA
 */

use PagoPA\Theme;
use PagoPA\Repository\AnnouncementsRepository;
use Timber\Timber;

$context = Theme::getContext();
$context['data'] = AnnouncementsRepository::getFormattedData();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    wp_send_json($context);
}

Timber::render('templates/views/announcements.html.twig', $context);
