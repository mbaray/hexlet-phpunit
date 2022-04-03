<?php

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\User;

require_once __DIR__ . '/../vendor/autoload.php';

class UserTest extends TestCase
{
    public function testGetName(): void
    {
        $name = 'john';
        $children = [new User('Mark')];
        $user = new User($name, $children);

        $this->assertEquals($name, $user->getName());
        $this->assertEquals(collect($children), $user->getChildren());
    }
}
