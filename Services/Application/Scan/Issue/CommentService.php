<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue\CommentBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\CommentsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\CommentResponse;

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
     * @return CommentsResponse
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()->getAll($appId, $scanId, $issueId, $queryParams);

        return new CommentsResponse($response);
    }

    /**
     * Get comment for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $commentId
     * @param array $queryParams
     * @return CommentResponse
     */
    public function getById($appId, $scanId, $issueId, $commentId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->getById($appId, $scanId, $issueId, $commentId, $queryParams);

        return new CommentResponse($response);
    }

    /**
     * Create a comment for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param CommentBuilder $input
     * @param array $queryParams
     * @return CommentResponse
     */
    public function create($appId, $scanId, $issueId, CommentBuilder $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->create($appId, $scanId, $issueId, $input->toArray(), $queryParams);

        return new CommentResponse($response);
    }

    /**
     * Delete all comments for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->deleteAll($appId, $scanId, $issueId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete comment for issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $commentId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $scanId, $issueId, $commentId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->comments()
            ->deleteById($appId, $scanId, $issueId, $commentId, $queryParams);

        return new BaseResponse($response);
    }
}
