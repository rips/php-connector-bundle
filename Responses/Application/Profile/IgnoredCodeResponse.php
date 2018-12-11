<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoredCodeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoredCodeHydrator;

class IgnoredCodeResponse extends BaseResponse
{
    /** @var IgnoredCodeEntity */
    private $ignoredCode;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ignoredCode = IgnoredCodeHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return IgnoredCodeEntity
     */
    public function getIgnoredCode()
    {
        return $this->ignoredCode;
    }
}
