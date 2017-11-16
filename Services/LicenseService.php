<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\LicenseHydrator;
use RIPS\ConnectorBundle\Entities\LicenseEntity;
use RIPS\ConnectorBundle\InputBuilders\LicenseBuilder;

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
     * @return LicenseEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $licenses = $this->api->licenses()->getAll($queryParams);

        return LicenseHydrator::hydrateCollection($licenses);
    }

    /**
     * Get license by id
     *
     * @param int $appId
     * @param array $queryParams
     * @return LicenseEntity
     */
    public function getById($appId, array $queryParams = [])
    {
        $license = $this->api->licenses()->getById($appId, $queryParams);

        return LicenseHydrator::hydrate($license);
    }

    /**
     * @param LicenseBuilder $input
     * @param array $queryParams
     * @return LicenseEntity
     */
    public function activate($input, array $queryParams = [])
    {
        $license = $this->api->licenses()->activate($input->toArray(), $queryParams);

        return LicenseHydrator::hydrate($license);
    }
}
