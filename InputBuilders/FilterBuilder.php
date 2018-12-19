<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Expression;
use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\Condition;
use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterCondition;
use RIPS\ConnectorBundle\InputBuilders\FilterBuilder\FilterExpression;

class FilterBuilder
{
    /**
     * @var FilterCondition
     */
    private $condition;

    /**
     * @param FilterCondition $condition
     * @return $this
     */
    public function build($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @param FilterCondition|FilterExpression|null
     * @return string
     */
    public function getFilterString($input = null)
    {
        if ($input === null) {
            return json_encode($this->condition->getFilterRepresentation());
        } else {
            /** @var FilterCondition|FilterExpression $input */
            return json_encode($input->getFilterRepresentation());
        }
    }

    /**
     * @param FilterExpression ...$expressions
     * @return Condition\AndCondition
     */
    public function and(...$expressions)
    {
        return new Condition\AndCondition($expressions);
    }

    /**
     * @param FilterExpression ...$expressions
     * @return Condition\OrCondition
     */
    public function or(...$expressions)
    {
        return new Condition\OrCondition($expressions);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function equal(string $key, $value)
    {
        return new Expression\Equal($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function notEqual(string $key, $value)
    {
        return new Expression\NotEqual($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function like(string $key, $value)
    {
        return new Expression\Like($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function notLike(string $key, $value)
    {
        return new Expression\NotLike($key, $value);
    }

    /**
     * @param string $key
     * @return FilterExpression
     */
    public function null(string $key)
    {
        return new Expression\NullExpression($key);
    }

    /**
     * @param string $key
     * @return FilterExpression
     */
    public function notNull(string $key)
    {
        return new Expression\NotNullExpression($key);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function greaterThan(string $key, $value)
    {
        return new Expression\GreaterThan($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function greaterThanEqual(string $key, $value)
    {
        return new Expression\GreaterThanEqual($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function lessThan(string $key, $value)
    {
        return new Expression\LessThan($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return FilterExpression
     */
    public function lessThanEqual(string $key, $value)
    {
        return new Expression\LessThanEqual($key, $value);
    }
}
