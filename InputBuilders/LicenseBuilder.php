<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class LicenseBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var integer
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
     * @param integer $quotaDistributed
     * @return $this
     */
    public function setQuotaDistributed($quotaDistributed)
    {
        $this->setFields[] = 'quotaDistributed';
        $this->quotaDistributed = $quotaDistributed;

        return $this;
    }
}
