<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\LibraryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\LibraryHydrator;

class LibrariesResponse extends BaseResponse
{
    /** @var LibraryEntity[] */
    private $libraries;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->libraries = LibraryHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return LibraryEntity[]
     */
    public function getLibraries()
    {
        return $this->libraries;
    }
}
