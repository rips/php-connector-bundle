<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;

class SummaryHydrator
{
    /**
     * Hydrate a collection of summary objects into a collection of
     * SummaryEntity objects
     *
     * @param stdClass[] $summaries
     * @return SummaryEntity[]
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
     * Hydrate a summary object into a SummaryEntity object
     *
     * @param stdClass $summary
     * @return SummaryEntity
     */
    public static function hydrate(stdClass $summary)
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

        if (isset($summary->file)) {
            $hydrated->setFile(FileHydrator::hydrate($summary->file));
        }

        if (isset($summary->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($summary->function));
        }

        if (isset($summary->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($summary->class));
        }

        return $hydrated;
    }
}
