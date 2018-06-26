<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class NullExpression implements FilterExpression
{
    /**
     * @var string
     */
    protected $key;

    /**
     * Equal constructor.
     * @param string $key
     */
    public function __construct($key)
    {
        if (!is_string($key)) {
            throw new \InvalidArgumentException('Key needs to be a string');
        }
        $this->key = $key;
    }

    public function getFilterRepresentation()
    {
        return sprintf(
            '{"__null": {"%s": ""}',
            $this->key
        );
    }
}
