<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue\ReviewBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\ReviewsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\ReviewResponse;

class ReviewService
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
     * Get all reviews for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return ReviewsResponse
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->reviews()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return new ReviewsResponse($response);
    }

    /**
     * Get review for issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $reviewId
     * @param array $queryParams
     * @return ReviewResponse
     */
    public function getById($appId, $scanId, $issueId, $reviewId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->reviews()
            ->getById($appId, $scanId, $issueId, $reviewId, $queryParams);

        return new ReviewResponse($response);
    }

    /**
     * Create a new review for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param ReviewBuilder $input
     * @param array $queryParams
     * @return ReviewResponse
     */
    public function create($appId, $scanId, $issueId, ReviewBuilder $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->reviews()
            ->create($appId, $scanId, $issueId, $input->toArray(), $queryParams);

        return new ReviewResponse($response);
    }
}
