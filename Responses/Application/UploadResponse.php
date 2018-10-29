<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\UploadEntity;
use RIPS\ConnectorBundle\Hydrators\Application\UploadHydrator;

class UploadResponse extends BaseResponse
{
    /** @var UploadEntity */
    private $upload;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->upload = UploadHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return UploadEntity
     */
    public function getUpload()
    {
        return $this->upload;
    }
}
