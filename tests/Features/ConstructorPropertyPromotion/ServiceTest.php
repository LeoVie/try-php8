<?php

namespace LeoVie\TryPHP8\Tests\Features\ConstructorPropertyPromotion;

use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceA;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceB;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceC;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceD;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\ServiceNew;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\ServiceOld;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testOldAndNewServiceActSame(): void
    {
        $a = new SubServiceA();
        $b = new SubServiceB();
        $c = new SubServiceC();
        $d = new SubServiceD();

        $serviceOld = new ServiceOld($a, $b, $c, $d);
        $serviceNew = new ServiceNew($a, $b, $c, $d);

        self::assertSame($a, $serviceOld->getSubServiceA());
        self::assertSame($b, $serviceOld->getSubServiceB());
        self::assertSame($c, $serviceOld->getSubServiceC());
        self::assertSame($d, $serviceOld->getSubServiceD());

        self::assertSame($a, $serviceNew->getSubServiceA());
        self::assertSame($b, $serviceNew->getSubServiceB());
        self::assertSame($c, $serviceNew->getSubServiceC());
        self::assertSame($d, $serviceNew->getSubServiceD());

        $otherD = new SubServiceD();
        $serviceOld->changeSubServiceD($otherD);
        $serviceNew->changeSubServiceD($otherD);

        self::assertSame($otherD, $serviceOld->getSubServiceD());
        self::assertSame($otherD, $serviceNew->getSubServiceD());
    }
}