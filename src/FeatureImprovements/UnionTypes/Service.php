<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\UnionTypes;

class Service
{
    public function subtract(int|float $x, int|float $y): int|float
    {
        return $x - $y;
    }
}