<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use DateTime;

abstract class BaseBuilder
{
    /**
     * Fields that have been set either in the constructor
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
            $property = $this->{$key};

            if ($property instanceof DateTime) {
                $out[$key] = $property->format(DateTime::ISO8601);
            } else {
                $out[$key] = $property;
            }
        }

        return $out;
    }
}
