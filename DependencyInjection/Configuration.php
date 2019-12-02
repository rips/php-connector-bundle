<?php

namespace RIPS\ConnectorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('rips_connector');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('email')->defaultValue('')->end()
                ->scalarNode('password')->defaultValue('')->end()
                ->scalarNode('base_uri')->defaultValue('')->end()
                ->integerNode('timeout')->defaultValue(10)->end()
                ->integerNode('connect_timeout')->defaultValue(10)->end()
                ->arrayNode('oauth2')->canBeEnabled()
                    ->children()
                        ->scalarNode('client_id')->end()
                        ->booleanNode('store_token')->defaultFalse()->end()
                        ->scalarNode('token_file_path')->end()
                        ->scalarNode('access_token')->end()
                    ->end()
                ->end()
                ->arrayNode('mfa')->canBeEnabled()
                    ->children()
                        ->scalarNode('token')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
