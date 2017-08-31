<?php


namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink;

class FunctionEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $startLine;

    /**
     * @var int
     */
    protected $endLine;

    /**
     * @var string
     */
    protected $name;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set startLine
     *
     * @param  int $startLine
     * @return void
     */
    public function setStartLine($startLine)
    {
        $this->startLine = $startLine;
    }

    /**
     * Get startLine
     *
     * @return int
     */
    public function getStartLine()
    {
        return $this->startLine;
    }

    /**
     * Set endLine
     *
     * @param  int $endLine
     * @return void
     */
    public function setEndLine($endLine)
    {
        $this->endLine = $endLine;
    }

    /**
     * Get endLine
     *
     * @return int
     */
    public function getEndLine()
    {
        return $this->endLine;
    }

    /**
     * Set name
     *
     * @param  mixed $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
