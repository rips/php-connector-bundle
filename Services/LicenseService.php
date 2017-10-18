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
     * @return LicenseEntity
     */
    public function getById($appId)
    {
        $license = $this->api->licenses()->getById($appId);

        return LicenseHydrator::hydrate($license);
    }

    /**
     * @param LicenseBuilder $input
     */
    public function activate($input)
    {
        $license = $this->api->licenses()->activate($input->toArray());

        return LicenseHydrator::hydrate($license);
    }
}
