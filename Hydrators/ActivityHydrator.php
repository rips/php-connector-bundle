<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\ActivityEntity;

class ActivityHydrator
{
    /**
     * Hydrate a collection of activity objects into a collection of
     * ActivityEntity objects
     *
     * @param stdClass[] $activities
     * @return ActivityEntity[]
     */
    public static function hydrateCollection(array $activities)
    {
        $hydrated = [];

        foreach ($activities as $activity) {
            $hydrated[] = self::hydrate($activity);
        }

        return $hydrated;
    }

    /**
     * Hydrate a activity object into a ActivityEntity object
     *
     * @param stdClass $activity
     * @return ActivityEntity
     */
    public static function hydrate(stdClass $activity)
    {
        $hydrated = new ActivityEntity();

        if (isset($activity->id)) {
            $hydrated->setId($activity->id);
        }

        if (isset($activity->type)) {
            $hydrated->setType($activity->type);
        }

        if (isset($activity->context)) {
            $hydrated->setContext(json_decode(json_encode($activity->context), true));
        }

        if (isset($activity->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($activity->application));
        }

        if (isset($activity->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($activity->created_by));
        }

        if (isset($activity->created_at)) {
            $hydrated->setCreatedAt(new DateTime($activity->created_at));
        }

        return $hydrated;
    }
}
