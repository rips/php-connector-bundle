<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type;

use DateTime;
use RIPS\ConnectorBundle\Entities\LanguageEntity;

class ResourceEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var DateTime
     */
    protected $publishedAt;

    /**
     * @var LanguageEntity[]
     */
    protected $languages;

    /**
     * Set id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set published at
     *
     * @param DateTime $publishedAt
     * @return $this
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get published at
     *
     * @return DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Get languages
     *
     * @return LanguageEntity[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set languages
     *
     * @param LanguageEntity[] $languages
     * @return ResourceEntity
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

}
