<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\ValidatorEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\ValidatorHydrator;

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
