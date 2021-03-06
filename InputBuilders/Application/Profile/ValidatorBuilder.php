<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Profile;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ValidatorBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $parameter;

    /**
     * @var string
     */
    protected $characters;

    /**
     * @var int
     */
    protected $issueType;

    /**
     * @var string
     */
    protected $behavior;
    
    /**
     * Set class
     *
     * @param string $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->setFields[] = 'class';
        $this->class = $class;
    
        return $this;
    }
    
    /**
     * Set method
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->setFields[] = 'method';
        $this->method = $method;
    
        return $this;
    }
    
    /**
     * Set parameter
     *
     * @param string $parameter
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->setFields[] = 'parameter';
        $this->parameter = $parameter;
    
        return $this;
    }
    
    /**
     * Set characters
     *
     * @param string $characters
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->setFields[] = 'characters';
        $this->characters = $characters;
    
        return $this;
    }

    /**
     * Set issueType
     *
     * @param int $issueType
     * @return $this
     */
    public function setIssueType($issueType)
    {
        $this->setFields[] = 'issueType';
        $this->issueType = $issueType;

        return $this;
    }

    /**
     * Set behavior
     *
     * @param string $behavior
     * @return $this
     */
    public function setBehavior($behavior)
    {
        $this->setFields[] = 'behavior';
        $this->behavior = $behavior;

        return $this;
    }
}
