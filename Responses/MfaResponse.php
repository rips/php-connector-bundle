<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\User\MfaEntity;
use RIPS\ConnectorBundle\Hydrators\User\MfaHydrator;

class MfaResponse extends BaseResponse
{
    /** @var MfaEntity */
    private $mfa;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->mfa = MfaHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return MfaEntity
     */
    public function getMfa()
    {
        return $this->mfa;
    }
}
