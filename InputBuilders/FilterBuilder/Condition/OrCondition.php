<?php

namespace RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Condition;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterCondition;
use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class OrCondition implements FilterCondition, FilterExpression
{
    /**
     * @var array
     */
    private $expressions;

    /**
     * AndCondition constructor.
     * @param array $expressions
     */
    public function __construct(array $expressions)
    {
        $this->expressions = $expressions;
    }

    public function getFilterRepresentation()
    {
        $mappedExpressions = array_map(function (FilterExpression $expression) {
            return $expression->getFilterRepresentation();
        }, $this->expressions);

        return ["__or" => [$mappedExpressions]];
    }
}
