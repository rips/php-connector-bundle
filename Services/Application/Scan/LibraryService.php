<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\LibraryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\LibraryHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\LibraryBuilder;
use RIPS\ConnectorBundle\Services\APIService;

class LibraryService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new OrgService instance
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
     * @return LibraryEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $libraries = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->getAll($appId, $scanId, $queryParams);

        return LibraryHydrator::hydrateCollection($libraries->getDecodedData());
    }

    /**
     * Get library for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $libraryId
     * @param array $queryParams
     * @return LibraryEntity
     */
    public function getById($appId, $scanId, $libraryId, array $queryParams = [])
    {
        $library = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->getById($appId, $scanId, $libraryId, $queryParams);

        return LibraryHydrator::hydrate($library->getDecodedData());
    }

    /**
     * Create a library for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param LibraryBuilder $input
     * @param array $queryParams
     * @return LibraryEntity
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $library = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return LibraryHydrator::hydrate($library->getDecodedData());
    }

    /**
     * Update a library for a service
     *
     * @param int $appId
     * @param int $scanId
     * @param int $libraryId
     * @param LibraryBuilder $input
     * @param array $queryParams
     * @return LibraryEntity
     */
    public function update($appId, $scanId, $libraryId, $input, array $queryParams = [])
    {
        $library = $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->update($appId, $scanId, $libraryId, $input->toArray(), $queryParams);

        return LibraryHydrator::hydrate($library->getDecodedData());
    }

    /**
     * Delete all libraries
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $scanId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->deleteAll($appId, $scanId, $queryParams);
    }

    /**
     * Delete a library by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $libraryId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $scanId, $libraryId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->libraries()
            ->deleteById($appId, $scanId, $libraryId, $queryParams);
    }
}
