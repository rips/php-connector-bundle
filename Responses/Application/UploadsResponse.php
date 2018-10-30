<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\UploadEntity;
use RIPS\ConnectorBundle\Hydrators\Application\UploadHydrator;

class UploadsResponse extends BaseResponse
{
    /** @var UploadEntity[] */
    private $uploads;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->uploads = UploadHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return UploadEntity[]
     */
    public function getUploads()
    {
        return $this->uploads;
    }
}
