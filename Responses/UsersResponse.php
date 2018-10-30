<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class UsersResponse extends BaseResponse
{
    /** @var UserEntity[] */
    private $users;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->users = UserHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return UserEntity[]
     */
    public function getUsers()
    {
        return $this->users;
    }
}
