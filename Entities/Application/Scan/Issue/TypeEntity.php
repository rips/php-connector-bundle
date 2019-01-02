<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type\ResourceEntity;
use RIPS\ConnectorBundle\Entities\LanguageEntity;

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
    protected $owasp2010;

    /**
     * @var string
     */
    protected $owasp2013;

    /**
     * @var string
     */
    protected $owasp2017;

    /**
     * @var string
     */
    protected $sans;

    /**
     * @var string
     */
    protected $pcidss;

    /**
     * @var string
     */
    protected $asvs301;

    /**
     * @var bool
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var TypeEntity
     */
    protected $parent;

    /**
     * @var TypeEntity[]
     */
    protected $children;

    /**
     * @var ResourceEntity[]
     */
    protected $resources;

    /**
     * @var bool
     */
    protected $inactive;

    /**
     * @var LanguageEntity[]
     */
    protected $languages;

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
     * Set owasp2010
     *
     * @param  string $owasp2010
     * @return void
     */
    public function setOwasp2010($owasp2010)
    {
        $this->owasp2010 = $owasp2010;
    }

    /**
     * Get owasp2010
     *
     * @return string
     */
    public function getOwasp2010()
    {
        return $this->owasp2010;
    }

    /**
     * Set owasp2013
     *
     * @param  string $owasp2013
     * @return void
     */
    public function setOwasp2013($owasp2013)
    {
        $this->owasp2013 = $owasp2013;
    }

    /**
     * Get owasp2013
     *
     * @return string
     */
    public function getOwasp2013()
    {
        return $this->owasp2013;
    }

    /**
     * Set owasp2017
     *
     * @param  string $owasp2017
     * @return void
     */
    public function setOwasp2017($owasp2017)
    {
        $this->owasp2017 = $owasp2017;
    }

    /**
     * Get owasp2017
     *
     * @return string
     */
    public function getOwasp2017()
    {
        return $this->owasp2017;
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
     * Set asvs301
     *
     * @param  string $asvs301
     * @return void
     */
    public function setAsvs301($asvs301)
    {
        $this->asvs301 = $asvs301;
    }

    /**
     * Get asvs301
     *
     * @return string
     */
    public function getAsvs301()
    {
        return $this->asvs301;
    }

    /**
     * Set enabled
     *
     * @param  bool $enabled
     * @return void
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set category
     *
     * @param  string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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

    /**
     * Set children
     *
     * @param TypeEntity[] $children
     * @return $this
     */
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Get children
     *
     * @return TypeEntity[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set resources
     *
     * @param ResourceEntity[] $resources
     * @return $this
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Get resources
     *
     * @return ResourceEntity[]
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Set inactive
     *
     * @param  bool $inactive
     * @return void
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;
    }

    /**
     * Get inactive
     *
     * @return bool
     */
    public function isInactive()
    {
        return $this->inactive;
    }

    /**
     * @return LanguageEntity[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param LanguageEntity[] $languages
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;
    }
}
