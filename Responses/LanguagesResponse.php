<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\LanguageEntity;
use RIPS\ConnectorBundle\Hydrators\LanguageHydrator;

class LanguagesResponse extends BaseResponse
{
    /** @var LanguageEntity[] */
    private $languages;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->languages = LanguageHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return LanguageEntity[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }
}
