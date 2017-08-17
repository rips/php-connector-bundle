<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\InputBuilders\ApplicationBuilder;

class ApplicationService
{
    // @var API
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
     * Get all applications
     *
     * @param  array $queryParams
     * @return array<ApplicationEntity>
     */
    public function getAll(array $queryParams = [])
    {
        $applications = $this->api->applications()->getAll($queryParams);
        return ApplicationHydrator::hydrateCollection($applications);
    }

    //    /**
    //     * Get application by ID
    //     *
    //     * @param int $applicationId
    //     * @return ApplicationEntity
    //     */
    //    public function getById(int $applicationId)
    //    {
    //        $application = $this->api->applications()->getById($applicationId);
    //        return ApplicationHydrator::hydrateCollection($application);
    //    }
}
