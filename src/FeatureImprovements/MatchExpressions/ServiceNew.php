<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\MatchExpressions;

class ServiceNew
{
    public function decide(string $a): int
    {
        return match ($a) {
            'a' => 1,
            'b' => 10,
            'c', 'd' => 100,
            default => 0
        };
    }
}