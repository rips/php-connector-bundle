<?php

namespace RIPS\ConnectorBundle\InputBuilders;

abstract class BaseBuilder
{
    public function __construct($props)
    {
        foreach ($props as $key => $val) {
            $this->{$key} = $val;
        }
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}
