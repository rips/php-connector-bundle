<?php

include 'vendor/autoload.php';

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Services\UserService;

// Create an API service object that gets passed to all other services
$apiService = new APIService(
    'admin@ripstech.com',
    'devmode',
    [
        "base_uri" => 'http://localhost:8020'
    ],
    []
);

$userService = new UserService($apiService);

// Get all users
//$users = $userService->getAll()->getUsers();
//
//foreach ($users as $user) {
//    echo $user->getEmail() . "\n";
//}

$hs = new \RIPS\ConnectorBundle\Services\User\StatisticsService($apiService);

var_dump($hs->getById(4)->getStatistics());
