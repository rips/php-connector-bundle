<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class NotLike extends KeyValue implements FilterExpression
{
    /**
     * @return string
     */
    public function getFilterRepresentation()
    {
        return sprintf(
            '{"__notLike": {"%s": %s}',
            $this->key,
            $this->value
        );
    }
}
