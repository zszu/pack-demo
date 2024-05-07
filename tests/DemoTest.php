<?php
/**
 * Created by zsz
 * User zsz
 * Time: 2023/11/17 13:36
 */

use PHPUnit\Framework\TestCase;
use zszu\Demo;

class DemoTest extends TestCase
{
    public function testHello()
    {
        $demo = new Demo();
        $this->assertSame("hello world", $demo->hello());
    }
}