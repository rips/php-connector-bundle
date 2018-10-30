<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;

class ApplicationsResponse extends BaseResponse
{
    /** @var ApplicationEntity[] */
    private $applications;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->applications = ApplicationHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ApplicationEntity[]
     */
    public function getApplications()
    {
        return $this->applications;
    }
}
