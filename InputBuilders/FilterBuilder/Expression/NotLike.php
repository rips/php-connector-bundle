<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class NotLike extends KeyValue implements FilterExpression
{
    /**
     * @return array
     */
    public function getFilterRepresentation()
    {
        return ["__notLike" => [$this->key => $this->value]];
    }
}
