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
     * @param array $queryParams
     * @return UserEntity
     */
    public function getById($userId, array $queryParams = [])
    {
        $user = $this->api->users()->getById($userId, $queryParams);

        return UserHydrator::hydrate($user);
    }

    /**
     * Create a new user
     *
     * @param AddBuilder $input
     * @param array $queryParams
     * @return UserEntity
     */
    public function create($input, array $queryParams = [])
    {
        $user = $this->api->users()->create($input->toArray(), $queryParams);

        return UserHydrator::hydrate($user);
    }

    /**
     * Update existing user
     *
     * @param int $userId
     * @param UpdateBuilder $input
     * @param array $queryParams
     * @return UserEntity
     */
    public function update($userId, $input, array $queryParams = [])
    {
        $user = $this->api->users()->update($userId, $input->toArray(), $queryParams);

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
     * @param array $queryParams
     * @return void
     */
    public function deleteById($userId, array $queryParams = [])
    {
        $this->api->users()->deleteById($userId, $queryParams);
    }

    /**
     * Invite a new user
     *
     * @param InviteBuilder $input
     * @param array $queryParams
     * @return UserEntity
     */
    public function invite($input, array $queryParams = [])
    {
        $user = $this->api->users()->invite($input->toArray(), $queryParams);

        return UserHydrator::hydrate($user);
    }

    /**
     * Request a reset email
     *
     * @param ResetBuilder $input
     * @param array $queryParams
     * @return void
     */
    public function reset($input, array $queryParams = [])
    {
        $this->api->users()->reset($input->toArray(), $queryParams);
    }

    /**
     * Active a user account
     *
     * @param int $userId
     * @param string $token
     * @param array $queryParams
     * @return UserEntity
     */
    public function activate($userId, $token, array $queryParams = [])
    {
        $user = $this->api->users()->activate($userId, $token, $queryParams);

        return UserHydrator::hydrate($user);
    }

    /**
     * Confirm email update for user account
     *
     * @param int $userId
     * @param string $token
     * @param array $queryParams
     * @return UserEntity
     */
    public function confirm($userId, $token, array $queryParams = [])
    {
        $user = $this->api->users()->confirm($userId, $token, $queryParams);

        return UserHydrator::hydrate($user);
    }

    /**
     * Reset user account
     *
     * @param int $userId
     * @param string $token
     * @param array $queryParams
     * @return UserEntity
     */
    public function confirmReset($userId, $token, array $queryParams = [])
    {
        $user = $this->api->users()->confirmReset($userId, $token, $queryParams);

        return UserHydrator::hydrate($user);
    }
}
