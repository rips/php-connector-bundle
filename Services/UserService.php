<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\InputBuilders\User\AddBuilder;
use RIPS\ConnectorBundle\InputBuilders\User\UpdateBuilder;
use RIPS\ConnectorBundle\InputBuilders\User\InviteBuilder;
use RIPS\ConnectorBundle\InputBuilders\User\ResetBuilder;
use RIPS\ConnectorBundle\Entities\UserEntity;

class UserService
{
    /**
     * @var APIService
     */
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
     * @param array $queryParams
     * @return UserEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $users = $this->api->users()->getAll($queryParams);

        return UserHydrator::hydrateCollection($users);
    }

    /**
     * Get a user by id
     *
     * @param int $userId
     * @return UserEntity
     */
    public function getById($userId)
    {
        $user = $this->api->users()->getById($userId);

        return UserHydrator::hydrate($user);
    }

    /**
     * Create a new user
     *
     * @param AddBuilder $input
     * @return UserEntity
     */
    public function create($input)
    {
        $user = $this->api->users()->create($input->toArray());

        return UserHydrator::hydrate($user);
    }

    /**
     * Update existing user
     *
     * @param int $userId
     * @param UpdateBuilder $input
     * @return UserEntity
     */
    public function update($userId, $input)
    {
        $user = $this->api->users()->update($userId, $input->toArray());

        return UserHydrator::hydrate($user);
    }

    /**
     * Delete all users
     *
     * @param array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->users()->deleteAll($queryParams);
    }

    /**
     * Delete user by id
     *
     * @param int $userId
     * @return void
     */
    public function deleteById($userId)
    {
        $this->api->users()->deleteById($userId);
    }

    /**
     * Invite a new user
     *
     * @param InviteBuilder $input
     * @return void
     */
    public function invite($input)
    {
        $this->api->users()->invite($input->toArray());
    }

    /**
     * Request a reset email
     *
     * @param ResetBuilder $input
     * @return UserEntity
     */
    public function reset($input)
    {
        $this->api->users()->reset($input->toArray());
    }

    /**
     * Active a user account
     *
     * @param int $userId
     * @param string $token
     * @return UserEntity
     */
    public function activate($userId, $token)
    {
        $user = $this->api->users()->activate($userId, $token);

        return UserHydrator::hydrate($user);
    }

    /**
     * Confirm email update for user account
     *
     * @param int $userId
     * @param string $token
     * @return UserEntity
     */
    public function confirm($userId, $token)
    {
        $user = $this->api->users()->confirm($userId, $token);

        return UserHydrator::hydrate($user);
    }

    /**
     * Reset user account
     *
     * @param int $userId
     * @param string $token
     * @return UserEntity
     */
    public function confirmReset($userId, $token)
    {
        $user = $this->api->users()->confirmReset($userId, $token);

        return UserHydrator::hydrate($user);
    }
}
