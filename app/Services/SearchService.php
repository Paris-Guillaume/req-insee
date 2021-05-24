<?php

namespace App\Services;

class SearchService
{
    /**
     * @param string $search
     * @return string
     */
    public function defineTypeOfSearch($search) {
        $typeOfSearch = '';

        if (is_numeric($search)) {
            // Si la chaine contient 9 nombre alors c'est un siret
            if (preg_match('/^\d{9}$/', strval($search)) == 1) {
                $typeOfSearch = 'siren';
            } else if (preg_match('/^\d{14}$/', $search) == 1) {
                $typeOfSearch = 'siret';
            }
        } else if (strlen($search) > 0 ) {
            $typeOfSearch = 'raisonSociale';
        }

        return $typeOfSearch;
    }
}
