<?php
/**
 * Created by PhpStorm.
 * User: 745
 * Date: 2016/11/25
 * Time: 11:04
 */

namespace mihoshi\Curl;

require_once '../src/Curl.php';

class CurlTest extends \PHPUnit_Framework_TestCase
{

    public function test_construct()
    {
        $curl = new Curl('http://google.com');
        $this->assertInstanceOf('\\mihoshi\\Curl\\Curl', $curl);
    }

    public function test_get(){
        $curl = new Curl('http://google.com');
        $curl->get();
    }
}
