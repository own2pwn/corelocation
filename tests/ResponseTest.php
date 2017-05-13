<?php

/*
 * This file is part of core location package
 *
 * Copyright (c) 2017 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://github.com/tuupola/corelocation
 *
 */

namespace Tuupola\CoreLocation;

use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    private $hex =
        "0001000000010000016e12410a1162343a35643a35303a39343a33393a62" .
        "33122c088098f7f8bcffffffff01108098f7f8bcffffffff0118ffffffff" .
        "ffffffffff0128ffffffffffffffffff0112300a1039383a313a61373a65" .
        "363a38353a3730121908a1fbf8911610b7cedd9c09182a20002811300c58" .
        "3c608201a8010612310a1137343a38353a32613a32663a34393a36611219" .
        "08beb0fa911610f7abe29c09182b2000280c300e583f60e108a801011230" .
        "0a10383a37363a66663a38363a33333a6335121908ddd9f7911610caede3" .
        "9c09182a2000280e300d583f609501a80106122f0a0f303a32323a373a36" .
        "343a31393a3439121908e5b7fa91161096a7e29c09182a2000280b301058" .
        "3f609b02a8010b122e0a0e65633a383a36623a34623a383a631219088484" .
        "fb911610aaa8e39c09182a2000280d300e583f60ac02a8010412310a1133" .
        "633a38633a66383a38303a38363a6265121908eeb6f7911610a7a3e29c09" .
        "182e2000280d300d583f60a801a80102";

    public function testShouldBeTrue()
    {
        $this->assertTrue(true);
    }

    public function testShouldCreateFromString()
    {
        $response = (new Response)->fromString(hex2bin($this->hex));

        $this->assertEquals(7, count($response));
        $this->assertEquals(
            [
                "mac" => "3c:8c:f8:80:86:be",
                "latitude" => 59.43188334,
                "longitude" => 24.76249511,
                "accuracy" => 46,
                "channel" => 2,
            ],
            $response[6]
        );
    }

    public function testShouldImplementCountable()
    {
        $response = (new Response)->fromString(hex2bin($this->hex));
        $this->assertEquals(7, count($response));
    }

    public function testShouldImplementArrayAccess()
    {
        $response = (new Response)->fromString(hex2bin($this->hex));

        unset($response[6]);
        $this->assertEquals(6, count($response));
        $this->assertFalse(isset($response[6]));
        $this->assertTrue(isset($response[5]));

        $response[6] = "Brawndo!";
        $this->assertEquals(7, count($response));
        $this->assertEquals("Brawndo!", $response[6]);

        $response[] = "Plants crave!";
        $this->assertEquals(8, count($response));
        $this->assertEquals("Plants crave!", $response[7]);
    }

    public function testShouldImplementIterator()
    {
        $response = (new Response)->fromString(hex2bin($this->hex));
        foreach ($response as $key => $value) {
            $this->assertTrue(isset($value["mac"]));
        }
    }
}
