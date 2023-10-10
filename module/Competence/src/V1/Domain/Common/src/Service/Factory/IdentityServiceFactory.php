<?php

namespace CompetenceCommon\Service\Factory;

use CompetenceCommon\Service\IdentityService;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class IdentityServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): IdentityService
    {
        return new IdentityService();
    }
}
