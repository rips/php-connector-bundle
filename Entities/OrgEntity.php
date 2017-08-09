<?php

namespace RIPS\ConnectorBundle\Entities;

class OrgEntity
{
    // @var int
    protected $id;

    // @var string
    protected $name;

    // @var Array<QuotaEntities>
    protected $quotas;

    /**
     * Set id
     *
     * @param integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
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
     * Set quotas
     *
     * @param array<QuotaEntity> $quotas
     * @return void
     */
    public function setQuotas(array $quotas = [])
    {
        $this->quotas = $quotas;
    }

    /**
     * Get quotas
     *
     * @return array<QuotaEntity>
     */
    public function getQuotas()
    {
        return $this->quotas;
    }
}
