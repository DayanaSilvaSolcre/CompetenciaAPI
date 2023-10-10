<?php

declare(strict_types=1);

use IntranetDomain\Hydrator\CommentAndFilesHydrator;
use IntranetDomain\Hydrator\CommentHydrator;
use IntranetDomain\Hydrator\EntityWithFilesHydrator;
use IntranetDomain\Hydrator\Factory\CommentAndFilesHydratorFactory;
use IntranetDomain\Hydrator\Factory\CommentHydratorFactory;
use IntranetDomain\Hydrator\Factory\EntityWithFilesHydratorFactory;
use IntranetDomain\Hydrator\Factory\UserHydratorFactory;
use IntranetDomain\Hydrator\UserHydrator;
use IntranetDomain\Service;
use IntranetDomain\Service\DelegatorFactory;
use IntranetDomain\Service\Factory;

return [
    'service_manager' => [
        'factories' => [
        ],
        'delegators' => [
        ],
    ],

];
