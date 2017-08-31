<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\FunctionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class SourceHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * SourceEntity objects
     *
     * @param  array<\stdClass> $source
     * @return array<SourceEntity>
     */
    public static function hydrateCollection(array $sources)
    {
        $hydrated = [];

        foreach ($sources as $source) {
            $hydrated[] = self::hydrate($source);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a SourceEntity object
     *
     * @param  \stdClass $source
     * @return SourceEntity
     */
    public static function hydrate(\stdClass $source)
    {
        $hydrated = new SourceEntity();

        if (isset($source->id)) {
            $hydrated->setId($source->id);
        }

        if (isset($source->line)) {
            $hydrated->setLine($source->line);
        }

        if (isset($source->name)) {
            $hydrated->setName($source->name);
        }

        if (isset($source->parameter)) {
            $hydrated->setParameter($source->parameter);
        }

        if (isset($source->file)) {
            $hydrated->setFile(FileHydrator::hydrate($source->file));
        }

        if (isset($source->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($source->scan));
        }

        if (isset($source->function)) {
            $hydrated->setFunction(FunctionHydrator::hydrate($source->function));
        }
    }
}
