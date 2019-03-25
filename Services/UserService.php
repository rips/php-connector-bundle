<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\UserBuilder;
use RIPS\ConnectorBundle\InputBuilders\User\ResetBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\UsersResponse;
use RIPS\ConnectorBundle\Responses\UserResponse;

class UserService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new UserService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get a collection of user objects
     *
     * @param array $queryParams
     * @return UsersResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->users()->getAll($queryParams);

        return new UsersResponse($response);
    }

    /**
     * Get a user by id
     *
     * @param int $userId
     * @param array $queryParams
     * @return UserResponse
     */
    public function getById($userId, array $queryParams = [])
    {
        $response = $this->api->users()->getById($userId, $queryParams);

        return new UserResponse($response);
    }

    /**
     * Create a new user
     *
     * @param UserBuilder $input
     * @param array $queryParams
     * @return UserResponse
     */
    public function create($input, array $queryParams = [])
    {
        $response = $this->api->users()->create($input->toArray(), $queryParams);

        return new UserResponse($response);
    }

    /**
     * Update existing user
     *
     * @param int $userId
     * @param UserBuilder $input
     * @param array $queryParams
     * @return UserResponse
     */
    public function update($userId, $input, array $queryParams = [])
    {
        $response = $this->api->users()->update($userId, $input->toArray(), $queryParams);

        return new UserResponse($response);
    }

    /**
     * Delete all users
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->users()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete user by id
     *
     * @param int $userId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($userId, array $queryParams = [])
    {
        $response = $this->api->users()->deleteById($userId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Invite a new user
     *
     * @param UserBuilder $input
     * @param array $queryParams
     * @return UserResponse
     */
    public function invite($input, array $queryParams = [])
    {
        $response = $this->api->users()->invite($input->toArray(), $queryParams);

        return new UserResponse($response);
    }

    /**
     * Request a reset email
     *
     * @param ResetBuilder $input
     * @param array $queryParams
     * @return UserResponse
     */
    public function reset($input, array $queryParams = [])
    {
        $response = $this->api->users()->reset($input->toArray(), $queryParams);

        return new UserResponse($response);
    }

    /**
     * Active a user account
     *
     * @param int $userId
     * @param string $token
     * @param array $queryParams
     * @return UserResponse
     */
    public function activate($userId, $token, array $queryParams = [])
    {
        $response = $this->api->users()->activate($userId, $token, $queryParams);

        return new UserResponse($response);
    }

    /**
     * Confirm email update for user account
     *
     * @param int $userId
     * @param string $token
     * @param array $queryParams
     * @return UserResponse
     */
    public function confirm($userId, $token, array $queryParams = [])
    {
        $response = $this->api->users()->confirm($userId, $token, $queryParams);

        return new UserResponse($response);
    }

    /**
     * Reset user account
     *
     * @param int $userId
     * @param string $token
     * @param array $queryParams
     * @return UserResponse
     */
    public function confirmReset($userId, $token, array $queryParams = [])
    {
        $response = $this->api->users()->confirmReset($userId, $token, $queryParams);

        return new UserResponse($response);
    }
}
