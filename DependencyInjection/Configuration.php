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
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rips_connector');

        $rootNode->children()
            ->scalarNode('username')->defaultValue('')->end()
            ->scalarNode('password')->defaultValue('')->end()
            ->scalarNode('base_uri')->defaultValue('')->end()
            ->integerNode('timeout')->defaultValue(10)->end()
            ->integerNode('connect_timeout')->defaultValue(10)->end()
            ->end();

        return $treeBuilder;
    }
}
