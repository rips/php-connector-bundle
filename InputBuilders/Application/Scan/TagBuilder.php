<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class TagBuilder extends BaseBuilder
{
    /**
     * @var string[]
     */
    protected $names;

    /**
     * Set names
     *
     * @param string[] $names
     * @return $this
     */
    public function setNames($names)
    {
        $this->setFields[] = 'names';
        $this->names = $names;
    
        return $this;
    }

    /**
     * Add name
     *
     * @param string $name
     * @return $this
     */
    public function addName($name)
    {
        if (!in_array('names', $this->setFields)) {
            $this->setFields[] = 'names';
        }
        $this->names[] = $name;

        return $this;
    }
}
