<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Profile;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class IgnoredLocationBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $match;

    /**
     * @var string
     */
    protected $exclude;

    /**
     * Set path
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->setFields[] = 'path';
        $this->path = $path;
    
        return $this;
    }
    
    /**
     * Set match
     *
     * @param string $match
     * @return $this
     */
    public function setMatch($match)
    {
        $this->setFields[] = 'match';
        $this->match = $match;
    
        return $this;
    }
    
    /**
     * Set exclude
     *
     * @param string $exclude
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->setFields[] = 'exclude';
        $this->exclude = $exclude;
    
        return $this;
    }
}
