<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\MarkupEntity;

class MarkupHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * MarkupEntity objects
     *
     * @param  array <stdClass> $markup
     * @return array<MarkupEntity>
     */
    public static function hydrateCollection(array $markup)
    {
        $hydrated = [];

        foreach ($markups as $markup) {
            $hydrated[] = self::hydrate($markup);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a MarkupEntity object
     *
     * @param  \stdClass $markup
     * @return MarkupEntity
     */
    public static function hydrate(\stdClass $markup)
    {
        $hydrated = new MarkupEntity();

        if (isset($markup->id)) {
            $hydrated->setId($markup->id);
        }

        if (isset($markup->markup)) {
            $hydrated->setMarkup($markup->markup);
        }
    }
}
