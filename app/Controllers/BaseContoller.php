<?php

namespace App\Controllers;

use Curl\Curl;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Class BaseContoller
 * @package App\Controller
 * Controller de base avec les éléments par défaut nécessaire au fonctionnement d'un controller
 */
Abstract class BaseContoller {
    protected $twig;
    protected $curl;

    public function __construct()
    {
        // Instanciation de la classe CURL pour faciliter les appels à une api
        $this->curl = new Curl();

        // Configration de twig
        $loader = new FilesystemLoader('app/Templates/');
        $this->twig = new Environment($loader);
    }
}