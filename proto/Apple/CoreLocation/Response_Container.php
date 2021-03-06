<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: corelocation.proto

namespace Apple\CoreLocation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Apple.CoreLocation.Response.Container</code>
 */
class Response_Container extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string mac = 1;</code>
     */
    private $mac = '';
    /**
     * <code>.Apple.CoreLocation.Response.Location location = 2;</code>
     */
    private $location = null;
    /**
     * <code>int32 channel = 21;</code>
     */
    private $channel = 0;

    public function __construct() {
        \GPBMetadata\Corelocation::initOnce();
        parent::__construct();
    }

    /**
     * <code>string mac = 1;</code>
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * <code>string mac = 1;</code>
     */
    public function setMac($var)
    {
        GPBUtil::checkString($var, True);
        $this->mac = $var;
    }

    /**
     * <code>.Apple.CoreLocation.Response.Location location = 2;</code>
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * <code>.Apple.CoreLocation.Response.Location location = 2;</code>
     */
    public function setLocation(&$var)
    {
        GPBUtil::checkMessage($var, \Apple\CoreLocation\Response_Location::class);
        $this->location = $var;
    }

    /**
     * <code>int32 channel = 21;</code>
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * <code>int32 channel = 21;</code>
     */
    public function setChannel($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel = $var;
    }

}

