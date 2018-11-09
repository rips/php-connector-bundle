<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoreEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoreHydrator;

class IgnoresResponse extends BaseResponse
{
    /** @var IgnoreEntity[] */
    private $ignores;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ignores = IgnoreHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return IgnoreEntity[]
     */
    public function getIgnore()
    {
        return $this->ignores;
    }
}
