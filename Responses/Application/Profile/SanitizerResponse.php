<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\SanitizerEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SanitizerHydrator;

class SanitizerResponse extends BaseResponse
{
    /** @var SanitizerEntity */
    private $sanitizer;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sanitizer = SanitizerHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SanitizerEntity
     */
    public function getSanitizer()
    {
        return $this->sanitizer;
    }
}
