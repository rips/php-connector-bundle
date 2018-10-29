<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ReviewEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;

class ReviewResponse extends BaseResponse
{
    /** @var ReviewEntity */
    private $review;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->review = ReviewHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ReviewEntity
     */
    public function getReview()
    {
        return $this->review;
    }
}
