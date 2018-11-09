<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\ProfileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ProfileHydrator;

class ProfilesResponse extends BaseResponse
{
    /** @var ProfileEntity[] */
    private $profiles;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->profiles = ProfileHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ProfileEntity[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}
