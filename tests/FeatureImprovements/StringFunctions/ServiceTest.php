<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\StringFunctions;

use LeoVie\TryPHP8\FeatureImprovements\StringFunctions\ServiceNew;
use LeoVie\TryPHP8\FeatureImprovements\StringFunctions\ServiceOld;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testOldAndNewServiceActSame(): void
    {
        $serviceOld = new ServiceOld();
        $serviceNew = new ServiceNew();

        self::assertTrue($serviceOld->startsWith('foo bar baz', 'foo'));
        self::assertFalse($serviceOld->startsWith('foo bar baz', 'bar'));
        self::assertTrue($serviceOld->endsWith('foo bar baz', 'baz'));
        self::assertFalse($serviceOld->endsWith('foo bar baz', 'foo'));
        self::assertTrue($serviceOld->contains('foo bar baz', 'bar'));
        self::assertFalse($serviceOld->contains('foo bar baz', 'bla'));

        self::assertTrue($serviceNew->startsWith('foo bar baz', 'foo'));
        self::assertFalse($serviceNew->startsWith('foo bar baz', 'bar'));
        self::assertTrue($serviceNew->endsWith('foo bar baz', 'baz'));
        self::assertFalse($serviceNew->endsWith('foo bar baz', 'foo'));
        self::assertTrue($serviceNew->contains('foo bar baz', 'bar'));
        self::assertFalse($serviceNew->contains('foo bar baz', 'bla'));
    }
}