<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\QuotaEntity;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

class QuotaResponse extends BaseResponse
{
    /** @var QuotaEntity */
    private $quota;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->quota = QuotaHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return QuotaEntity
     */
    public function getQuota()
    {
        return $this->quota;
    }
}
