<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;

class ExportService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new IssueService instance
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
     * @return void
     */
    public function exportCsv($appId, $scanId, $outFile, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->exports()
            ->exportCsv($appId, $scanId, $outFile, $queryParams);
    }

    /**
     * Export info for scan in JIRA CSV format
     *
     * @param int $appId
     * @param int $scanId
     * @param string $outFile
     * @param array $queryParams
     * @return void
     */
    public function exportJiraCsv($appId, $scanId, $outFile, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->exports()
            ->exportJiraCsv($appId, $scanId, $outFile, $queryParams);
    }

    /**
     * Export info for scan in PDF format
     *
     * @param int $appId
     * @param int $scanId
     * @param string $outFile
     * @param array $queryParams
     * @return void
     */
    public function exportPdf($appId, $scanId, $outFile, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->exports()
            ->exportPdf($appId, $scanId, $outFile, $queryParams);
    }
}
