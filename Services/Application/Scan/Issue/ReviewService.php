<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;

class ReviewService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new IssueService instance
     *
     * @param APIService
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
     * @return ReviewEntity[]
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $reviews = $this->api->issues()->reviews()->getAll($appId, $scanId, $issueId, $queryParams);

        return ReviewHydrator::hydrateCollection($reviews);
    }

    /**
     * Get review for issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $reviewId
     * @return ReviewEntity
     */
    public function getById($appId, $scanId, $issueId, $reviewId)
    {
        $review = $this->api->issues()->reviews()->getById($appId, $scanId, $issueId, $reviewId);

        return ReviewHydrator::hydrate($review);
    }

    /**
     * Create a new review for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param ReviewBuilder $input
     * @return ReviewEntity
     */
    public function create($appId, $scanId, $issueId, ReviewBuilder $input)
    {
        $review = $this->api->issues()->reviews()->create($appId, $scanId, $issueId, $input->toArray());

        return ReviewHydrator::hydrate($review);
    }
}
