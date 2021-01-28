<?php

use PHPUnit\Framework\TestCase;
use AMBase\Podelu\URL;

class URLTest extends TestCase
{
    public function testIsIncludeCity()
    {
        /**
         * В состав этих урлов должен входить город
         */
        $urls = ['/rko/abakan/', '/rko/ip/abakan/', '/rko/ip/abakan/'];
        foreach ($urls as $url) {
            $_SERVER['REQUEST_URI'] = $url;
            $this->assertTrue(URL::isIncludeCity(), "Error: в состав урл $url должен входить город");
        }

        /**
         * В состав этих урлов не должен входить город
         */
        $urls = [
            '/',
            '/banks/',
            '/rko/',
            '/rko/ip/',
            '/rko/ooo/',
            '/rko/online/',
            '/rko/besplatny/',
            '/rko/registracya/',
            '/rko/ip/online/',
            '/rko/ip/besplatny/',
            '/rko/ooo/online/',
            '/rko/ooo/besplatny/',
        ];
        foreach ($urls as $url) {
            $_SERVER['REQUEST_URI'] = $url;
            $this->assertFalse(URL::isIncludeCity(), "Error: в состав урл $url не должен входить город");
        }
    }

    public function testGetCityCode()
    {
        $_SERVER['REQUEST_URI'] = '/rko/abakan/';
        $this->assertEquals('abakan', URL::getCityCode());

        $_SERVER['REQUEST_URI'] = '/rko/ip/abakan/';
        $this->assertEquals('abakan', URL::getCityCode());

        $_SERVER['REQUEST_URI'] = '/rko/ooo/abakan/';
        $this->assertEquals('abakan', URL::getCityCode());

        $_SERVER['REQUEST_URI'] = '/rko/ooo/besplatny/';
        $this->assertFalse(URL::getCityCode());
    }

    public function testGetCityName()
    {
        $_SERVER['REQUEST_URI'] = '/rko/ooo/abakan/';
        $this->assertEquals('Абакан', URL::getCityName());

        $_SERVER['REQUEST_URI'] = '/rko/ooo/besplatny/';
        $this->assertFalse(URL::getCityName());
    }
}