<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\User\Mfa\ChallengeBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\MfaResponse;

class MfaService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new MfaService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Initialize MFA and get secret
     *
     * @param array $queryParams
     * @return MfaResponse
     */
    public function getSecret(array $queryParams = [])
    {
        $response = $this->api->mfas()->getSecret($queryParams);

        return new MfaResponse($response);
    }

    /**
     * Get the authentication token
     *
     * @param ChallengeBuilder $input
     * @param array $queryParams
     * @return MfaResponse
     */
    public function getToken(ChallengeBuilder $input, array $queryParams = [])
    {
        $response = $this->api->mfas()->getToken($input->toArray(), $queryParams);

        return new MfaResponse($response);
    }

    /**
     * Remove MFA from the account
     *
     * @param ChallengeBuilder $input
     * @param array $queryParams
     * @return BaseResponse
     */
    public function delete(ChallengeBuilder $input, array $queryParams = [])
    {
        $response = $this->api->mfas()->delete($input->toArray(), $queryParams);

        return new BaseResponse($response);
    }
}
