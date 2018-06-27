<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class LessThan extends KeyValue implements FilterExpression
{
    /**
     * @return array
     */
    public function getFilterRepresentation()
    {
        return ["__lessThan" => [$this->key => $this->value]];
    }
}
