<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\SettingEntity;
use RIPS\ConnectorBundle\Hydrators\SettingHydrator;

class SettingResponse extends BaseResponse
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
