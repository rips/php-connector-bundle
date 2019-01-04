<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\CallbackEntity;

class CallbackHydrator
{
    /**
     * Hydrate a collection of callback objects into a collection of
     * CallbackEntity objects
     *
     * @param stdClass[] $callbacks
     * @return CallbackEntity[]
     */
    public static function hydrateCollection(array $callbacks)
    {
        $hydrated = [];

        foreach ($callbacks as $callback) {
            $hydrated[] = self::hydrate($callback);
        }

        return $hydrated;
    }

    /**
     * Hydrate a callback object into a CallbackEntity object
     *
     * @param stdClass $callback
     * @return CallbackEntity
     */
    public static function hydrate(stdClass $callback)
    {
        $hydrated = new CallbackEntity();

        if (isset($callback->id)) {
            $hydrated->setId($callback->id);
        }

        if (isset($callback->internal)) {
            $hydrated->setInternal($callback->internal);
        }

        if (isset($callback->observe_organization)) {
            $hydrated->setObserveOrganization($callback->observe_organization);
        }

        if (isset($callback->url)) {
            $hydrated->setUrl($callback->url);
        }

        if (isset($callback->reports) && is_array($callback->reports)) {
            $hydrated->setReports($callback->reports);
        }

        if (isset($callback->created_at)) {
            $hydrated->setCreatedAt(new DateTime($callback->created_at));
        }

        if (isset($callback->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($callback->created_by));
        }

        if (isset($callback->users) && is_array($callback->users)) {
            $hydrated->setUsers(UserHydrator::hydrateCollection($callback->users));
        }

        if (isset($callback->applications) && is_array($callback->applications)) {
            $hydrated->setApplications(ApplicationHydrator::hydrateCollection($callback->applications));
        }

        if (isset($callback->scans) && is_array($callback->scans)) {
            $hydrated->setScans(ScanHydrator::hydrateCollection($callback->scans));
        }

        return $hydrated;
    }
}
