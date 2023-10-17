<?php

declare(strict_types=1);

use CompetenceDomain\Service\CompanyService;
use CompetenceDomain\Service\DelegatorFactory\CompanyServiceDelegatorFactory;

return [
    'service_manager' => [
        'factories'  => [],
        'delegators' => [
            CompanyService::class => [
                CompanyServiceDelegatorFactory::class,
            ],
        ],
    ],
];
