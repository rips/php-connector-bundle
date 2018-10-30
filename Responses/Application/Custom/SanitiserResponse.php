<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\SanitiserEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SanitiserHydrator;

class SanitiserResponse extends BaseResponse
{
    /** @var SanitiserEntity */
    private $sanitiser;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sanitiser = SanitiserHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SanitiserEntity
     */
    public function getSanitiser()
    {
        return $this->sanitiser;
    }
}
