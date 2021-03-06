<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Domain wrapper
 *
 * @package Plesk_Modules
 * @since 11.5
 */
class pm_Domain
{

    /**
     * Create new domain wrapper
     *
     * @param int $domainId
     * @throws pm_Exception
     */
    public function __construct($domainId) { }

    /**
     * Retrieve domain by known id
     *
     * @param int $domainId
     * @return pm_Domain
     * @throws pm_Exception
     * @since 17.0
     */
    public static function getByDomainId($domainId) { }

    /**
     * Retrieve domain by GUID
     *
     * @param string $domainGuid
     * @return pm_Domain
     * @throws pm_Exception
     * @since 17.0
     */
    public static function getByGuid($domainGuid) { }

    /**
     * Retrieve domain by display name
     *
     * @param string $domainName
     * @return pm_Domain
     * @throws pm_Exception
     * @since 17.0
     */
    public static function getByName($domainName) { }

    /**
     * Retrieve all domains
     *
     * @param bool $mainDomainsOnly [optional] Return only main domains. Default is false.
     * @return pm_Domain[]
     * @since 17.0
     */
    public static function getAllDomains($mainDomainsOnly = false) { }

    /**
     * Retrieve all client domains
     *
     * @param pm_Client $client Domains owner
     * @param bool $mainDomainsOnly [optional] Return only main domains. Default is false.
     * @return pm_Domain[]
     * @since 17.0
     */
    public static function getDomainsByClient($client, $mainDomainsOnly = false) { }

    /**
     * Retrieve domain id
     *
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve domain GUID
     *
     * @return string
     * @since 17.0
     */
    public function getGuid() { }

    /**
     * Retrieve domain name in ASCII format
     *
     * @return string
     */
    public function getName() { }

    /**
     * Retrieve domain name to be displayed in UI
     *
     * @return string
     * @since 17.0
     */
    public function getDisplayName() { }

    /**
     * Retrieve domain IP addresses
     *
     * @param bool $public Return public IP addresses. For Plesk servers behind NAT private IP addresses are matched to corresponding public ones. Default is true.
     * @return string[]
     * @since 17.0
     */
    public function getIpAddresses($public = true) { }

    /**
     * Check if domain is active
     *
     * @return bool
     * @since 17.0
     */
    public function isActive() { }

    /**
     * Check if domain is suspended
     *
     * @return bool
     * @since 17.0
     */
    public function isSuspended() { }

    /**
     * Check if domain is disabled
     *
     * @return bool
     * @since 17.0
     */
    public function isDisabled() { }

    /**
     * Retrieve owner of domain
     *
     * @return pm_Client
     * @since 12.0
     */
    public function getClient() { }

    /**
     * Retrieve property of domain
     *
     * @param string $name
     * @return string
     * @throws pm_Exception
     */
    public function getProperty($name) { }

    /**
     * Return value of custom domain setting by given name
     *
     * @param string $name Setting name
     * @param string $default Default value of setting
     * @return string|null
     * @since 17.0
     */
    public function getSetting($name, $default = null) { }

    /**
     * Define value of custom domain setting
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     * @since 17.0
     */
    public function setSetting($name, $value) { }

    /**
     * Delete all custom domain settings
     *
     * @param string $prefix Settings name prefix
     * @since 17.0
     */
    public function deleteSettings($prefix = '') { }

    /**
     * Retrieve permission value by name
     *
     * @param string $name Permission name
     * @return mixed
     * @since 17.0
     */
    public function hasPermission($name) { }

    /**
     * Retrieve Plesk core permission value by name
     *
     * @param string $name Permission name
     * @return mixed
     * @since 17.0
     */
    public function hasCorePermission($name) { }

    /**
     * Retrieve limit value by name
     *
     * @param string $name Limit name
     * @return mixed
     * @since 17.0
     */
    public function getLimit($name) { }

    /**
     * Retrieve Plesk core limit value by name
     *
     * @param string $name Limit name
     * @return mixed
     * @since 17.0
     */
    public function getCoreLimit($name) { }

    /**
     * Check if domain has web hosting configured
     *
     * @return bool
     * @since 17.0
     */
    public function hasHosting() { }

    /**
     * Retrieve domain home path
     *
     * @return string
     * @since 17.0
     */
    public function getHomePath() { }

    /**
     * Retrieve domain system user login
     *
     * @return string
     * @since 17.0
     */
    public function getSysUserLogin() { }

    /**
     * Retrieve domain document root directory. Available for domains with web hosting
     *
     * @param bool $relative [optional] Return root directory relative to home path. Default is false.
     * @return string
     * @throws pm_Exception
     * @since 17.0
     */
    public function getDocumentRoot($relative = false) { }

    /**
     * Retrieve domain vhost system directory. Available for domains with web hosting
     *
     * @return string
     * @throws pm_Exception
     * @since 17.0
     */
    public function getVhostSystemPath() { }

    /**
     * Get included plan items
     *
     * @return string[]
     * @since 17.0
     */
    public function getPlanItems() { }

}
