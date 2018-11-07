<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;
use RIPS\ConnectorBundle\Entities\LanguageEntity;

class PatchEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string[]
     */
    protected $examples;

    /**
     * @var TypeEntity
     */
    protected $type;

    /**
     * @var LanguageEntity
     */
    protected $language;

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
     * Set examples
     *
     * @param  string[] $examples
     * @return void
     */
    public function setExamples($examples)
    {
        $this->examples = $examples;
    }

    /**
     * Get examples
     *
     * @return string[]
     */
    public function getExamples()
    {
        return $this->examples;
    }

    /**
     * @return TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  TypeEntity $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return LanguageEntity
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param  LanguageEntity $language
     * @return void
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }
}
