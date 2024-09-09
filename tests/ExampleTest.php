<?php

namespace YourNamespace\Tests;

use PHPUnit\Framework\TestCase;
use YourNamespace\Example;

class ExampleTest extends TestCase
{
    protected $example;

    protected function setUp(): void
    {
        $this->example = new Example();
    }

    public function testExample()
    {
       $this->assertEquals('Hello, World!', $this->example->greet());
       $this->assertEquals('Hello, foo!', $this->example->greet('foo'));
    }

    public function testExampleWithEmptyName()
    {
        $this->assertEquals('Hello, World!', $this->example->greet(''));
    }
}