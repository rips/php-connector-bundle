<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SinkHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Origin\TypeHydrator as OriginTypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummaryHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SourceHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ConcatHydrator;

class IssueHydrator
{
    /**
    * Hydrate a collection of issue objects into a collection of
    * IssueEntity objects
    *
    * @param  \stdClass[] $issues
    * @return IssueEntity[]
    */
    public static function hydrateCollection(array $issues)
    {
        $hydrated = [];

        foreach ($issues as $issue) {
            $hydrated[] = self::hydrate($issue);
        }

        return $hydrated;
    }

    /**
     * Hydrate an issue object into a IssueEntity object
     *
     * @param  \stdClass $issue
     * @return IssueEntity
     */
    public static function hydrate(\stdClass $issue)
    {
        $hydrated = new IssueEntity();

        if (isset($issue->id)) {
            $hydrated->setId($issue->id);
        }

        if (isset($issue->comments)) {
            $hydrated->setComments(CommentHydrator::hydrateCollection($issue->comments));
        }

        if (isset($issue->summaries)) {
            $hydrated->setSummaries(SummaryHydrator::hydrateCollection($issue->summaries));
        }

        if (isset($issue->markups)) {
            $hydrated->setMarkups(MarkupHydrator::hydrateCollection($issue->markups));
        }

        if (isset($issue->origin)) {
            $hydrated->setOrigin(OriginTypeHydrator::hydrate($issue->origin));
        }

        if (isset($issue->depth)) {
            $hydrated->setDepth($issue->depth);
        }

        if (isset($issue->type)) {
            $hydrated->setType(TypeHydrator::hydrate($issue->type));
        }

        if (isset($issue->reviews)) {
            $hydrated->setReviews(ReviewHydrator::hydrateCollection($issue->reviews));
        }

        if (isset($issue->reviewed)) {
            $hydrated->setReviewed($issue->reviewed);
        }

        if (isset($issue->negatively_reviewd)) {
            $hydrated->setNegativelyReviewed($issue->negatively_reviewd);
        }

        if (isset($issue->sink)) {
            $hydrated->setSink(SinkHydrator::hydrate($issue->sink));
        }

        if (isset($issue->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($issue->scan));
        }

        if (isset($issue->effort)) {
            $hydrated->setEffort($issue->effort);
        }

        if (isset($issue->complete)) {
            $hydrated->setComplete($issue->complete);
        }

        if (isset($issue->source)) {
            $hydrated->setSource(SourceHydrator::hydrate($issue->source));
        }

        if (isset($issue->concat)) {
            $hydrated->setConcat(ConcatHydrator::hydrate($issue->concat));
        }

        if (isset($issue->cve)) {
            $hydrated->setCve($issue->cve);
        }

        if (isset($issue->readable)) {
            // cast the stdClass object into an array
            $readableArray = json_decode(json_encode($issue->readable), true);

            $hydrated->setReadable($readableArray);
        }

        if (isset($issue->parent)) {
            $hydrated->parent(self::hydrate($issue->parent));
        }

        return $hydrated;
    }
}
