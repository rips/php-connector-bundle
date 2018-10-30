<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\ValidatorEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ValidatorHydrator;

class ValidatorResponse extends BaseResponse
{
    /** @var ValidatorEntity */
    private $validator;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->validator = ValidatorHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ValidatorEntity
     */
    public function getValidator()
    {
        return $this->validator;
    }
}
