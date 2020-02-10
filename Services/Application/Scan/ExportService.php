<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Responses\Application\Scan\Export\Pdf\QueueResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Export\Pdf\QueuesResponse;
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

    /**
     * @param $appId
     * @param $scanId
     * @param array $queryParams
     * @return QueueResponse
     */
    public function queuePdf($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->queuePdf($appId, $scanId, $queryParams);

        return new QueueResponse($response);
    }

    /**
     * @param $appId
     * @param $scanId
     * @param $queueId
     * @param array $queryParams
     * @return QueueResponse
     */
    public function getQueuedPdf($appId, $scanId, $queueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->getQueuedPdf($appId, $scanId, $queueId, $queryParams);

        return new QueueResponse($response);
    }

    /**
     * @param $appId
     * @param $scanId
     * @param array $queryParams
     * @return QueuesResponse
     */
    public function getAllQueuedPdf($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->getAllQueuedPdf($appId, $scanId, $queryParams);

        return new QueuesResponse($response);
    }

    /**
     * @param $appId
     * @param $scanId
     * @param $queueId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $scanId, $queueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->deleteQueuedPdf($appId, $scanId, $queueId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * @param $appId
     * @param $scanId
     * @param $queueId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function downloadQueuedPdf($appId, $scanId, $queueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->exports()
            ->getQueuedPdf($appId, $scanId, $queueId, $queryParams);

        return new BaseResponse($response);
    }
}
