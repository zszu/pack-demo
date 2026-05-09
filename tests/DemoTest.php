<?php
/**
 * Create By: zsz
 * File: DemoTest.php
 * Time: 2026/5/9 16:48
 */

namespace Zsz\Hello\Tests;

use PHPUnit\Framework\TestCase;
use Zsz\Hello\Demo;

class DemoTest extends TestCase
{
    public function testDemo()
    {
        $demo = new Demo();
        $result = $demo->hello();
        $this->assertEquals('hello world', $result);
    }
}
