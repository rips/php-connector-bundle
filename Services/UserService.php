<?php

namespace RIPS\ConnectorBundle\Services;

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
        return $this->api->users()->getAll();
    }

    /**
     * Get a user by id
     *
     * @param int $userId
     * @return
     */
    public function getById(int $userId)
    {
        return $this->api->users()->getById($userId);
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
