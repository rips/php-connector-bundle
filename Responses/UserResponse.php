<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class UserResponse extends BaseResponse
{
    /** @var UserEntity */
    private $user;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->user = UserHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }
}
