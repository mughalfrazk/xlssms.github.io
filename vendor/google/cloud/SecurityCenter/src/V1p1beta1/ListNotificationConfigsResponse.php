<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing notification configs.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.ListNotificationConfigsResponse</code>
 */
class ListNotificationConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Notification configs belonging to the requested parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.NotificationConfig notification_configs = 1;</code>
     */
    private $notification_configs;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig[]|\Google\Protobuf\Internal\RepeatedField $notification_configs
     *           Notification configs belonging to the requested parent.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Notification configs belonging to the requested parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.NotificationConfig notification_configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationConfigs()
    {
        return $this->notification_configs;
    }

    /**
     * Notification configs belonging to the requested parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.NotificationConfig notification_configs = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig::class);
        $this->notification_configs = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

