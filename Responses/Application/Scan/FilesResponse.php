<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;

class FilesResponse extends BaseResponse
{
    /** @var FileEntity[] */
    private $files;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->files = FileHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return FileEntity[]
     */
    public function getFiles()
    {
        return $this->files;
    }
}
