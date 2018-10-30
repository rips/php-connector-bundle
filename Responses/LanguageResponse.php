<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\LanguageEntity;
use RIPS\ConnectorBundle\Hydrators\LanguageHydrator;

class LanguageResponse extends BaseResponse
{
    /** @var LanguageEntity */
    private $language;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->language = LanguageHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return LanguageEntity
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
