<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\reverseString;

require_once __DIR__ . '/../vendor/autoload.php';

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
