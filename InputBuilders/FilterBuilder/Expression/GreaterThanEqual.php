<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class GreaterThanEqual extends KeyValue implements FilterExpression
{
    /**
     * @return array
     */
    public function getFilterRepresentation()
    {
        return ["__greaterThanEqual" => [$this->key => $this->value]];
    }
}
