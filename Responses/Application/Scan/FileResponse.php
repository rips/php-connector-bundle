<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;

class FileResponse extends BaseResponse
{
    /** @var FileEntity */
    private $file;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->file = FileHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return FileEntity
     */
    public function getFile()
    {
        return $this->file;
    }
}
