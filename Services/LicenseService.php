<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\LicenseBuilder;
use RIPS\ConnectorBundle\Responses\LicensesResponse;
use RIPS\ConnectorBundle\Responses\LicenseResponse;

class LicenseService
{
    /**
     * @var APIService
     */
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
     * Get all licenses
     *
     * @param array $queryParams
     * @return LicensesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->licenses()->getAll($queryParams);

        return new LicensesResponse($response);
    }

    /**
     * Get license by id
     *
     * @param int $appId
     * @param array $queryParams
     * @return LicenseResponse
     */
    public function getById($appId, array $queryParams = [])
    {
        $response = $this->api->licenses()->getById($appId, $queryParams);

        return new LicenseResponse($response);
    }

    /**
     * @param LicenseBuilder $input
     * @param array $queryParams
     * @return LicenseResponse
     */
    public function activate($input, array $queryParams = [])
    {
        $response = $this->api->licenses()->activate($input->toArray(), $queryParams);

        return new LicenseResponse($response);
    }
}
