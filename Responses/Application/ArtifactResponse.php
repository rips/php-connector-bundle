<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Application\ArtifactEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ArtifactHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class ArtifactResponse extends BaseResponse
{
    /** @var ArtifactEntity */
    private $artifact;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->artifact = ArtifactHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ArtifactEntity
     */
    public function getArtifact()
    {
        return $this->artifact;
    }
}
