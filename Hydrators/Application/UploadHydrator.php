<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use RIPS\ConnectorBundle\Entities\Application\UploadEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class UploadHydrator
{
    /**
     * Hydrate a collection of upload objects into a collection of
     * UploadEntity objects
     *
     * @param  stdClass[] $users
     * @return UploadEntity[]
     */
    public static function hydrateCollection(array $uploads)
    {
        $hydrated = [];

        foreach ($uploads as $upload) {
            $hydrated[] = self::hydrate($upload);
        }

        return $hydrated;
    }

    /**
     * Hydrate a upload object into a UploadEntity object
     *
     * @param  \stdClass $scan
     * @return ScanEntity
     */
    public static function hydrate(\stdClass $upload)
    {
        $hydrated = new UploadEntity;

        if (isset($upload->id)) {
            $hydrated->setId($upload->id);
        }

        if (isset($upload->submission)) {
            $hydrated->setSubmission($upload->submission);
        }

        if (isset($upload->name)) {
            $hydrated->setName($upload->name);
        }

        if (isset($upload->extension)) {
            $hydrated->setExtension($upload->extension);
        }

        if (isset($upload->size)) {
            $hydrated->setSize($upload->size);
        }

        if (isset($upload->file)) {
            $hydrated->setFile($upload->file);
        }

        if (isset($upload->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($upload->created_by));
        }

        if (isset($upload->scans) && count($upload->scans) > 0) {
            $hydrated->setScans(ScanHydrator::hydrateCollection($upload->scans));
        }

        if (isset($upload->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($upload->application));
        }

        return $hydrated;
    }
}
