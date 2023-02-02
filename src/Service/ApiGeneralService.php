<?php

namespace App\Service;

use jcobhams\NewsApi\NewsApi;
use jcobhams\NewsApi\NewsApiException;

class ApiGeneralService
{
    /**
     * @throws NewsApiException
     */
    public function generalArticle()
    {
        $newApi = new NewsApi('0bbc52e16fa6451e8c3354b59dd06f98');
        return $newApi->getTopHeadlines('general');
    }
}