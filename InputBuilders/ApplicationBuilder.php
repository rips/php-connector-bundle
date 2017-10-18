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
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setApplicationName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set chargedQuota
     *
     * @param integer $chargedQuota
     * @return $this
     */
    public function setChargedQuota($chargeQuota)
    {
        $this->chargedQuota = $chargeQuota;

        return $this;
    }
}
