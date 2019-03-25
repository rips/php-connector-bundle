<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\LogBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\LogsResponse;
use RIPS\ConnectorBundle\Responses\LogResponse;

class LogService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new LogService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all logs
     *
     * @param array $queryParams
     * @return LogsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->logs()->getAll($queryParams);

        return new LogsResponse($response);
    }

    /**
     * Get a log by id
     *
     * @param int $logId
     * @param array $queryParams
     * @return LogResponse
     */
    public function getById($logId, array $queryParams = [])
    {
        $response = $this->api->logs()->getById($logId, $queryParams);

        return new LogResponse($response);
    }

    /**
     * Create a new log
     *
     * @param LogBuilder $input
     * @param array $queryParams
     * @return LogResponse
     */
    public function create(LogBuilder $input, array $queryParams = [])
    {
        $response = $this->api->logs()->create($input->toArray(), $queryParams);

        return new LogResponse($response);
    }

    /**
     * Delete logs older than a week
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function delete(array $queryParams = [])
    {
        $response = $this->api->logs()->delete($queryParams);

        return new BaseResponse($response);
    }
}
