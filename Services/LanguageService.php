<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Entities\LanguageEntity;
use RIPS\ConnectorBundle\Hydrators\LanguageHydrator;

class LanguageService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new LanguageService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get a collection of language objects
     *
     * @param array $queryParams
     * @return LanguageEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $languages = $this->api->languages()->getAll($queryParams);

        return LanguageHydrator::hydrateCollection($languages->getDecodedData());
    }

    /**
     * Get a language by id
     *
     * @param int $languageId
     * @param array $queryParams
     * @return LanguageEntity
     */
    public function getById($languageId, array $queryParams = [])
    {
        $language = $this->api->languages()->getById($languageId, $queryParams);

        return LanguageHydrator::hydrate($language->getDecodedData());
    }
}
