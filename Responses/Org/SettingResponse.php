<?php

namespace RIPS\ConnectorBundle\Responses\Org;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Org\SettingEntity;
use RIPS\ConnectorBundle\Hydrators\Org\SettingHydrator;

class SettingResponse
{
    /** @var SettingEntity */
    private $setting;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->setting = SettingHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SettingEntity
     */
    public function getSetting()
    {
        return $this->setting;
    }
}
