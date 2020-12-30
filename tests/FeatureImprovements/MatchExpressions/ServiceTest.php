<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\MatchExpressions;

use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\ServiceNew;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\ServiceOld;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceA;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceB;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceC;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testOldAndNewServiceActSameOnDecide(): void
    {
        $serviceOld = new ServiceOld();
        $serviceNew = new ServiceNew();

        self::assertSame(10, $serviceOld->decide('b'));
        self::assertSame(10, $serviceNew->decide('b'));

        self::assertSame(100, $serviceOld->decide('d'));
        self::assertSame(100, $serviceNew->decide('d'));
    }

    public function testOldAndNewServiceActSameOnGetSubService(): void
    {
        $serviceOld = new ServiceOld();
        $serviceNew = new ServiceNew();

        $subServiceA = new SubServiceA();
        $subServiceB = new SubServiceB();
        $subServiceC = new SubServiceC();

        self::assertEquals($subServiceA, $serviceOld->getSubService('a'));
        self::assertEquals($subServiceB, $serviceOld->getSubService('b'));
        self::assertEquals($subServiceC, $serviceOld->getSubService('c'));
        self::expectException(\Exception::class);
        $serviceOld->getSubService('d');

        self::assertEquals($subServiceA, $serviceNew->getSubService('a'));
        self::assertEquals($subServiceB, $serviceNew->getSubService('b'));
        self::assertEquals($subServiceC, $serviceNew->getSubService('c'));
        self::expectException(\Exception::class);
        $serviceNew->getSubService('d');
    }
}