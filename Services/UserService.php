<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class UserService
{
    // @var API
    protected $api;

    /**
     * Initialize new UserService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get a collection of user objects
     *
     * @return Array<>
     */
    public function getAll()
    {
        $users = $this->api->users()->getAll();

        return UserHydrator::hydrateCollection($users);
    }

    /**
     * Get a user by id
     *
     * @param int $userId
     * @return
     */
    public function getById(int $userId)
    {
        $user = $this->api->users()->getById($userId);

        return UserHydrator::hydrate($user);
    }

    /**
     * Invite a new user
     *
     * @param array $input
     * @return
     */
    public function invite(array $input)
    {
        return $this->api->users()->invite($input);
    }
}
