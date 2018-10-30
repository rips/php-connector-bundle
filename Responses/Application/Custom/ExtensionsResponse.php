<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\ExtensionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ExtensionHydrator;

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
    public function getExtension()
    {
        return $this->extensions;
    }
}
