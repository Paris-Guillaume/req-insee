<?php

namespace App\Controllers;

class MainController extends BaseContoller {

    public function renderView() {
        echo $this->twig->render('view.html.twig');
    }
}