<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\ArtifactBuilder;
use RIPS\ConnectorBundle\Responses\Application\ArtifactsResponse;
use RIPS\ConnectorBundle\Responses\Application\ArtifactResponse;

class ArtifactService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ArtifactService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all artifacts for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return ArtifactsResponse
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $response = $this->api->applications()->artifacts()->getAll($appId, $queryParams);

        return new ArtifactsResponse($response);
    }

    /**
     * Get artifact for an application by id
     *
     * @param int $appId
     * @param int $artifactId
     * @param array $queryParams
     * @return ArtifactResponse
     */
    public function getById($appId, $artifactId, array $queryParams = [])
    {
        $response = $this->api->applications()->artifacts()->getById($appId, $artifactId, $queryParams);

        return new ArtifactResponse($response);
    }

    /**
     * Create an artifact for an application
     *
     * @param int $appId
     * @param ArtifactBuilder $input
     * @param array $queryParams
     * @return ArtifactResponse
     */
    public function create($appId, ArtifactBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->artifacts()->create($appId, $input->toArray(), $queryParams);

        return new ArtifactResponse($response);
    }

    /**
     * Update an artifact by id
     *
     * @param int $appId
     * @param int $artifactId
     * @param ArtifactBuilder $input
     * @param array $queryParams
     * @return ArtifactResponse
     */
    public function update($appId, $artifactId, ArtifactBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->artifacts()->update($appId, $artifactId, $input->toArray(), $queryParams);

        return new ArtifactResponse($response);
    }

    /**
     * Delete all artifacts for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->artifacts()->deleteAll($appId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete an artifact for an application by id
     *
     * @param int $appId
     * @param int $artifactId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $artifactId, array $queryParams = [])
    {
        $response = $this->api->applications()->artifacts()->deleteById($appId, $artifactId, $queryParams);

        return new BaseResponse($response);
    }
}
