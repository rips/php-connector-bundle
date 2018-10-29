<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\UploadsResponse;
use RIPS\ConnectorBundle\Responses\Application\UploadResponse;

class UploadService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new UploadService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all uploads for an application
     *
     * @param int|null $appId
     * @param array $queryParams
     * @return UploadsResponse
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $response = $this->api->applications()->uploads()->getAll($appId, $queryParams);

        return new UploadsResponse($response);
    }

    /**
     * Get upload for application by id
     *
     * @param int $appId
     * @param int $uploadId
     * @param array $queryParams
     * @return UploadResponse
     */
    public function getById($appId, $uploadId, array $queryParams = [])
    {
        $response = $this->api->applications()->uploads()->getById($appId, $uploadId, $queryParams);

        return new UploadResponse($response);
    }

    /**
     * Upload a new file
     *
     * @param int $appId
     * @param string $fileName
     * @param string $filePath
     * @param array $queryParams
     * @return UploadResponse
     */
    public function create($appId, $fileName, $filePath, array $queryParams = [])
    {
        $response = $this->api->applications()->uploads()->create($appId, $fileName, $filePath, $queryParams);

        return new UploadResponse($response);
    }

    /**
     * Delete all uploads for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->uploads()->deleteAll($appId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete upload for an application by id
     *
     * @param int $appId
     * @param int $uploadId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $uploadId, array $queryParams = [])
    {
        $response = $this->api->applications()->uploads()->deleteById($appId, $uploadId, $queryParams);

        return new BaseResponse($response);
    }
}
