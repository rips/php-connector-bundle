<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class NotEqual extends KeyValue implements FilterExpression
{
    /**
     * @return string
     */
    public function getFilterRepresentation()
    {
        return sprintf(
            '{"__notEqual": {"%s": %s}',
            $this->key,
            $this->value
        );
    }
}
