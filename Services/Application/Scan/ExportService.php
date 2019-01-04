<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;

class ExportService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ExportService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Export info for scan in CSV format
     *
     * @param int $appId
     * @param int $scanId
     * @param string $outFile
     * @param array $queryParams
     * @return BaseResponse
     */
    public function exportCsv($appId, $scanId, $outFile, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->exportCsv($appId, $scanId, $outFile, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Export info for scan in PDF format
     *
     * @param int $appId
     * @param int $scanId
     * @param string $outFile
     * @param array $queryParams
     * @return BaseResponse
     */
    public function exportPdf($appId, $scanId, $outFile, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->exportPdf($appId, $scanId, $outFile, $queryParams);

        return new BaseResponse($response);
    }
}
