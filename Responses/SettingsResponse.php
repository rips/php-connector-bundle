<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\SettingEntity;
use RIPS\ConnectorBundle\Hydrators\SettingHydrator;

class SettingsResponse extends BaseResponse
{
    /** @var SettingEntity[] */
    private $settings;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->settings = SettingHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SettingEntity[]
     */
    public function getSettings()
    {
        return $this->settings;
    }
}
