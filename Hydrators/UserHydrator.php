<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\UploadHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\AclHydrator as ApplicationAclHydrator;
use RIPS\ConnectorBundle\Hydrators\Quota\AclHydrator as QuotaAclHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;

class UserHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * UserEntity objects
     *
     * @param stdClass[] $users
     * @return UserEntity[]
     */
    public static function hydrateCollection(array $users)
    {
        $hydrated = [];

        foreach ($users as $user) {
            $hydrated[] = self::hydrate($user);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a UserEntity object
     *
     * @param stdClass $user
     * @return UserEntity
     */
    public static function hydrate(stdClass $user)
    {
        $hydrated = new UserEntity();

        if (isset($user->id)) {
            $hydrated->setId($user->id);
        }

        if (isset($user->username)) {
            $hydrated->setUsername($user->username);
        }

        if (isset($user->empty_username)) {
            $hydrated->setEmptyUsername($user->empty_username);
        }

        if (isset($user->email)) {
            $hydrated->setEmail($user->email);
        }

        if (isset($user->firstname)) {
            $hydrated->setFirstname($user->firstname);
        }

        if (isset($user->lastname)) {
            $hydrated->setLastname($user->lastname);
        }

        if (isset($user->plain_password)) {
            $hydrated->setPlainPassword($user->plain_password);
        }

        if (isset($user->valid_until)) {
            $hydrated->setValidUntil(new DateTime($user->valid_until));
        }

        if (isset($user->created_comments) && is_array($user->created_comments)) {
            $hydrated->setCreatedComments(CommentHydrator::hydrateCollection($user->created_comments));
        }

        if (isset($user->created_reviews) && is_array($user->created_reviews)) {
            $hydrated->setCreatedReviews(ReviewHydrator::hydrateCollection($user->created_reviews));
        }

        if (isset($user->created_applications) && is_array($user->created_applications)) {
            $hydrated->setCreatedApplications(ApplicationHydrator::hydrateCollection($user->created_applications));
        }

        if (isset($user->created_scans) && is_array($user->created_scans)) {
            $hydrated->setCreatedScans(ScanHydrator::hydrateCollection($user->created_scans));
        }

        if (isset($user->created_application_acls) && is_array($user->created_application_acls)) {
            $hydrated->setCreatedApplicationAcls(ApplicationAclHydrator::hydrateCollection($user->created_application_acls));
        }

        if (isset($user->created_quota_acls) && is_array($user->created_quota_acls)) {
            $hydrated->setCreatedQuotaAcls(QuotaAclHydrator::hydrateCollection($user->created_quota_acls));
        }

        if (isset($user->created_licenses) && is_array($user->created_licenses)) {
            $hydrated->setCreatedLicenses(LicenseHydrator::hydrateCollection($user->created_licenses));
        }

        if (isset($user->created_users) && is_array($user->created_users)) {
            $hydrated->setCreatedUsers(self::hydrateCollection($user->created_users));
        }

        if (isset($user->created_teams) && is_array($user->created_teams)) {
            $hydrated->setCreatedTeams(TeamHydrator::hydrateCollection($user->created_teams));
        }

        if (isset($user->created_uploads) && is_array($user->created_uploads)) {
            $hydrated->setCreatedUploads(UploadHydrator::hydrateCollection($user->created_uploads));
        }

        if (isset($user->application_acls) && is_array($user->application_acls)) {
            $hydrated->setApplicationAcls(ApplicationAclHydrator::hydrateCollection($user->application_acls));
        }

        if (isset($user->quota_acls) && is_array($user->quota_acls)) {
            $hydrated->setQuotaAcls(QuotaAclHydrator::hydrateCollection($user->quota_acls));
        }

        if (isset($user->logs) && is_array($user->logs)) {
            $hydrated->setLogs(LogHydrator::hydrateCollection($user->logs));
        }

        if (isset($user->created_by)) {
            $hydrated->setCreatedBy(self::hydrate($user->created_by));
        }

        if (isset($user->last_modification)) {
            $hydrated->setLastModification(new DateTime($user->last_modification));
        }

        if (isset($user->chargedQuota)) {
            $hydrated->setChargedQuota(QuotaHydrator::hydrate($user->charged_quota));
        }

        if (isset($user->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($user->organisation));
        }

        if (isset($user->teams) && is_array($user->teams)) {
            $hydrated->setTeams(TeamHydrator::hydrateCollection($user->teams));
        }

        if (isset($user->roles)) {
            $hydrated->setRoles($user->roles);
        }

        if (isset($user->root)) {
            $hydrated->setRoot($user->root);
        }

        if (isset($user->whitelisted_ips)) {
            $hydrated->setWhitelistedIps($user->whitelisted_ips);
        }

        return $hydrated;
    }
}
