<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\InputBuilders\User\InviteBuilder;

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
     * @param  array $queryParams
     * @return array<UserEntity>
     */
    public function getAll(array $queryParams = [])
    {
        $users = $this->api->users()->getAll($queryParams);

        return UserHydrator::hydrateCollection($users);
    }

    /**
     * Get a user by id
     *
     * @param  int $userId
     * @return UserEntity
     */
    public function getById(int $userId)
    {
        $user = $this->api->users()->getById($userId);

        return UserHydrator::hydrate($user);
    }

    /**
     * Invite a new user
     *
     * @param  InviteBuilder $input
     * @return UserEntity
     */
    public function invite(InviteBuilder $input)
    {
        $user = $this->api->users()->invite($input->toArray());

        return UserHydrator::hydrate($user);
    }

    /**
     * Update a user by id
     *
     * @param int $userId
     * @param UserBuilder $input
     * @return UserEntity
     */
    public function update($userId, UserBuilder $input)
    {
        $user = $this->api->users()->update($userId, $input->toArray());

        return UserHydrator::hydrate($user);
    }
}
