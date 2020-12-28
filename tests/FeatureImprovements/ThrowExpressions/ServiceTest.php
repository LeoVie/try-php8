<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\ThrowExpressions;

use LeoVie\TryPHP8\FeatureImprovements\ThrowExpressions\ServiceNew;
use LeoVie\TryPHP8\FeatureImprovements\ThrowExpressions\ServiceOld;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testOldAndNewServiceActSame(): void
    {
        $serviceOld = new ServiceOld();
        $serviceNew = new ServiceNew();

        self::expectException(\Exception::class);
        $serviceOld->assignOrThrow(null);
        self::expectException(\Exception::class);
        $serviceNew->assignOrThrow(null);

        $serviceOld->assignOrThrow(null);
        self::addToAssertionCount(1);
        $serviceNew->assignOrThrow(null);
        self::addToAssertionCount(1);
    }
}