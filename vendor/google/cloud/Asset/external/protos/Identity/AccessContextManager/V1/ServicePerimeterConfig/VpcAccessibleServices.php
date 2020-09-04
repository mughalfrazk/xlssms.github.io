<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/service_perimeter.proto

namespace Google\Identity\AccessContextManager\V1\ServicePerimeterConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how APIs are allowed to communicate within the Service
 * Perimeter.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ServicePerimeterConfig.VpcAccessibleServices</code>
 */
class VpcAccessibleServices extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to restrict API calls within the Service Perimeter to the list of
     * APIs specified in 'allowed_services'.
     *
     * Generated from protobuf field <code>bool enable_restriction = 1;</code>
     */
    private $enable_restriction = false;
    /**
     * The list of APIs usable within the Service Perimeter. Must be empty
     * unless 'enable_restriction' is True.
     *
     * Generated from protobuf field <code>repeated string allowed_services = 2;</code>
     */
    private $allowed_services;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_restriction
     *           Whether to restrict API calls within the Service Perimeter to the list of
     *           APIs specified in 'allowed_services'.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_services
     *           The list of APIs usable within the Service Perimeter. Must be empty
     *           unless 'enable_restriction' is True.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\ServicePerimeter::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to restrict API calls within the Service Perimeter to the list of
     * APIs specified in 'allowed_services'.
     *
     * Generated from protobuf field <code>bool enable_restriction = 1;</code>
     * @return bool
     */
    public function getEnableRestriction()
    {
        return $this->enable_restriction;
    }

    /**
     * Whether to restrict API calls within the Service Perimeter to the list of
     * APIs specified in 'allowed_services'.
     *
     * Generated from protobuf field <code>bool enable_restriction = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableRestriction($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_restriction = $var;

        return $this;
    }

    /**
     * The list of APIs usable within the Service Perimeter. Must be empty
     * unless 'enable_restriction' is True.
     *
     * Generated from protobuf field <code>repeated string allowed_services = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedServices()
    {
        return $this->allowed_services;
    }

    /**
     * The list of APIs usable within the Service Perimeter. Must be empty
     * unless 'enable_restriction' is True.
     *
     * Generated from protobuf field <code>repeated string allowed_services = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_services = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpcAccessibleServices::class, \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig_VpcAccessibleServices::class);

