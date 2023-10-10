<?php

declare(strict_types = 1);

namespace CompetenceCommon\Service\Factory;

use Interop\Container\ContainerInterface;
use CompetenceCommon\Service\EmailService;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class EmailServiceFactory implements FactoryInterface
{
    /**
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): EmailService
    {
        $loader = new FilesystemLoader('data/templates/');
        $twig   = new Environment($loader, [
            'cache' => 'data/cache/emails/',
        ]);

        return new EmailService(
            $container->get('config'),
            $container->get('ApiLogger'),
            $twig
        );
    }
}
