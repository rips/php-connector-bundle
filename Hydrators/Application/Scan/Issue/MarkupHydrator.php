<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\MarkupEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class MarkupHydrator
{
    /**
     * Hydrate a collection of markup objects into a collection of
     * MarkupEntity objects
     *
     * @param stdClass[] $markups
     * @return MarkupEntity[]
     */
    public static function hydrateCollection(array $markups)
    {
        $hydrated = [];

        foreach ($markups as $markup) {
            $hydrated[] = self::hydrate($markup);
        }

        return $hydrated;
    }

    /**
     * Hydrate a markup object into a MarkupEntity object
     *
     * @param stdClass $markup
     * @return MarkupEntity
     */
    public static function hydrate(stdClass $markup)
    {
        $hydrated = new MarkupEntity();

        if (isset($markup->id)) {
            $hydrated->setId($markup->id);
        }

        if (isset($markup->markup)) {
            $hydrated->setMarkup($markup->markup);
        }

        if (isset($markup->issue)) {
            $hydrated->setIssue(IssueHydrator::hydrate($markup->issue));
        }

        return $hydrated;
    }
}
