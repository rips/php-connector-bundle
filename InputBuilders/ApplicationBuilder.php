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
}
