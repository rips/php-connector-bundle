<?php


namespace RIPS\ConnectorBundle\Services\Application\Scan;


class IssueService
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
    public function getAll()
    {

    }
}