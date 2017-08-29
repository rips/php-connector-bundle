<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\OriginEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\OriginHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SinkHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummarieHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class IssueHydrator
{
    /**
    * Hydrate a collection of user objects into a collection of
    * IssueEntity objects
    *
    * @param  array<stdClass> $issue
    * @return array<IssueEntity>
    */
    public static function hydrateCollection(array $issue)
    {
        $hydrated = [];

        foreach ($issues as $issue) {
            $hydrated[] = self::hydrate($issue);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a IssueEntity object
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

        if (isset($issue->comment)) {
            $hydrated->setComment($issue->comment);
        }

        if (isset($issue->summarie)) {
            $hydrated->setSummarie(SummarieHydrator::hydrate($issue->summarie));
        }

        if (isset($issue->markup)) {
            $hydrated->setMarkup(MarkupHydrator::hydrate($issue->markup));
        }

        if (isset($issue->origin)) {
            $hydrated->setOrigin(OriginHydrator::hydrate($issue->origin));
        }

        if (isset($issue->depth)) {
            $hydrated->setDepth($issue->depth);
        }

        if (isset($issue->type)) {
            $hydrated->setType(TypeHydrator::hydrate($issue->type));
        }

        if (isset($issue->reviews)) {
            $hydrated->setReviews($issue->reviews);
        }

        if (isset($issue->reviewed)) {
            $hydrated->setReviewed($issue->reviewed);
        }

        if (isset($issue->negativelyReviewd)) {
            $hydrated->setNegativelyReviewed($issue->negativelyReviewd);
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
            $hydrated->setSource(SourceHydrator::hyrdator($issue->source));
        }

        if (isset($issue->concat)) {
            $hydrated->setConcat(ConcatHydrator::hydrator($issue->concat));
        }

        return $hydrated;
    }
}
