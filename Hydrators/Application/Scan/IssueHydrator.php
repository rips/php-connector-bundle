<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use \stdClass;
use \DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SinkHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Origin\TypeHydrator as OriginTypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummaryHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SourceHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator as IssueTypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ConcatHydrator;

class IssueHydrator
{
    /**
    * Hydrate a collection of issue objects into a collection of
    * IssueEntity objects
    *
    * @param stdClass[] $issues
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
     * @param stdClass $issue
     * @return IssueEntity
     */
    public static function hydrate(stdClass $issue)
    {
        $hydrated = new IssueEntity();

        if (isset($issue->id)) {
            $hydrated->setId($issue->id);
        }

        if (isset($issue->comments) && is_array($issue->comments)) {
            $hydrated->setComments(CommentHydrator::hydrateCollection($issue->comments));
        }

        if (isset($issue->summaries) && is_array($issue->summaries)) {
            $hydrated->setSummaries(SummaryHydrator::hydrateCollection($issue->summaries));
        }

        if (isset($issue->markups) && is_array($issue->markups)) {
            $hydrated->setMarkups(MarkupHydrator::hydrateCollection($issue->markups));
        }

        if (isset($issue->origin)) {
            $hydrated->setOrigin(OriginTypeHydrator::hydrate($issue->origin));
        }

        if (isset($issue->depth)) {
            $hydrated->setDepth($issue->depth);
        }

        if (isset($issue->type)) {
            $hydrated->setType(IssueTypeHydrator::hydrate($issue->type));
        }

        if (isset($issue->reviews) && is_array($issue->reviews)) {
            $hydrated->setReviews(ReviewHydrator::hydrateCollection($issue->reviews));
        }

        if (isset($issue->reviewed)) {
            $hydrated->setReviewed($issue->reviewed);
        }

        if (isset($issue->negatively_reviewd)) {
            $hydrated->setNegativelyReviewed($issue->negatively_reviewd);
        }

        if (isset($issue->source)) {
            $hydrated->setSource(SourceHydrator::hydrate($issue->source));
        }

        if (isset($issue->sink)) {
            $hydrated->setSink(SinkHydrator::hydrate($issue->sink));
        }

        if (isset($issue->concat)) {
            $hydrated->setConcat(ConcatHydrator::hydrate($issue->concat));
        }

        if (isset($issue->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($issue->scan));
        }

        if (isset($issue->parent)) {
            $hydrated->setParent(self::hydrate($issue->parent));
        }

        if (isset($issue->parent_count)) {
            $hydrated->setParentCount($issue->parentCount);
        }

        if (isset($issue->children) && is_array($issue->children)) {
            $hydrated->setChildren(self::hydrateCollection($issue->children));
        }

        if (isset($issue->last_modification)) {
            $hydrated->setLastModification(new DateTime($issue->last_modification));
        }

        if (isset($issue->readable)) {
            $hydrated->setReadable($issue->readable);
        }

        if (isset($issue->effort)) {
            $hydrated->setEffort($issue->effort);
        }

        if (isset($issue->complete)) {
            $hydrated->setComplete($issue->complete);
        }

        if (isset($issue->cve)) {
            $hydrated->setCve($issue->cve);
        }

        if (isset($issue->minimal)) {
            $hydrated->setMinimal($issue->minimal);
        }

        return $hydrated;
    }
}
