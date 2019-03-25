<?php

namespace RIPS\ConnectorBundle\Responses\System;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\System\LdapEntity;
use RIPS\ConnectorBundle\Hydrators\System\LdapHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class LdapResponse extends BaseResponse
{
    /** @var LdapEntity */
    private $ldap;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ldap = LdapHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return LdapEntity
     */
    public function getLdap()
    {
        return $this->ldap;
    }
}
