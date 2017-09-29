<?php
if (!class_exists('\PHPUnit\Framework\TestCase') &&
    class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}
class FirstTest extends PHPUnit_Framework_TestCase{
    public function testFirst(){
        $this->assertEquals(1,1);
    }
}

//php phpunit.phar --verbose tests