<?php

namespace WiosnaBoilerplate\Test;

use PHPUnit_Framework_TestCase;
use WiosnaBoilerplate\Example;

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function testExampleClassExists()
    {
        $this->assertTrue(class_exists(Example::class));
    }

    public function testExampleHasNameAttr()
    {
        $this->assertClassHasAttribute('name', Example::class);
    }

    public function testExampleAllowsSettingsName()
    {
        $test = new Example('foo');
        $this->assertEquals('foo', $test->getName());
    }
}
