<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class LicenseBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var boolean
     */
    protected $quotaDistributed;

    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->setFields[] = 'key';
        $this->key = $key;

        return $this;
    }

    /**
     * @param boolean $quotaDistributed
     * @return $this
     */
    public function setQuotaDistributed($quotaDistributed)
    {
        $this->setFields[] = 'quotaDistributed';
        $this->quotaDistributed = $quotaDistributed;

        return $this;
    }
}
