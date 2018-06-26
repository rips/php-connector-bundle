<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class Like extends KeyValue implements FilterExpression
{
    /**
     * @return string
     */
    public function getFilterRepresentation()
    {
        return sprintf(
            '{"__like": {"%s": %s}',
            $this->key,
            $this->value
        );
    }
}
