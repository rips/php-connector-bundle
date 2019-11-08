<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\ArtifactEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ArtifactHydrator;

class ArtifactsResponse extends BaseResponse
{
    /** @var ArtifactEntity[] */
    private $artifacts;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->artifacts = ArtifactHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ArtifactEntity[]
     */
    public function getArtifacts()
    {
        return $this->artifacts;
    }
}
