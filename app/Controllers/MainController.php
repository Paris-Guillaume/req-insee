<?php

namespace App\Controllers;

use App\Services\SearchService;

class MainController extends BaseContoller {
    private $searchService;

    public function __construct()
    {
        parent::__construct();
        $this->searchService = new SearchService();
    }

    public function renderView() {
        return $this->twig->render('view.html.twig');
    }

    public function renderSearchResult($formData) {
        $search = $formData['search_companie'];
        $searchType = $this->searchService->defineTypeOfSearch($search);
        $result = $this->searchService->searchCompanie($search);

        return $this->twig->render('view.html.twig', [
            'form_data' => $formData,
            'search_type' => $searchType,
            'search_result' => $result,
        ]);
    }
}