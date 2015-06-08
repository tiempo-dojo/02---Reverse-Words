<?php

namespace App\tests;

use PHPUnit_Framework_TestCase;
use App\App;
use \InvalidArgumentException;

class AppTest extends PHPUnit_Framework_TestCase
{
    private $obj;
    
    public function setUp()
    {
        $this->obj = new App;
    }
    
    public function testReverseWords()
    {
        $needed = 'this is a test';
        $expected = 'test a is this';
        $rs = $this->obj->reverseWords($needed); 
        $this->assertEquals($expected, $rs);
    }
    
    public function testCanConvertStringToArray()
    {
        $needed = 'this is a test';
        $rs = $this->obj->stringToArray($needed); 
        $this->assertTrue(is_array($rs));
        $this->assertEquals($needed, implode(' ', $rs));
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testCanConvertStringToArrayEmptyString()
    {
        $rs = $this->obj->stringToArray(''); 
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testCanConvertStringToArrayNotString()
    {
        $rs = $this->obj->stringToArray(array(1)); 
    }
}