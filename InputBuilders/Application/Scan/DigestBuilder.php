<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

/**
 * Class DigestBuilder
 *
 * Build a digest object for requests
 *
 * @package RIPS\ConnectorBundle\InputBuilders\Application\Scan
 */
class DigestBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $unresolvedFunctions;

    /**
     * @var int
     */
    protected $unresolvedClasses;

    /**
     * @var int
     */
    protected $unresolvedMethods;

    /**
     * @param int $unresolvedFunctions
     * @return DigestBuilder
     */
    public function setUnresolvedFunctions($unresolvedFunctions)
    {
        $this->setFields[] = 'unresolvedFunctions';
        $this->unresolvedFunctions = $unresolvedFunctions;

        return $this;
    }

    /**
     * @param int $unresolvedClasses
     * @return DigestBuilder
     */
    public function setUnresolvedClasses($unresolvedClasses)
    {
        $this->setFields[] = 'unresolvedClasses';
        $this->unresolvedClasses = $unresolvedClasses;

        return $this;
    }

    /**
     * @param int $unresolvedMethods
     * @return DigestBuilder
     */
    public function setUnresolvedMethods($unresolvedMethods)
    {
        $this->setFields[] = 'unresolvedMethods';
        $this->unresolvedMethods = $unresolvedMethods;

        return $this;
    }
}
