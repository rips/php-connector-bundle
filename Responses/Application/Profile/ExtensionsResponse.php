<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\ExtensionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\ExtensionHydrator;

class ExtensionsResponse extends BaseResponse
{
    /** @var ExtensionEntity[] */
    private $extensions;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->extensions = ExtensionHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ExtensionEntity[]
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
}
