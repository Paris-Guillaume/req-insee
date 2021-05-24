<?php

use PHPUnit\Framework\TestCase;
use App\Services\SearchService;

final class SearchTest extends TestCase
{
    public function formDataProvider() {
        return [
            "un numéro de siret" => [12345678901234, 'siret'],
            "un numéro de siren" => [123456789, 'siren'],
            "une raison sociale" => ['Lextenso', 'denominationUniteLegale'],
            "une chaine vide" => ['', ''],
        ];
    }

    /**
     * @dataProvider formDataProvider
     * @param $search
     * @param $expected
     */
    public function testReturnOfTypeOfSearch($search, $expected) {
        $searchService = new SearchService();
        $this->assertSame($expected, $searchService->defineTypeOfSearch($search));
    }
}