<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

class TypeEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $markup;

    /**
     * @var int
     */
    protected $severity;

    /**
     * @var int
     */
    protected $effort;

    /**
     * @var bool
     */
    protected $secondOrder;

    /**
     * @var string
     */
    protected $cwe;

    /**
     * @var string
     */
    protected $owasp;

    /**
     * @var string
     */
    protected $sans;

    /**
     * @var string
     */
    protected $pcidss;

    /**
     * @var bool
     */
    protected $enable;

    /**
     * @var TypeEntity
     */
    protected $parent;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tag
     *
     * @param  string $tag
     * @return void
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set description
     *
     * @param  string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set name
     *
     * @param  string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set color
     *
     * @param  string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set markup
     *
     * @param  string $markup
     * @return void
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
    }

    /**
     * Get markup
     *
     * @return string
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Set severity
     *
     * @param  int $severity
     * @return void
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * Get severity
     *
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Set effort
     *
     * @param  int $effort
     * @return void
     */
    public function setEffort($effort)
    {
        $this->effort = $effort;
    }

    /**
     * Get effort
     *
     * @return int
     */
    public function getEffort()
    {
        return $this->effort;
    }

    /**
     * Set secondOrder
     *
     * @param  bool $secondOrder
     * @return void
     */
    public function setSecondOrder($secondOrder)
    {
        $this->secondOrder = $secondOrder;
    }

    /**
     * Get secondOrder
     *
     * @return bool
     */
    public function isSecondOrder()
    {
        return $this->secondOrder;
    }

    /**
     * Set cwe
     *
     * @param  string $cwe
     * @return void
     */
    public function setCwe($cwe)
    {
        $this->cwe = $cwe;
    }

    /**
     * Get cwe
     *
     * @return string
     */
    public function getCwe()
    {
        return $this->cwe;
    }

    /**
     * Set owasp
     *
     * @param  string $owasp
     * @return void
     */
    public function setOwasp($owasp)
    {
        $this->owasp = $owasp;
    }

    /**
     * Get owasp
     *
     * @return string
     */
    public function getOwasp()
    {
        return $this->owasp;
    }

    /**
     * Set sans
     *
     * @param  string $sans
     * @return void
     */
    public function setSans($sans)
    {
        $this->sans = $sans;
    }

    /**
     * Get sans
     *
     * @return string
     */
    public function getSans()
    {
        return $this->sans;
    }

    /**
     * Set pcidss
     *
     * @param  string $pcidss
     * @return void
     */
    public function setPcidss($pcidss)
    {
        $this->pcidss = $pcidss;
    }

    /**
     * Get pcidss
     *
     * @return string
     */
    public function getPcidss()
    {
        return $this->pcidss;
    }

    /**
     * Set enable
     *
     * @param  bool $enable
     * @return void
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
    }

    /**
     * Get enable
     *
     * @return bool
     */
    public function isEnable()
    {
        return $this->enable;
    }

    /**
     * Set parent
     *
     * @param  TypeEntity $parent
     * @return void
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     * @return TypeEntity
     */
    public function getParent()
    {
        return $this->parent;
    }
}
