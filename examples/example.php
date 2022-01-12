<?php

namespace App;

/**
 * This is a comment.
 */
final class Example
{
    public function helloWorld(string $name): void
    {
        echo sprintf('Hello, %s', $name);
    }
}


$e = new Example();
$e->helloWorld();