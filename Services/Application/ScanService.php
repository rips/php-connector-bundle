<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\ScanBuilder;
use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;
use RIPS\ConnectorBundle\Responses\Application\ScansResponse;
use RIPS\ConnectorBundle\Responses\Application\ScanResponse;

class ScanService
{
    /**
     * @var APIService
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
     * @return ScansResponse
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $response = $this->api->applications()->scans()->getAll($appId, $queryParams);

        return new ScansResponse($response);
    }

    /**
     * Get Scan by ID
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return ScanResponse
     */
    public function getById($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api->applications()->scans()->getById($appId, $scanId, $queryParams);

        return new ScanResponse($response);
    }
    /**
     * Create a new scan
     *
     * @param int $appId
     * @param ScanBuilder|BaseBuilder[string] $input
     * @param array $queryParams
     * @return ScanResponse
     */
    public function create($appId, $input, array $queryParams = [])
    {
        if ($input instanceof ScanBuilder) {
            $inputArray = $input->toArray();
            $defaultInput = true;
        } else {
            $inputArray = [];
            foreach ($input as $key => $value) {
                if ($value instanceof BaseBuilder) {
                    $inputArray[$key] = $value->toArray();
                } else if (is_array($value)) {
                    foreach ($value as $key2 => $value2) {
                        if ($value2 instanceof BaseBuilder) {
                            $inputArray[$key][$key2] = $value2->toArray();
                        } else if (is_string($value2)) {
                            $inputArray[$key][$key2] = $value2;
                        }
                    }
                }
            }
            $defaultInput = false;
        }

        $response = $this->api->applications()->scans()->create($appId, $inputArray, $queryParams, $defaultInput);

        return new ScanResponse($response);
    }

    /**
     * Update an existing scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param ScanBuilder|BaseBuilder[string] $input
     * @param array $queryParams
     * @return ScanResponse
     */
    public function update($appId, $scanId, $input, array $queryParams = [])
    {
        if ($input instanceof ScanBuilder) {
            $inputArray = $input->toArray();
            $defaultInput = true;
        } else {
            $inputArray = [];
            foreach ($input as $key => $value) {
                if ($value instanceof BaseBuilder) {
                    $inputArray[$key] = $value->toArray();
                }
            }
            $defaultInput = false;
        }

        $response = $this->api->applications()->scans()->update($appId, $scanId, $inputArray, $queryParams, $defaultInput);

        return new ScanResponse($response);
    }

    /**
     * Delete all scans
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->scans()->deleteAll($appId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete a scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api->applications()->scans()->deleteById($appId, $scanId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Block until a scan is finished
     *
     * @param int $appId
     * @param int $scanId
     * @param int $waitTime - Optional time to wait in seconds. Waits indefinitely if 0
     * @param int $sleepTime - Time to wait between scan completion checks
     * @param array $queryParams
     * @return ScanResponse
     * @throws \Exception if scan does not finish in time
     */
    public function blockUntilDone($appId, $scanId, $waitTime = 0, $sleepTime = 5, array $queryParams = [])
    {
        $response = $this->api->applications()->scans()->blockUntilDone($appId, $scanId, $waitTime, $sleepTime, $queryParams);

        return new ScanResponse($response);
    }
}
