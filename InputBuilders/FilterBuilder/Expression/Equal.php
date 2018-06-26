<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class Equal extends KeyValue implements FilterExpression
{
    /**
     * @return string
     */
    public function getFilterRepresentation()
    {
        return sprintf(
            '{"__equal": {"%s": %s}',
            $this->key,
            $this->value
        );
    }
}
