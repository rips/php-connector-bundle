<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class Like extends KeyValue implements FilterExpression
{
    /**
     * @return array
     */
    public function getFilterRepresentation()
    {
        return ["__like" => [$this->key => $this->value]];
    }
}
