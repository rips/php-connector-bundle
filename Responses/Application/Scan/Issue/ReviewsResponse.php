<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ReviewEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;

class ReviewsResponse extends BaseResponse
{
    /** @var ReviewEntity[] */
    private $reviews;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->reviews = ReviewHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ReviewEntity[]
     */
    public function getReviews()
    {
        return $this->reviews;
    }
}
