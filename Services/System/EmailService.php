<?php

namespace RIPS\ConnectorBundle\Services\System;

use RIPS\ConnectorBundle\InputBuilders\System\Email\TestBuilder;
use RIPS\ConnectorBundle\InputBuilders\System\EmailBuilder;
use RIPS\ConnectorBundle\Responses\System\EmailResponse;
use RIPS\ConnectorBundle\Services\APIService;

class EmailService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new EmailService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get Email settings
     *
     * @param array $queryParams
     * @return EmailResponse
     */
    public function get(array $queryParams = [])
    {
        $response = $this->api->systems()->email()->get($queryParams);

        return new EmailResponse($response);
    }

    /**
     * Update Email settings
     *
     * @param EmailBuilder $input
     * @param array $queryParams
     * @return EmailResponse
     */
    public function update(EmailBuilder $input, array $queryParams = [])
    {
        $response = $this->api->systems()->email()->update($input->toArray(), $queryParams);

        return new EmailResponse($response);
    }

    /**
     * Test Email settings
     *
     * @param TestBuilder $input
     * @param array $queryParams
     * @return EmailResponse
     */
    public function test(TestBuilder $input, array $queryParams = [])
    {
        $response = $this->api->systems()->email()->test($input->toArray(), $queryParams);

        return new EmailResponse($response);
    }
}
