<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\TrailingCommas;

class Service
{
    public function __construct(
        private int $a,
        private int $b,
        private int $c,
    ) {}

    public static function create(): static
    {
        return new self(
            100000,
            200000,
            300000,
        );
    }
}