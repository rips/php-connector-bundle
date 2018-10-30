<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;

class CommentResponse extends BaseResponse
{
    /** @var CommentEntity */
    private $comment;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->comment = CommentHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return CommentEntity
     */
    public function getComment()
    {
        return $this->comment;
    }
}
