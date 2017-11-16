<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue\CommentBuilder;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;

class CommentService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new IssueService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all comments for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return CommentEntity[]
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $comments = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()->getAll($appId, $scanId, $issueId, $queryParams);

        return CommentHydrator::hydrateCollection($comments);
    }

    /**
     * Get comment for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $commentId
     * @param array $queryParams
     * @return CommentEntity
     */
    public function getById($appId, $scanId, $issueId, $commentId, array $queryParams = [])
    {
        $comment = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->getById($appId, $scanId, $issueId, $commentId, $queryParams);

        return CommentHydrator::hydrate($comment);
    }

    /**
     * Create a comment for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param CommentBuilder $input
     * @param array $queryParams
     * @return CommentEntity
     */
    public function create($appId, $scanId, $issueId, CommentBuilder $input, array $queryParams = [])
    {
        $comment = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->create($appId, $scanId, $issueId, $input->toArray(), $queryParams);

        return CommentHydrator::hydrate($comment);
    }

    /**
     * Delete all comments for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->deleteAll($appId, $scanId, $issueId, $queryParams);
    }

    /**
     * Delete comment for issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $commentId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $scanId, $issueId, $commentId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->deleteById($appId, $scanId, $issueId, $commentId, $queryParams);
    }
}
