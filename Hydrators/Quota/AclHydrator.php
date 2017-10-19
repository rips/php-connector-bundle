<?php

namespace RIPS\ConnectorBundle\Hydrators\Quota;

use \stdClass;
use RIPS\ConnectorBundle\Entities\Quota\AclEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\TeamHydrator;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

class AclHydrator
{
    /**
     * Hydrate a collection of acl objects into a collection of
     * AclEntity objects
     *
     * @param stdClass[] $acls
     * @return AclEntity[]
     */
    public static function hydrateCollection(array $acls)
    {
        $hydrated = [];

        foreach ($acls as $acl) {
            $hydrated[] = self::hydrate($acl);
        }

        return $hydrated;
    }

    /**
     * Hydrate a acl object into a AclEntity object
     *
     * @param stdClass $acl
     * @return AclEntity
     */
    public static function hydrate(stdClass $acl)
    {
        $hydrated = new AclEntity();

        if (isset($acl->id)) {
            $hydrated->setId($acl->id);
        }

        if (isset($acl->owner_user)) {
            $hydrated->setOwnerUser(UserHydrator::hydrate($acl->owner_user));
        }

        if (isset($acl->owner_team)) {
            $hydrated->setOwnerTeam(TeamHydrator::hydrate($acl->owner_team));
        }

        if (isset($acl->quota)) {
            $hydrated->setQuota(QuotaHydrator::hydrate($acl->quota));
        }

        if (isset($acl->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($acl->created_by));
        }

        if (isset($acl->view)) {
            $hydrated->setView($acl->view);
        }

        if (isset($acl->delete)) {
            $hydrated->setDelete($acl->delete);
        }

        if (isset($acl->create)) {
            $hydrated->setCreate($acl->create);
        }

        if (isset($acl->edit)) {
            $hydrated->setEdit($acl->edit);
        }

        if (isset($acl->use)) {
            $hydrated->setUse($acl->use);
        }

        if (isset($acl->manage)) {
            $hydrated->setManage($acl->manage);
        }

        if (isset($acl->immutable)) {
            $hydrated->setImmutable($acl->immutable);
        }

        return $hydrated;
    }
}
