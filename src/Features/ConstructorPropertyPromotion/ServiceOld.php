<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\Features\ConstructorPropertyPromotion;

use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceA;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceB;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceC;
use LeoVie\TryPHP8\Features\ConstructorPropertyPromotion\Mock\SubServiceD;

// PHP >= 7.4
class ServiceOld
{
    private SubServiceA $subServiceA;
    private SubServiceB $subServiceB;
    private SubServiceC $subServiceC;
    private SubServiceD $subServiceD;

    public function __construct(
        SubServiceA $subServiceA,
        SubServiceB $subServiceB,
        SubServiceC $subServiceC,
        SubServiceD $subServiceD
    ) {
        $this->subServiceA = $subServiceA;
        $this->subServiceB = $subServiceB;
        $this->subServiceC = $subServiceC;
        $this->subServiceD = $subServiceD;
    }

    public function getSubServiceA(): SubServiceA
    {
        return $this->subServiceA;
    }

    public function getSubServiceB(): SubServiceB
    {
        return $this->subServiceB;
    }

    public function getSubServiceC(): SubServiceC
    {
        return $this->subServiceC;
    }

    public function getSubServiceD(): SubServiceD
    {
        return $this->subServiceD;
    }

    public function changeSubServiceD(SubServiceD $subServiceD): void
    {
        $this->subServiceD = $subServiceD;
    }
}