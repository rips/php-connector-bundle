<?php

namespace RIPS\ConnectorBundle\Responses\System;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\System\EmailEntity;
use RIPS\ConnectorBundle\Hydrators\System\EmailHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class EmailResponse extends BaseResponse
{
    /** @var EmailEntity */
    private $email;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->email = EmailHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return EmailEntity
     */
    public function getEmail()
    {
        return $this->email;
    }
}
