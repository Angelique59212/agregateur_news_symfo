<?php

namespace App\Service;

use jcobhams\NewsApi\NewsApi;

class ApiAppleService
{
    public function appleArticle()
    {
        $newApi = new NewsApi('0bbc52e16fa6451e8c3354b59dd06f98');
        return $newApi->getTopHeadlines('apple');
    }
}