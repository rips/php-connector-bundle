<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;

class SummaryHydrator
{
    /**
     * Hydrate a collection of summary objects into a collection of
     * SummarieEntity objects
     *
     * @param  array<\stdClass> $summaries
     * @return array<SummaryEntity>
     */
    public static function hydrateCollection(array $summaries)
    {
        $hydrated = [];

        foreach ($summaries as $summary) {
            $hydrated[] = self::hydrate($summary);
        }

        return $hydrated;
    }

    /**
     * Hydrate a Summary object into a SummaryEntity object
     *
     * @param  \stdClass $summary
     * @return SummaryEntity
     */
    public static function hydrate(\stdClass $summary)
    {
        $hydrated = new SummaryEntity();

        if (isset($summary->id)) {
            $hydrated->setId($summary->id);
        }

        if (isset($summary->line)) {
            $hydrated->setLine($summary->line);
        }

        if (isset($summary->content)) {
            $hydrated->setContent($summary->content);
        }

        if (isset($summary->highlightedContent)) {
            $hydrated->setHighlightedContent($summary->highlightedContent);
        }
    }
}
