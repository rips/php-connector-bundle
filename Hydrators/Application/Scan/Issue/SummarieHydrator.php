<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\SummarieEntity;

class SummarieHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * SummarieEntity objects
     *
     * @param  array<stdClass> $summarie
     * @return array<SummarieEntity>
     */
    public static function hydrateCollection(array $summarie)
    {
        $hydrated = [];

        foreach ($summaries as $summarie) {
            $hydrated[] = self::hydrate($summarie);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a SummarieEntity object
     *
     * @param  \stdClass $summarie
     * @return SummarieEntity
     */
    public static function hydrate(\stdClass $summarie)
    {
        $hydrated = new SummarieEntity();

        if (isset($summarie->id)) {
            $hydrated->setId($summarie->id);
        }

        if (isset($summarie->line)) {
            $hydrated->setLine($summarie->line);
        }

        if (isset($summarie->content)) {
            $hydrated->setContent($summarie->content);
        }

        if (isset($summarie->id)) {
            $hydrated->setHighlightedContent($summarie->highlightedContent);
        }
    }
}
