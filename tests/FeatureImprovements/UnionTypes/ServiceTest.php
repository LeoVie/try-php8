<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\UnionTypes;

use LeoVie\TryPHP8\FeatureImprovements\UnionTypes\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testSubtractWithInts(): void
    {
        $service = new Service();

        self::assertSame(3, $service->subtract(10, 7));
    }

    public function testSubtractWithFloats(): void
    {
        $service = new Service();

        self::assertSame(3.2, $service->subtract(10.5, 7.3));
    }
}