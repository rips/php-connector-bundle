<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\LicenseEntity;

class LicenseHydrator
{
    /**
     * Hydrate a collection of license objects into a collection of
     * LicenseEntity objects
     *
     * @param stdClass[] $licenses
     * @return LicenseEntity[]
     */
    public static function hydrateCollection(array $licenses)
    {
        $hydrated = [];

        foreach ($licenses as $license) {
            $hydrated[] = self::hydrate($license);
        }

        return $hydrated;
    }

    /**
     * Hydrate a license object into a LicenseEntity object
     *
     * @param stdClass $license
     * @return LicenseEntity
     */
    public static function hydrate(stdClass $license)
    {
        $hydrated = new LicenseEntity();

        if (isset($license->id)) {
            $hydrated->setId($license->id);
        }

        if (isset($license->created_at)) {
            $hydrated->setCreatedAt(new DateTime($license->created_at));
        }

        if (isset($license->valid_until)) {
            $hydrated->setValidUntil(new DateTime($license->valid_until));
        }

        if (isset($license->quota_distributed)) {
            $hydrated->setQuotaDistributed($license->quota_distributed);
        }

        if (isset($license->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($license->created_by));
        }

        if (isset($license->parent)) {
            $hydrated->setParent(self::hydrate($license->parent));
        }

        if (isset($license->child)) {
            $hydrated->setChild(self::hydrate($license->child));
        }

        if (isset($license->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($license->organization));
        }

        return $hydrated;
    }
}
