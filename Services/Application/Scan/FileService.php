<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;

class FileService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new IssueService instance
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
     * @return FileEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $files = $this->api
            ->applications()
            ->scans()
            ->files()
            ->getAll($appId, $scanId, $queryParams);

        return FileHydrator::hydrateCollection($files->getDecodedData());
    }

    /**
     * Get file for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $fileId
     * @param array $queryParams
     * @return FileEntity
     */
    public function getById($appId, $scanId, $fileId, array $queryParams = [])
    {
        $file = $this->api
            ->applications()
            ->scans()
            ->files()
            ->getById($appId, $scanId, $fileId, $queryParams);

        return FileHydrator::hydrate($file->getDecodedData());
    }

    /**
     * Delete the source code of a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return void
     */
    public function delete($appId, $scanId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->files()
            ->delete($appId, $scanId, $queryParams);
    }
}
