<?php

require 'vendor/autoload.php';

use App\Controllers\MainController;
use App\Controllers\SearchController;

// Affichage de la vue princiaple
$controller = new MainController();
$controller->renderView();

// Lorsque l'on soumet le formulaire
if (isset($_REQUEST['form_search']) && $_REQUEST['form_search']['search_submit'] == 'submitted') {
    // On assigne la data du formulaire
    $formData = $_REQUEST['form_search'];

    // Instanciation du controller de recherche
    $searchController = new SearchController();
}