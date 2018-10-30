<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\ValidatorEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ValidatorHydrator;

class ValidatorsResponse extends BaseResponse
{
    /** @var ValidatorEntity[] */
    private $validators;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->validators = ValidatorHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ValidatorEntity[]
     */
    public function getValidator()
    {
        return $this->validators;
    }
}
