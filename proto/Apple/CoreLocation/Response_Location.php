<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: corelocation.proto

namespace Apple\CoreLocation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Apple.CoreLocation.Response.Location</code>
 */
class Response_Location extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 latitude = 1;</code>
     */
    private $latitude = 0;
    /**
     * <code>int64 longitude = 2;</code>
     */
    private $longitude = 0;
    /**
     * <code>int32 horizontalAccuracy = 3;</code>
     */
    private $horizontalAccuracy = 0;
    /**
     * <pre>
     * always 0 - don't ask why
     * </pre>
     *
     * <code>int32 unknown4 = 4;</code>
     */
    private $unknown4 = 0;
    /**
     * <pre>
     * -500 if unknown
     * </pre>
     *
     * <code>int32 altitude = 5;</code>
     */
    private $altitude = 0;
    /**
     * <pre>
     * Not set if altitude=-500
     * </pre>
     *
     * <code>int32 verticalAccuracy = 6;</code>
     */
    private $verticalAccuracy = 0;
    /**
     * <pre>
     * 5..63 ?
     * </pre>
     *
     * <code>int32 unknown11 = 11;</code>
     */
    private $unknown11 = 0;
    /**
     * <pre>
     * 30..4000 ?
     * </pre>
     *
     * <code>int32 unknown12 = 12;</code>
     */
    private $unknown12 = 0;

    public function __construct() {
        \GPBMetadata\Corelocation::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 latitude = 1;</code>
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * <code>int64 latitude = 1;</code>
     */
    public function setLatitude($var)
    {
        GPBUtil::checkInt64($var);
        $this->latitude = $var;
    }

    /**
     * <code>int64 longitude = 2;</code>
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * <code>int64 longitude = 2;</code>
     */
    public function setLongitude($var)
    {
        GPBUtil::checkInt64($var);
        $this->longitude = $var;
    }

    /**
     * <code>int32 horizontalAccuracy = 3;</code>
     */
    public function getHorizontalAccuracy()
    {
        return $this->horizontalAccuracy;
    }

    /**
     * <code>int32 horizontalAccuracy = 3;</code>
     */
    public function setHorizontalAccuracy($var)
    {
        GPBUtil::checkInt32($var);
        $this->horizontalAccuracy = $var;
    }

    /**
     * <pre>
     * always 0 - don't ask why
     * </pre>
     *
     * <code>int32 unknown4 = 4;</code>
     */
    public function getUnknown4()
    {
        return $this->unknown4;
    }

    /**
     * <pre>
     * always 0 - don't ask why
     * </pre>
     *
     * <code>int32 unknown4 = 4;</code>
     */
    public function setUnknown4($var)
    {
        GPBUtil::checkInt32($var);
        $this->unknown4 = $var;
    }

    /**
     * <pre>
     * -500 if unknown
     * </pre>
     *
     * <code>int32 altitude = 5;</code>
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * <pre>
     * -500 if unknown
     * </pre>
     *
     * <code>int32 altitude = 5;</code>
     */
    public function setAltitude($var)
    {
        GPBUtil::checkInt32($var);
        $this->altitude = $var;
    }

    /**
     * <pre>
     * Not set if altitude=-500
     * </pre>
     *
     * <code>int32 verticalAccuracy = 6;</code>
     */
    public function getVerticalAccuracy()
    {
        return $this->verticalAccuracy;
    }

    /**
     * <pre>
     * Not set if altitude=-500
     * </pre>
     *
     * <code>int32 verticalAccuracy = 6;</code>
     */
    public function setVerticalAccuracy($var)
    {
        GPBUtil::checkInt32($var);
        $this->verticalAccuracy = $var;
    }

    /**
     * <pre>
     * 5..63 ?
     * </pre>
     *
     * <code>int32 unknown11 = 11;</code>
     */
    public function getUnknown11()
    {
        return $this->unknown11;
    }

    /**
     * <pre>
     * 5..63 ?
     * </pre>
     *
     * <code>int32 unknown11 = 11;</code>
     */
    public function setUnknown11($var)
    {
        GPBUtil::checkInt32($var);
        $this->unknown11 = $var;
    }

    /**
     * <pre>
     * 30..4000 ?
     * </pre>
     *
     * <code>int32 unknown12 = 12;</code>
     */
    public function getUnknown12()
    {
        return $this->unknown12;
    }

    /**
     * <pre>
     * 30..4000 ?
     * </pre>
     *
     * <code>int32 unknown12 = 12;</code>
     */
    public function setUnknown12($var)
    {
        GPBUtil::checkInt32($var);
        $this->unknown12 = $var;
    }

}

