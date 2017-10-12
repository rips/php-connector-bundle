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
        $comments = $this->api->issues()->comments()->getAll($appId, $scanId, $issueId, $queryParams);

        return CommentHydrator::hydrateCollection($comments);
    }

    /**
     * Get comment for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $commentId
     * @return CommentEntity
     */
    public function getById($appId, $scanId, $issueId, $commentId)
    {
        $comment = $this->api->issues()->comments()->getById($appId, $scanId, $issueId, $commentId);

        return CommentHydrator::hydrate($comment);
    }

    /**
     * Create a comment for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param CommentBuilder $input
     * @return CommentEntity
     */
    public function create($appId, $scanId, $issueId, CommentBuilder $input)
    {
        $comment = $this->api->issues()->comments()->create($appId, $scanId, $issueId, $input->toArray());

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
        $this->api->issues()->comments()->deleteAll($appId, $scanId, $issueId, $queryParams);
    }

    /**
     * Delete comment for issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $commentId
     * @return void
     */
    public function deleteById($appId, $scanId, $issueId, $commentId)
    {
        $this->api->issues()->comments()->deleteById($appId, $scanId, $issueId, $commentId);
    }
}
