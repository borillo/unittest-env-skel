<?php

require_once __DIR__.'/../lib/Life.php';

class LifeTest extends PHPUnit_Framework_TestCase
{
    protected $life;

    public function setUp()
    {
        $this->life = new Life();
    }

    public function testRocks()
    {
        $this->assertEquals("rocks", $this->life->rocks());
    }
}
?>


