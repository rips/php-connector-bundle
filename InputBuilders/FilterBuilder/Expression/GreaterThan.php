<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class GreaterThan extends KeyValue implements FilterExpression
{
    /**
     * @return string
     */
    public function getFilterRepresentation()
    {
        return sprintf(
            '{"__greaterThan": {"%s": %s}',
            $this->key,
            $this->value
        );
    }
}
