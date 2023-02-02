<?php

namespace App\Service;

use jcobhams\NewsApi\NewsApiException;

class NewAgregatorService
{
    private ApiGeneralService $apiGeneralService;
    private ApiTeslaService $apiTeslaService;
    private ApiAppleService $apiAppleService;

    public function __construct(ApiGeneralService $generalService, ApiTeslaService $teslaService, ApiAppleService $appleService) {
        $this->apiGeneralService = $generalService;
        $this->apiTeslaService = $teslaService;
        $this->apiAppleService = $appleService;
    }

    /**
     * @throws NewsApiException
     */
    public function getGeneralArticles () {
        return $this->apiGeneralService->generalArticle();
    }

    public function getTeslaArticles() {
        return $this->apiTeslaService->teslaArticle();
    }

    public function getAppleService() {
        return $this->apiAppleService->appleArticle();
    }
}