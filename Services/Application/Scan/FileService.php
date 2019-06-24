<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Responses\Application\Scan\FileBrowserResponse;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\FilesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\FileResponse;

class FileService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new FileService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all files for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return FilesResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->files()
            ->getAll($appId, $scanId, $queryParams);

        return new FilesResponse($response);
    }

    public function browsePath($appId, $scanId, $path)
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->files()
            ->getBrowser($appId, $scanId, $path);

        return new FileBrowserResponse($response);
    }

    /**
     * Get file for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $fileId
     * @param array $queryParams
     * @return FileResponse
     */
    public function getById($appId, $scanId, $fileId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->files()
            ->getById($appId, $scanId, $fileId, $queryParams);

        return new FileResponse($response);
    }

    /**
     * Delete the source code of a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function delete($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->files()
            ->delete($appId, $scanId, $queryParams);

        return new BaseResponse($response);
    }
}
