<?php

declare(strict_types=1);

use CompetenceCommon\Service;
use Solcre\SolcreFramework2\AbstractFactory\BaseServiceAbstractFactory;

return [
    'service_manager'       => [
        'factories' => [
            Service\IdentityService::class => Service\Factory\IdentityServiceFactory::class,
        ]
    ], 'interfaces_classes' => [
        BaseServiceAbstractFactory::IDENTITY_SERVICE_CLASS => Service\IdentityService::class,
    ],
];
