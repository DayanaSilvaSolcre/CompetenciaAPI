<?php

declare(strict_types=1);

namespace CompetenceDomain\Service\DelegatorFactory;

use CompetenceDomain\Service\CompanyClassificationService;
use CompetenceDomain\Service\CompanyService;
use CompetenceDomain\Service\CompanyServicesService;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\DelegatorFactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CompanyServiceDelegatorFactory implements DelegatorFactoryInterface
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $name, callable $callback, ?array $options = null)
    {
        $service = $callback();
        if ($service instanceof CompanyService) {
            $service->setCompanyClassificationService($container->get(CompanyClassificationService::class));
            $service->setCompanyServices($container->get(CompanyServicesService::class));
        }

        return $service;
    }
}
