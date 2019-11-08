<?php

namespace RIPS\ConnectorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class RIPSConnectorExtension extends Extension
{
    protected $params = ['email', 'password', 'base_uri', 'timeout', 'connect_timeout', 'oauth2', 'mfa'];
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        foreach ($this->params as $param) {
            if (isset($config[$param])) {
                $container->setParameter("{$this->getAlias()}.{$param}", $config[$param]);
            }
        }
    }
}
