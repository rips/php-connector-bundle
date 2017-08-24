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
     * @param  stdClass $issue
     * @return IssueEntity
     */
    public static function hydrate(\stdClass $issue)
    {
        $hydrated = new IssueEntity();

        $hydrated->setId($issue->id);
        $hydrated->setComment($issue->comment);
        $hydrated->setSummarie(SummarieHydrator::hydrate($issue->summarie));
        $hydrated->setMarkup(MarkupHydrator::hydrate($issue->markup));
        $hydrated->setOrigin(OriginHydrator::hydrate($issue->origin));
        $hydrated->setDepth($issue->depth);
        $hydrated->setType(TypeHydrator::hydrate($issue->type));
        $hydrated->setReviews($issue->reviews);
        $hydrated->setReviewed($issue->reviewed);
        $hydrated->setNegativelyReviewed($issue->negativelyReviewd);
        $hydrated->setSink(SinkHydrator::hydrate($issue->sink));
        $hydrated->setScan(ScanHydrator::hydrate($issue->scan));
        $hydrated->setEffort($issue->effort);
        $hydrated->setComplete($issue->complete);

        if(isset($issue->source)){
            $hydrated->setSource(SourceHydrator::hyrdator($issue->source));
        }

        if (isset($issue->concat)){
            $hydrated->setConcat(ConcatHydrator::hydrator($issue->concat));
        }

        return $hydrated;
    }
}