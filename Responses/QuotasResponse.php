<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\QuotaEntity;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

class QuotasResponse extends BaseResponse
{
    /** @var QuotaEntity[] */
    private $quotas;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->quotas = QuotaHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return QuotaEntity[]
     */
    public function getQuotas()
    {
        return $this->quotas;
    }
}
