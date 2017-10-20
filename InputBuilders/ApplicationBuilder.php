<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class ApplicationBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $chargedQuota;

    /**
     * @var array
     */
    protected $defaultScanCallbacks;

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setFields[] = 'name';
        $this->name = $name;

        return $this;
    }

    /**
     * Set chargedQuota
     *
     * @param integer $chargedQuota
     * @return $this
     */
    public function setChargedQuota($chargedQuota)
    {
        $this->setFields[] = 'chargedQuota';
        $this->chargedQuota = $chargedQuota;

        return $this;
    }

    /**
     * Set defaultScanCallbacks
     *
     * @param array $defaultScanCallbacks
     * @return $this
     */
    public function setDefaultScanCallbacks(array $defaultScanCallbacks)
    {
        $this->setFields[] = 'defaultScanCallbacks';
        $this->defaultScanCallbacks = $defaultScanCallbacks;

        return $this;
    }
}
