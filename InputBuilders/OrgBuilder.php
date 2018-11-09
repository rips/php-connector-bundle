<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use DateTime;

class OrgBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var array
     */
    protected $trialIssueTypes;

    /**
     * @var bool
     */
    protected $disabled;

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
     * Set validUntil
     *
     * @param DateTime $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->setFields[] = 'validUntil';
        $this->validUntil = $validUntil;
    
        return $this;
    }

    /**
     * Set trialIssueTypes
     *
     * @param array $trialIssueTypes
     * @return $this
     */
    public function setTrialIssueTypes(array $trialIssueTypes)
    {
        $this->setFields[] = 'trialIssueTypes';
        $this->trialIssueTypes = $trialIssueTypes;

        return $this;
    }

    /**
     * Set disabled
     *
     * @param bool $disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->setFields[] = 'disabled';
        $this->disabled = $disabled;

        return $this;
    }
}
