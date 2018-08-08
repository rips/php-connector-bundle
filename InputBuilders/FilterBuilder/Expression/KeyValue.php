<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

abstract class KeyValue
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @param string $key
     * @param mixed $value
     */
    public function __construct($key, $value)
    {
        if (!is_string($key)) {
            throw new \InvalidArgumentException('Key needs to be a string.');
        }
        $this->key = $key;

        if (!is_string($value) && !is_numeric($value) && !is_bool($value)) {
            throw new \InvalidArgumentException('Value needs to be a string, number or boolean.');
        }
        $this->value = $value;
    }
}
