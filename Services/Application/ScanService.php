<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ConcatHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\ScanBuilder;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\CustomFunctionBuilder;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\CustomClassBuilder;

class ScanService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new ScanService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all Scans
     *
     * @param int|null $appId
     * @param array $queryParams
     * @return ScanEntity[]
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $scans = $this->api->scans()->getAll($appId, $queryParams);

        return ScanHydrator::hydrateCollection($scans);
    }

    /**
     * Get Scan by ID
     *
     * @param int $appId
     * @param int $scanId
     * @return ScanEntity
     */
    public function getById($appId, $scanId)
    {
        $scan = $this->api->scans()->getById($appId, $scanId);

        return ScanHydrator::hydrate($scan);
    }

    /**
     * Get Stats
     *
     * @param int $applicationID
     * @param int $scanID
     * @return stdClass
     */
    public function getStats($applicationID, $scanID)
    {
        $stats = $this->api->scans()->getStatsById($applicationID, $scanID);

        return $stats;
    }

    /**
     * Get custom classes for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return CustomClassEntity[]
     */
    public function getAllClasses($appId, $scanId, array $queryParams = [])
    {
        $classes = $this->api->scans()->getAllClasses($appId, $scanId, $queryParams);

        return CustomClassHydrator::hydrate($classes);
    }

    /**
     * Get custom class for a scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $classId
     * @return CustomClassEntity
     */
    public function getClassById($appId, $scanId, $classId)
    {
        $class = $this->api->scans()->getClassById($appId, $scanId, $classId);

        return CustomClassHydrator::hydrate($class);
    }

    /**
     * Get comparison for scan
     *
     * @param int $appId
     * @param int $scanId
     * @return stdClass
     */
    public function getComparision($appId, $scanId)
    {
        $comparison = $this->api->scans()->getComparision($appId, $scanId);

        return $comparison;
    }

    /**
     * Get all concats for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return ConcatEntity[]
     */
    public function getAllConcats($appId, $scanId, array $queryParams = [])
    {
        $concats = $this->api->scans()->getAllConcats($appId, $scanId, $queryParams);

        return ConcatHydrator::hydrateCollection($concats);
    }

    /**
     * Get a concat for a scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $concatId
     * @return ConcatEntity
     */
    public function getConcatByid($appId, $scanId, $concatId)
    {
        $concat = $this->api->scans()->getConcatByid($appId, $scanId, $concatId);

        return ConcatHydrator::hydrate($concat);
    }

    /**
     * Get all files for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return FileEntity[]
     */
    public function getAllFiles($appId, $scanId, array $queryParams = [])
    {
        $files = $this->api->scans()->getAllFiles($appId, $scanId, $queryParams);

        return FileHydrator::hydrateCollection($files);
    }

    /**
     * Get file for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $fileId
     * @return FileEntity
     */
    public function getFileById($appId, $scanId, $fileId)
    {
        $file = $this->api->scans()->getFileById($appId, $scanId, $fileId);

        return FileHydrator::hydrate($file);
    }

    /**
     * Get all custom functions for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return CustomFunctionEntity[]
     */
    public function getAllFunctions($appId, $scanId, array $queryParams = [])
    {
        $functions = $this->api->scans()->getAllFunctions($appId, $scanId, $queryParams);

        return CustomFunctionHydrator::hydrateCollection($functions);
    }

    /**
     * Get a custom function for a scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $functionId
     * @return CustomFunctionEntity
     */
    public function getFunctionById($appId, $scanId, $fileId)
    {
        $file = $this->api->scans()->getFunctionById($appId, $scanId, $fileId);

        return CustomFunctionHydrator::hydrate($function);
    }

    /**
     * Create custom class for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param CustomClassBuilder $input
     * @return CustomClassEntity
     */
    public function createClass($appId, $scanId, CustomClassBuilder $input)
    {
        $class = $this->api->scans()->createClass($appId, $scanId, $input->toArray());

        return CustomClassHydrator::hydrate($class);
    }

    /**
     * Create custom function for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param CustomFunctionBuilder $input
     * @return CustomFunctionEntity
     */
    public function createFunction($appId, $scanId, CustomFunctionBuilder $input)
    {
        $function = $this->api->scans()->createFunction($appId, $scanId, $input->toArray());

        return CustomFunctionHydrator::hydrate($function);
    }

    /**
     * Create a new scan
     *
     * @param int $appId
     * @param ScanBuilder $input
     * @return ScanEntity
     */
    public function create($appId, ScanBuilder $input)
    {
        $scan = $this->api->scans()->create($appId, $input->toArray());

        return ScanHydrator::hydrate($scan);
    }

    /**
     * Update an existing scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param ScanBuilder $input
     * @return ScanEntity
     */
    public function update($appId, $scanId, ScanBuilder $input)
    {
        $scan = $this->api->scans()->update($appId, $scanId, $input->toArray());

        return ScanHydrator::hydrate($scan);
    }

    /**
     * Delete all scans
     *
     * @param int $appId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $this->api->scans()->deleteAll($appId, $queryParams);
    }

    /**
     * Delete a scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @return void
     */
    public function deleteById($appId, $scanId)
    {
        $this->api->scans()->deleteById($appId, $scanId);
    }

    /**
     * Block until a scan is finished
     *
     * @param int $appId
     * @param int $scanId
     * @param int $waitTime - Optional time to wait in seconds. Waits indefinitely if 0
     * @param int $sleepTime - Time to wait between scan compoletion checks
     * @return void
     * @throws \Exception if scan does not finish in time
     */
    public function blockUntilDone($appId, $scanId, $waitTime = 0, $sleepTime = 5)
    {
        $this->api->scans()->blockUntilDone($appId, $scanId, $waitTime, $sleepTime);
    }
}
