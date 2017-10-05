<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class SummaryHydrator
{
    /**
     * Hydrate a collection of summary objects into a collection of
     * SummarieEntity objects
     *
     * @param \stdClass[] $summaries
     * @return SummaryEntity[]
     */
    public static function hydrateCollection($summaries)
    {
        $hydrated = [];

        foreach ($summaries as $summary) {
            $hydrated[] = self::hydrate($summary);
        }

        return $hydrated;
    }

    /**
     * Hydrate a summary object into a SummaryEntity object
     *
     * @param \stdClass $summary
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

        if (isset($summary->highlighted_content)) {
            $hydrated->setHighlightedContent($summary->highlighted_content);
        }

        if (isset($summary->issue)) {
            $hydrated->setIssue(IssueHydrator::hydrate($summary->issue));
        }

        if (isset($summary->file)) {
            $hydrated->setFile(FileHydrator::hydrate($summary->file));
        }

        return $hydrated;
    }
}
