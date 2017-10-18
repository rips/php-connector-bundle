<?php

namespace RIPS\ConnectorBundle\InputBuilders;

abstract class BaseBuilder
{
    /**
     * Fiels that have been set either in the constructor
     * or in a setter method
     *
     * @var array
     */
    protected $setFields = [];

    /**
     * Initialize new BaseBuilder instance
     *
     * @param array $props - Properties that will be mapped to class
     */
    public function __construct(array $props = [])
    {
        foreach ($props as $key => $val) {
            $this->setFields[] = $key;
            $this->{$key} = $val;
        }
    }

    /**
     * Get an array of class properties
     *
     * @return array
     */
    public function toArray()
    {
        $out = [];

        foreach ($this->setFields as $key) {
            $out[$key] = $this->{$key};
        }

        return $out;
    }
}
