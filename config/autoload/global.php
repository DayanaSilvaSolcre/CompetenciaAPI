<?php

declare(strict_types=1);
try {
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../../');
    $dotenv->load();
} catch (Throwable $t) {
    unset($t);
}

return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db'                            => [
        'adapters' => [
            'dummy' => [],
        ],
    ],
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDO\MySQL\Driver::class,
                'params'      => [
                    'host'          => $_ENV['DB_HOST'],
                    'port'          => $_ENV['DB_PORT'],
                    'user'          => $_ENV['DB_USER'],
                    'password'      => $_ENV['DB_PASSWORD'],
                    'dbname'        => $_ENV['DB_NAME'],
                    'charset'       => 'utf8mb4',
                    'driverOptions' => [
                        1002 => 'SET NAMES utf8mb4',
                    ],
                ],
            ],
        ],
        'driver'     => [
            'my_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'paths' => [
                    0 => __DIR__ . '/../../module/Competence/src/V1/Domain/Competence/src/Entity',
                ],
            ],
            'orm_default'          => [
                'drivers' => [
                    'CompetenceDomain\\Entity' => 'my_annotation_driver',
                ],
            ],
        ],
    ],
];
