<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Origin\TypeHydrator as OriginTypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator as IssueTypeHydrator;

class IssueHydrator
{
    /**
    * Hydrate a collection of issue objects into a collection of
    * IssueEntity objects
    *
    * @param array $issues
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

        if (isset($issue->origin)) {
            $hydrated->setOrigin(OriginTypeHydrator::hydrate($issue->origin));
        }

        if (isset($issue->depth)) {
            $hydrated->setDepth($issue->depth);
        }

        if (isset($issue->type)) {
            $hydrated->setType(IssueTypeHydrator::hydrate($issue->type));
        }

        if (isset($issue->last_review)) {
            $hydrated->setLastReview(ReviewHydrator::hydrate($issue->last_review));
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

        if (isset($issue->entrypoint)) {
            $hydrated->setEntrypoint(EntrypointHydrator::hydrate($issue->entrypoint));
        }

        if (isset($issue->pitfalls) && is_array($issue->pitfalls)) {
            $hydrated->setPitfalls(PitfallHydrator::hydrateCollection($issue->pitfalls));
        }

        if (isset($issue->parent)) {
            $hydrated->setParent(self::hydrate($issue->parent));
        }

        if (isset($issue->parents_count)) {
            $hydrated->setParentsCount($issue->parentsCount);
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

        if (isset($issue->directly_called)) {
            $hydrated->setDirectlyCalled($issue->directly_called);
        }

        if (isset($issue->register_globals)) {
            $hydrated->setRegisterGlobals($issue->register_globals);
        }

        if (isset($issue->process)) {
            $hydrated->setProcess(ProcessHydrator::hydrate($issue->process));
        }

        if (isset($issue->comments_count)) {
            $hydrated->setCommentsCount($issue->comments_count);
        }

        return $hydrated;
    }
}
