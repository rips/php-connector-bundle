<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;

class CommentsResponse extends BaseResponse
{
    /** @var CommentEntity[] */
    private $comments;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->comments = CommentHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return CommentEntity[]
     */
    public function getComments()
    {
        return $this->comments;
    }
}
