<?php
namespace Competence;

use Laminas\ApiTools\Provider\ApiToolsProviderInterface;
use Laminas\Stdlib\ArrayUtils;

class Module implements ApiToolsProviderInterface
{
    public function getConfig()
    {
        $config      = [];
        $configFiles = [
            include __DIR__ . '/config/module.config.php',
            include __DIR__ . '/src/V1/Domain/Competence/config/module.config.php',
            include __DIR__ . '/src/V1/Domain/Common/config/module.config.php',
        ];
        foreach ($configFiles as $file) {
            $config = ArrayUtils::merge($config, $file);
        }
        return $config;
    }

    public function getAutoloaderConfig()
    {
        return [
            'Laminas\ApiTools\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
