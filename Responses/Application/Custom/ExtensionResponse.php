<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\ExtensionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ExtensionHydrator;

class ExtensionResponse extends BaseResponse
{
    /** @var ExtensionEntity */
    private $extension;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->extension = ExtensionHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ExtensionEntity
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
