<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\DigestEntity;
use stdClass;

/**
 * Class DigestHydrator
 *
 * Hydrate a digest object into entity
 *
 * @package RIPS\ConnectorBundle\Hydrators\Application\Scan
 */
class DigestHydrator
{
    /**
     * Hydrate an digest object into a DigestEntity object
     *
     * @param stdClass $digest
     * @return DigestEntity
     */
    public static function hydrate(stdClass $digest)
    {
        $hydrated = new DigestEntity();

        if (isset($digest->unresolved_functions)) {
            $hydrated->setUnresolvedFunctions($digest->unresolved_functions);
        }

        if (isset($digest->unresolved_classes)) {
            $hydrated->setUnresolvedClasses($digest->unresolved_classes);
        }

        if (isset($digest->unresolved_methods)) {
            $hydrated->setUnresolvedMethods($digest->unresolved_methods);
        }

        if (isset($digest->scanned_files)) {
            $hydrated->setScannedFiles($digest->scanned_files);
        }

        return $hydrated;
    }
}
