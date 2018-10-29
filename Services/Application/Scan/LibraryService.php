<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\LibraryBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\LibrariesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\LibraryResponse;

class LibraryService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new LibraryService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all libraries for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return LibrariesResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->getAll($appId, $scanId, $queryParams);

        return new LibrariesResponse($response);
    }

    /**
     * Get library for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $libraryId
     * @param array $queryParams
     * @return LibraryResponse
     */
    public function getById($appId, $scanId, $libraryId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->getById($appId, $scanId, $libraryId, $queryParams);

        return new LibraryResponse($response);
    }

    /**
     * Create a library for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param LibraryBuilder $input
     * @param array $queryParams
     * @return LibraryResponse
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return new LibraryResponse($response);
    }

    /**
     * Update a library for a service
     *
     * @param int $appId
     * @param int $scanId
     * @param int $libraryId
     * @param LibraryBuilder $input
     * @param array $queryParams
     * @return LibraryResponse
     */
    public function update($appId, $scanId, $libraryId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->update($appId, $scanId, $libraryId, $input->toArray(), $queryParams);

        return new LibraryResponse($response);
    }

    /**
     * Delete all libraries
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->deleteAll($appId, $scanId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete a library by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $libraryId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $scanId, $libraryId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->deleteById($appId, $scanId, $libraryId, $queryParams);

        return new BaseResponse($response);
    }
}
