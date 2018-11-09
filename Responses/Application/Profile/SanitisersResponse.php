<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\SanitiserEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SanitiserHydrator;

class SanitisersResponse extends BaseResponse
{
    /** @var SanitiserEntity[] */
    private $sanitisers;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sanitisers = SanitiserHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SanitiserEntity[]
     */
    public function getSanitiser()
    {
        return $this->sanitisers;
    }
}
