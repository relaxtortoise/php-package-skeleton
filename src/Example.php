<?php

namespace YourNamespace;

class Example
{
    public function greet(string $name = 'World'): string
    {
        $name = $name ?: 'World';
        return "Hello, $name!";
    }
}