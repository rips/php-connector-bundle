<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;

class ApplicationResponse extends BaseResponse
{
    /** @var ApplicationEntity */
    private $application;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->application = ApplicationHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }
}
