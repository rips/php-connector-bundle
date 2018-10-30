<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\LibraryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\LibraryHydrator;

class LibraryResponse extends BaseResponse
{
    /** @var LibraryEntity */
    private $library;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->library = LibraryHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return LibraryEntity
     */
    public function getLibrary()
    {
        return $this->library;
    }
}
