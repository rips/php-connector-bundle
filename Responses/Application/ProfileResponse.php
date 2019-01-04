<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\ProfileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ProfileHydrator;

class ProfileResponse extends BaseResponse
{
    /** @var ProfileEntity */
    private $profile;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->profile = ProfileHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ProfileEntity
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
