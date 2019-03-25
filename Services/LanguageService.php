<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Responses\LanguagesResponse;
use RIPS\ConnectorBundle\Responses\LanguageResponse;

class LanguageService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new LanguageService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get a collection of language objects
     *
     * @param array $queryParams
     * @return LanguagesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->languages()->getAll($queryParams);

        return new LanguagesResponse($response);
    }

    /**
     * Get a language by id
     *
     * @param int $languageId
     * @param array $queryParams
     * @return LanguageResponse
     */
    public function getById($languageId, array $queryParams = [])
    {
        $response = $this->api->languages()->getById($languageId, $queryParams);

        return new LanguageResponse($response);
    }
}
