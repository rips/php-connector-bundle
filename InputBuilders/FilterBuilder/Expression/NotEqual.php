<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class NotEqual extends KeyValue implements FilterExpression
{
    /**
     * @return array
     */
    public function getFilterRepresentation()
    {
        return ["__notEqual" => [$this->key => $this->value]];
    }
}
