<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

class PatchEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Patch\TypeEntity
     */
    protected $type;

    /**
     * @var Patch\ModificationEntity[]
     */
    protected $modifications;

    /**
     * @var int
     */
    protected $confidence;

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
     * Set type
     *
     * @param Patch\TypeEntity $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return Patch\TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set modifications
     *
     * @param Patch\ModificationEntity[] $modifications
     * @return $this
     */
    public function setModifications(array $modifications)
    {
        $this->modifications = $modifications;

        return $this;
    }

    /**
     * Get modifications
     *
     * @return Patch\ModificationEntity[]
     */
    public function getModifications()
    {
        return $this->modifications;
    }

    /**
     * Get confidence
     *
     * @return int
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Set confidence
     *
     * @param int $confidence
     */
    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
    }
}
