<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\MatchExpressions;

use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\ServiceNew;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\ServiceOld;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testOldAndNewServiceActSame(): void
    {
        $serviceOld = new ServiceOld();
        $serviceNew = new ServiceNew();

        self::assertSame(10, $serviceOld->decide('b'));
        self::assertSame(10, $serviceNew->decide('b'));

        self::assertSame(100, $serviceOld->decide('d'));
        self::assertSame(100, $serviceNew->decide('d'));
    }
}