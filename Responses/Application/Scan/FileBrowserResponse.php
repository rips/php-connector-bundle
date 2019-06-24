<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileBrowserEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileBrowserHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class FileBrowserResponse extends BaseResponse
{
    /** @var FileBrowserEntity[] */
    private $files;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->files = FileBrowserHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return FileBrowserEntity[]
     */
    public function getFiles()
    {
        return $this->files;
    }
}
