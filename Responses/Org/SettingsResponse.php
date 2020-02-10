<?php

namespace RIPS\ConnectorBundle\Responses\Org;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Org\SettingEntity;
use RIPS\ConnectorBundle\Hydrators\Org\SettingHydrator;

class SettingsResponse
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
