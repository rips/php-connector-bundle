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

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setQuotas(array $quotas = [])
    {
        $this->quotas = $quotas;
    }

    public function getQuotas()
    {
        return $this->quotas;
    }
}
