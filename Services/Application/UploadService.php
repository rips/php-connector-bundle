<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\UploadHydrator;
use RIPS\ConnectorBundle\Entities\Application\UploadEntity;

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
     * @param int $appId
     * @param array $queryParams
     * @return UploadEntity[]
     */
    public function getAll($appId, array $queryParams = [])
    {
        $uploads = $this->api->applications()->uploads()->getAll($appId, $queryParams);

        return UploadHydrator::hydrateCollection($uploads);
    }

    /**
     * Get upload for application by id
     *
     * @param int $appId
     * @param int $uploadId
     * @param array $queryParams
     * @return UploadEntity
     */
    public function getById($appId, $uploadId, array $queryParams = [])
    {
        $upload = $this->api->applications()->uploads()->getById($appId, $uploadId, $queryParams);

        return UploadHydrator::hydrate($upload);
    }

    /**
     * Upload a new file
     *
     * @param int $appId
     * @param string $filename
     * @param string $filepath
     * @param array $queryParams
     * @return UploadEntity
     */
    public function create($appId, $filename, $filepath, array $queryParams = [])
    {
        $upload = $this->api->applications()->uploads()->create($appId, $filename, $filepath, $queryParams);

        return UploadHydrator::hydrate($upload);
    }

    /**
     * Delete all uploads for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $this->api->applications()->uploads()->deleteAll($appId, $queryParams);
    }

    /**
     * Delete upload for an application by id
     *
     * @param int $appId
     * @param int $uploadId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $uploadId, array $queryParams = [])
    {
        $this->api->applications()->uploads()->deleteById($appId, $uploadId, $queryParams);
    }
}
