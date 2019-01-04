<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\SanitizerEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SanitizerHydrator;

class SanitizersResponse extends BaseResponse
{
    /** @var SanitizerEntity[] */
    private $sanitizers;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sanitizers = SanitizerHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SanitizerEntity[]
     */
    public function getSanitizers()
    {
        return $this->sanitizers;
    }
}
