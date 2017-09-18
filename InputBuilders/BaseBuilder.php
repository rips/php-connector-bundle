<?php

namespace RIPS\ConnectorBundle\InputBuilders;

abstract class BaseBuilder
{
    /**
     * Initialize new BaseBuilder instance
     *
     * @param array $props - Properties that will be mapped to class
     */
    public function __construct(array $props)
    {
        foreach ($props as $key => $val) {
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
        return array_filter(get_object_vars($this));
    }
}
